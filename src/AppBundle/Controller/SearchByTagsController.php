<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 06/12/15
 * Time: 23:35
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class SearchByTagsController extends Controller
{

    /**
     * @Route("/byprofession",name="byprofession")
     * @Template("AppBundle:Profession:profession.html.twig")
     */

    public function professionAction()
    {
        return array();
    }

    /**
     * @Route("/byregions",name="byregions")
     * @Template("AppBundle:Regions:regions.html.twig")
     */

    public function regionAction()
    {
        return array();
    }

    /**
     * @Route("/bycategory",name="bycategory")
     * @Template("AppBundle:Category:category.html.twig")
     */

    public function categoryAction()
    {
        return array();
    }
}