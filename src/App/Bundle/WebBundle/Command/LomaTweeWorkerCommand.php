<?php

namespace App\Bundle\WebBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand,
    Symfony\Component\Console,
    App\Bundle\WebBundle\Entity\User;

/**
 * LomaTweeWorkerCommand class
 * 
 */
class LomaTweeWorkerCommand extends ContainerAwareCommand
{
    /**
     * @var Symfony\Component\Console\Input\InputInterface 
     */
    private $input;
    
    /**
     * @var Symfony\Component\Console\Output\OutputInterface 
     */
    private $output;
    
    /**
     * Configure Command
     */
    public function configure()
    {
        $this->setName('app:lomatwee:worker')
             ->setDescription('It does the magic!!! \o/i')
             ->addArgument('user', Console\Input\InputArgument::OPTIONAL, 'Run worker for a single user');
    }
    
    /**
     * Execute the Command.
     * 
     * @param Symfony\Component\Console\Input\InputInterface $input
     * @param Symfony\Component\Console\Output\OutputInterface $output 
     */
    protected function execute(Console\Input\InputInterface $input, Console\Output\OutputInterface $output)
    {
        $this->input  = $input;
        $this->output = $output;
        
        $container  = $this->getContainer();
        
        $this->output->write('Fetching for users to be notified... ');
        
        $screenName     = $input->getArgument('user');
        $userCollection = $this->getUserCollection($screenName);
        
        $this->output->writeln('OK!');
        
        foreach ($userCollection as $user) {
            $tweetMessage = $this->processUserNotification($user);
            
            if ( ! $tweetMessage) continue;
            
            $this->output->writeln(
                sprintf('Sending as user "<info>%s</info>": %s', $user->getScreenName(), $tweetMessage)
            );
        }
        
        $this->output->writeln('Notifications send.');
    }
    
    /**
     * Retrieve the Collection of User. Fetch a single one if parameter is passed (screen name).
     * 
     * @param string $screenName Optional restriction to fetch for a single user
     * 
     * @return Doctrine\Common\Collections\Collection 
     */
    private function getUserCollection($screenName)
    {
        $container       = $this->getContainer();
        $lomaTweeService = $container->get('lomatwee.worker');
        
        if ($screenName) {
            return $lomaTweeService->getUser($screenName);
        }
        
        return $lomaTweeService->getUsers();
    }
    
    /**
     * Process User notification
     * 
     * @param App\Bundle\WebBundle\Entity\User $user
     * 
     * @return boolean 
     */
    private function processUserNotification(User $user)
    {
        if ( ! $this->isScheduledForProcessment($user)) {
            return null;
        }
        
        $container       = $this->getContainer();
        $lomaTweeService = $container->get('lomatwee.worker');
        $lomadeeService  = $container->get('lomadee.api');
        
        $keywords = $lomaTweeService->getUserTimelineKeywords($user);
        $products = $lomadeeService->searchProducts(implode(',', $keywords));
        
        $selectedProduct = $products[rand(0, count($products) - 1)];
        
        return $this->buildTweetMessage($selectedProduct);
    }
    
    /**
     * Check if User is scheduled to be processed.
     *
     * @param App\Bundle\WebBundle\Entity\User $user
     * 
     * @return boolean 
     */
    private function isScheduledForProcessment(User $user)
    {
        $now       = new \DateTime('now');
        $lastRun   = $user->getLastRun();
        $frequency = $user->getFrequency();
        
        return ($lastRun->format('U') + $frequency < $now->format('U'));
    }
    
    /**
     * Retrieve the tweet message of a product.
     * 
     * @param stdClass $product
     * 
     * @return string 
     */
    private function buildTweetMessage($product)
    {
        //$productLink = $product->link;
        
        // Mock URL shortener
        $productLink = 'http://t.co/';
        
        for ($i = 0; $i <= 5; $i++) {
             $productLink .= chr(rand(97, 122));
        }
    
        return $product->name . ', por R$' . $product->minPrice . ' - ' . $productLink . ' #ad';
    }
}