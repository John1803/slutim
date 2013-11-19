<?php
/**
 * Created by PhpStorm.
 * User: will-o-the-wisp
 * Date: 19.11.13
 * Time: 0:19
 */

namespace Acme\DemoBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TwbsController extends Controller
{
    public function indexAction()
    {
       return $this->render('AcmeDemoBundle:Twbs:boot.html.twig');
    }

} 