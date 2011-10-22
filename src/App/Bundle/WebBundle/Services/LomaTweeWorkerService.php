<?php

namespace App\Bundle\WebBundle\Services;

use Symfony\Component\DependencyInjection\Container;

/**
 * 
 */
class LomaTweeWorkerService
{
    /**
     * @var TwitterOAuth
     */
    private $twitter;
    
    /**
     * @var Symfony\Component\DependencyInjection\Container
     */
    private $container;
    
    /**
     * Constructor.
     * 
     * @param TwitterOAuth $twitter 
     * @param Symfony\Component\DependencyInjection\Container $container
     */
    public function __construct(\TwitterOAuth $twitter, Container $container)
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
        
        $builder->where('(u.lastRun + u.frequency) < NOW()');
        
        return $builder->getQuery()->iterate();
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
}