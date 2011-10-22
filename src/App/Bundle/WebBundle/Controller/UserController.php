<?php

namespace App\Bundle\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use App\Bundle\WebBundle\Entity\User;
use App\Bundle\WebBundle\Form\UserType;

/**
 * User controller.
 *
 * @Route("/user")
 */
class UserController extends Controller
{
    /**
     * @Route("/stats", name="user_stats")
     * @Template()
     */
    public function statsAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $criteria = array('twitterId' => $this->getLoggedUserTwitterId());
        $entity = $em->getRepository('AppWebBundle:User')->findOneBy($criteria);

        if (!$entity) {
            return $this->redirect($this->generateUrl('user_create'));
        }

        return array();
    }
    
    /**
     * @Route("/settings", name="user_settings")
     * @Template()
     */
    public function settingsAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $criteria = array('twitterId' => $this->getLoggedUserTwitterId());
        $entity = $em->getRepository('AppWebBundle:User')->findOneBy($criteria);

        if (!$entity) {
            return $this->redirect($this->generateUrl('user_create'));
        }

        $editForm = $this->createForm(new UserType(), $entity);
        
        return array('form' => $editForm->createView());
    }
    
    /**
     * Lists all User entities.
     *
     * @Route("/", name="user")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('AppWebBundle:User')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Creates a new User entity.
     *
     * @Route("/create", name="user_create")
     * @Template("AppWebBundle:User:new.html.twig")
     */
    public function createAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        
        $criteria = array('twitterId' => $this->getLoggedUserTwitterId());
        $entity = $em->getRepository('AppWebBundle:User')->findOneBy($criteria);
        
        if ($entity !== null) {
            return $this->redirect($this->generateUrl('user_settings'));
        }
        
        $entity  = new User();
        $entity->setTwitterId($this->getLoggedUserTwitterId());
        
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('user_settings'));
    }

    /**
     * Edits an existing User entity.
     *
     * @Route("/settings/save", name="user_settings_save")
     * @Template("AppWebBundle:User:settings.html.twig")
     */
    public function updateAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $criteria = array('twitterId' => $this->getLoggedUserTwitterId());
        $entity = $em->getRepository('AppWebBundle:User')->findOneBy($criteria);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $editForm   = $this->createForm(new UserType(), $entity);
        $request = $this->getRequest();
        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('user_settings'));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a User entity.
     *
     * @Route("/{id}/delete", name="user_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('AppWebBundle:User')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find User entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('user'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    
    private function getLoggedUserTwitterId()
    {
        return '999';
        
        $token = $this->get('security.context')->getToken();
        if ($token === null || !$token->isAuthenticated()) $this->redirect('/');
        var_dump($token->getUser());
        $twitterId = $token->getUser()->getUsername();
        
        return $twitterId;
    }
}
