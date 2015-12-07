<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 06/12/15
 * Time: 21:53
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ContactsController extends Controller
{
    /**
     * @Route("/contacts", name="contacts")
     * @Template("AppBundle:Contacts:contacts.html.twig")
     */

    public function indexAction()
    {
        return array();
    }
}