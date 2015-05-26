<?php

namespace Samyn\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdvertController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SamynTestBundle:Advert:index.html.twig', array('name' => $name));
    }

    public function newpageAction($name)
    {
        return $this->render('SamynTestBundle:Advert:newpage.html.twig', array('name' => $name));
    }

}
