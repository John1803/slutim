<?php

namespace Creed\GuestbookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $form = $this->createForm('message');
        return $this->render('CreedGuestbookBundle:Default:index.html.twig', array('form' => $form->createView()));
    }
}
