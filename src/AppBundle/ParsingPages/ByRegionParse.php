<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 07/12/15
 * Time: 00:39
 */

namespace AppBundle\ParsingPages;

use AppBundle\Parser\simple_html_dom;

class ByRegionParse
{
    private $html;

    public function __construct($region)
    {
        $this->html = new simple_html_dom();
        $result = explode(" ",$region);
        $this->html = \AppBundle\Parser\file_get_html("http://ua.jobrapido.com/поиск-вакансий/в-регионе/".$result[0]."+".$result[1]);
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