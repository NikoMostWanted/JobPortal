<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 07/11/15
 * Time: 15:01
 */

namespace AppBundle\Controller;


use AppBundle\Forms\IndexSearchForm;
use AppBundle\Entity\IndexSearchEntity;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends Controller
{

    /**
     * @Route("/index", name="index")
     * @Template("AppBundle:Index:index.html.twig")
     */

    public function indexAction(Request $request)
    {
        $indexSearchEntity = new IndexSearchEntity();

        $form = $this->createForm(new IndexSearchForm(), $indexSearchEntity, array('attr'=>array(
            'onsubmit' => 'return checkForm()',
        )));

        $form->handleRequest($request);

        if ($form->isValid()) {
            $data = array(
                'job' => $indexSearchEntity->getJob(),
                'where' => $indexSearchEntity->getWhere(),
                'distance' => $indexSearchEntity->getDistance()
            );
            return $this->redirectToRoute("answerVacation", $data);
        }

        return array('form' => $form->createView());
    }
}