<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 07/12/15
 * Time: 01:33
 */

namespace AppBundle\ParsingPages;

use AppBundle\Parser\simple_html_dom;

class ByCategoryParse
{
    private $html;

    public function __construct($category)
    {
        $this->html = new simple_html_dom();
        $this->html = \AppBundle\Parser\file_get_html("http://ua.jobrapido.com/поиск-вакансий/категории/".$category);
    }

    public function searchOne($way)
    {
        $data = $this->html->find($way);
        return $data;
    }

    public function searchMore($way)
    {
        $data = $this->html->find($way);
        $result = array();
        foreach($data as $value) {
            $result[] = $value->plaintext;
        }
        return $result;
    }

    public function __destruct()
    {
        $this->html->clear();
        unset($this->html);
    }
}