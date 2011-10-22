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
}