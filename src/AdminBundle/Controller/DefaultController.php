<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AdminBundle:Default:index.html.twig');
    }

     public function loginAction()
    {
      return $this->render('AdminBundle:Security:login.html.twig');
    }
     public function usersAction()
    {
        return $this->render('AdminBundle:Users:users.html.twig');
    }
      public function blogAction()
    {
        return $this->render('AdminBundle:Blog:blog.html.twig');
    }
      public function espaceparentAction()
    {
        return $this->render('AdminBundle:Esparent:espace.html.twig');
    }
     public function eventAction()
    {
        return $this->render('AdminBundle:Event:event.html.twig');
    }
    
}
