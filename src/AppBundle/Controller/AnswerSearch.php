<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 07/11/15
 * Time: 16:48
 */

namespace AppBundle\Controller;

use AppBundle\ParsingPages\ByCategoryParse;
use AppBundle\ParsingPages\ByProfessionParse;
use AppBundle\ParsingPages\ByRegionParse;
use AppBundle\ParsingPages\VacationAnswerParse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class AnswerSearch extends Controller
{
    /**
     * @Route("/answerVacation",name="answerVacation")
     * @Template("AppBundle:Answer:vacation.html.twig")
     */

    public function answerVacationAction(Request $request)
    {
        $job = $request->get('job');
        $where = $request->get('where');
        $distance = $request->get('distance');
        if(empty($page = $request->get('page'))) {
            $page = 1;
        }
        $html = new VacationAnswerParse($job,$where,$distance,$page);
        $link = $html->searchOne("a.advert-link");
        $top_date = $html->searchMore("p.top-date");
        $town = $html->searchMore("span[itemprop=addressLocality]");
        $company = $html->searchMore("span[itemprop=name]");
        $result_title = $html->searchMore("h2[itemprop=title]");
        $pagination_item = $html->searchMore("a.pagination-item");
        unset($html);
        return array(
            'link'=>$link,
            'top_date'=>$top_date,
            'town'=>$town,
            'company'=>$company,
            'result_title'=>$result_title,
            'pagination_item'=>$pagination_item,
            'job'=>$job,
            'where'=>$where,
            'distance'=>$distance
        );
    }

    /**
     * @Route("/answerProfession",name="answerProfession")
     * @Template("AppBundle:Answer:profession.html.twig")
     */

    public function answerProfessionAction(Request $request)
    {
        $letter = $request->get('letter');
        $byprofession = new ByProfessionParse($letter);
        $profession = $byprofession->searchMore("span.primary a");
        unset($byprofession);
        return array('professions'=>$profession);
    }

    /**
     * @Route("/answerRegion",name="answerRegion")
     * @Template("AppBundle:Answer:regions.html.twig")
     */

    public function answerRegionAction(Request $request)
    {
        $region = $request->get('region');
        $byregion = new ByRegionParse($region);
        $reg = $byregion->searchMore("span.primary a");
        unset($byregion);
        return array('region'=>$reg);
    }

    /**
     * @Route("/answerCategory",name="answerCategory")
     * @Template("AppBundle:Answer:category.html.twig")
     */

    public function answerCategoryAction(Request $request)
    {
        $category = $request->get('category');
        $bycategory = new ByCategoryParse($category);
        $result = $bycategory->searchMore("span.primary a");
        unset($bycategory);
        return array('category'=>$result);
    }
}