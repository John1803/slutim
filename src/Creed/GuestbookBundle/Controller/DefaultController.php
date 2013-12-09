<?php

namespace Creed\GuestbookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CreedGuestbookBundle:Default:index.html.twig');
    }
}
