<?php

namespace Creed\GuestbookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $message = max(1, (int) $this->getRequest()->query->get('message'));
        $messages = $this->get('creed_guestbook.pagination')->pagination($message);

        $form = $this->createForm('message');
        $form->handleRequest($this->getRequest());
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($form->getData());
            $em->flush();

//            return $this->redirect($this->generateUrl('guestbook_all_messages'));
        }

        return $this->render('CreedGuestbookBundle:Default:index.html.twig', array(
            'form' => $form->createView(),
            'messages' => $messages,
        ));
    }
}
