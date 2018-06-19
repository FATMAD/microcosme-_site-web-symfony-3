<?php

namespace ParentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * parent controller.
 *
 * @Route("parent")
 */

class DefaultController extends Controller
{  

     /**
     * @Route("/login",name="absence")
     * @Template()
     */
    
     public function loginAction()
    {
        return $this->render('ParentBundle:Default:login.html.twig');
    }  
 /**
     * Main secure page
     *
     * @Route("/")
     * @Template()
     */ 
    public function indexAction()
    {
        return $this->render('ParentBundle:Default:index.html.twig');
    }
    /**
     * @Route("/frais",name="frais")
     * @Template()
     */
    public function fraisAction()
    {
        return $this->render('ParentBundle:Default:frais.html.twig');
    }
     /**
     * @Route("/avis",name="avis")
     * @Template()
     */
    public function avisAction()
    {
        return $this->render('ParentBundle:Default:avis_parents.html.twig');
    }
      /**
     * @Route("/cantine",name="cantine")
     * @Template()
     */
    public function cantineAction()
    {
        return $this->render('ParentBundle:Default:menu_cantine.html.twig');
    }
       /**
     * @Route("/reclamtion",name="reclamtion")
     * @Template()
     */
    
     public function reclamationAction()
    {
        return $this->render('ParentBundle:Default:reclamation.html.twig');
    }
      /**
     * @Route("/absence",name="absence")
     * @Template()
     */
    
     public function absenceAction()
    {
        return $this->render('ParentBundle:Default:absence.html.twig');
    }  
}
