<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 06/12/15
 * Time: 22:11
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class InformationController extends Controller
{
    /**
     * @Route("/how", name="how")
     * @Template("AppBundle:How:how.html.twig")
     */

    public function howAction()
    {
        return array();
    }

    /**
     * @Route("/team", name="team")
     * @Template("AppBundle:Team:team.html.twig")
     */

    public function teamAction()
    {
        return array();
    }

    /**
     * @Route("/money", name="money")
     * @Template("AppBundle:Money:money.html.twig")
     */

    public function moneyAction()
    {
        return array();
    }

    /**
     * @Route("/leisure", name="leisure")
     * @Template("AppBundle:Leisure:leisure.html.twig")
     */

    public function leisureAction()
    {
        return array();
    }
}