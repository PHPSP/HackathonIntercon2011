<?php

namespace App\Bundle\WebBundle\Command;

use Symfony\Component\Console;

/**
 * LomaTweeWorkerCommand class
 * 
 */
class LomaTweeWorkerCommand extends Console\Command\Command
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
        $output->writeln('It works!');
    }
}