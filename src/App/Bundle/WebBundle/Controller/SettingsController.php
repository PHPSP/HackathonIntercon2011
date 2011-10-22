<?php

namespace App\Bundle\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/settings")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/settings/form")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
    
    /**
     * @Route("/settings/save")
     * @Template()
     */
    public function saveAction()
    {
        return array();
    }
}
