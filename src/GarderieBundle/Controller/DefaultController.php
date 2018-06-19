<?php

namespace GarderieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GarderieBundle:Default:index.html.twig');
    }

    public function aboutAction()
    {
      return $this->render('GarderieBundle:Security:login.html.twig');
    }
    public function serviceAction()
    {
        return $this->render('GarderieBundle:Default:service.html.twig');
    }
    public function blogAction()
    {
        return $this->render('GarderieBundle:Default:blog.html.twig');
    }
    public function contactAction()
    {
        return $this->render('GarderieBundle:Default:contact.html.twig');
    }
    public function eventAction()
    {
        return $this->render('GarderieBundle:Default:event.html.twig');
    }

    public function blogpostAction()
    {
        return $this->render('GarderieBundle:Default:blog_post.html.twig');
    }
    public function registerAction()
    {
        return $this->render('GarderieBundle:Security:register.html.twig');
    }
}
