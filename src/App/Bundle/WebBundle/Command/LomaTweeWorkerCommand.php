<?php

namespace App\Bundle\WebBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand,
    Symfony\Component\Console;

/**
 * LomaTweeWorkerCommand class
 * 
 */
class LomaTweeWorkerCommand extends ContainerAwareCommand
{
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
        $container  = $this->getContainer();
        
        $output->write('Fetching for users to be notified... ');
        
        $screenName     = $input->getArgument('user');
        $userCollection = $this->getUserCollection($screenName);
        
        $output->writeln('OK!');
        
        foreach ($userCollection as $user) {
            $output->writeln(\Doctrine\Common\Util\Debug::export($user, 3));
        }
        
        $output->writeln('Notifications send.');
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
}