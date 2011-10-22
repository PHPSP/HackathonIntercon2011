<?php

namespace App\Bundle\WebBundle\Services;

use Symfony\Component\DependencyInjection\Container,
    App\Bundle\WebBundle\Services\Twitter\ApiService,
    App\Bundle\WebBundle\Entity\User;

/**
 * LomaTwee Worker Service class.
 * 
 */
class LomaTweeWorkerService
{
    /**
     * @var App\Bundle\WebBundle\Services\Twitter\ApiService
     */
    private $twitter;
    
    /**
     * @var Symfony\Component\DependencyInjection\Container
     */
    private $container;
    
    private $blacklistedWords = array(
        'I',
        'i',
        'you',
        'he',
        'she',
        'they',
        'am',
        'is',
        'are',
        'and',
        'or',
        'also',
        'yet',
        'still',
        'the',
        'a',
        'an',
        'me',
        'mine',
        'your',
        'yours',
        'his',
        'her',
        'hers',
        'their',
        'theirs',
        'what',
        'who',
        'why',
        'when',
        'how',
        'was',
        'were',
        'but',
        'much',
        'many',
        'at',
        'in',
        'on',
        'from',
        'to',
        'with',
        'without',
        'via'
    );
    
    /**
     * Constructor.
     * 
     * @param App\Bundle\WebBundle\Services\Twitter\ApiService $twitter 
     * @param Symfony\Component\DependencyInjection\Container $container
     */
    public function __construct(ApiService $twitter, Container $container)
    {
        $this->twitter   = $twitter;
        $this->container = $container;
    }
    
    /**
     * Retrieve an Interatable ResultSet of subscribed Users.
     * 
     * @return Doctrine\ORM\Internal\Hydration\IteratableResult
     */
    public function getUsers()
    {
        $em      = $this->container->get('doctrine')->getEntityManager();
        $builder = $em->getRepository('AppWebBundle:User')->createQueryBuilder('u');
        
        return $builder->getQuery()->getResult();
    }
    
    /**
     * Retrieve subscribed User based on it screen name.
     * 
     * @param string $screenName
     * 
     * @return Doctrine\Common\Collections\ArrayCollection 
     */
    public function getUser($screenName)
    {
        $em      = $this->container->get('doctrine')->getEntityManager();
        $builder = $em->getRepository('AppWebBundle:User')->createQueryBuilder('u');
        
        $builder->where('u.screenName = ?0')
                ->setParameter(0, $screenName);
        
        return $builder->getQuery()->getResult();
    }
    
    /**
     * Retrieve User timeline keywords.
     * 
     * @param App\Bundle\WebBundle\Entity\User $user 
     */
    public function getUserTimelineKeywords(User $user)
    {
        $timeline = $this->twitter->getUserTimeline($user);
        $words    = array();
        
        foreach ($timeline as $tweet) {
            $dirtyWords  = explode(' ', $tweet->text);
            $mappedWords = array_map(array($this, 'filterWord'), $dirtyWords);
            
            $words = array_merge($words, $mappedWords);
        }
        
        $words = array_filter($words);
        
        return $words;
    }
    
    /**
     * Filter a keyword.
     * 
     * @param string $word
     * 
     * @return string|null 
     */
    private function filterWord($word)
    {
        $word = trim($word, '.,!?/\\\'\";:[]{}|-_+=$%ˆ&*()~`');
        
        if (
            in_array(substr($word, 0, 1), array('#', '@')) ||
            mb_strlen($word) < 3 ||
            in_array($word, $this->blacklistedWords) ||
            in_array(substr($word, 0, 4), array('http'))
        ) {
            return null;
        }
        
        return $word;
    }
}