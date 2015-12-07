<?php

/**
 * Created by PhpStorm.
 * User: niko
 * Date: 05/12/15
 * Time: 21:52
 */

namespace AppBundle\ParsingPages;

use AppBundle\Parser\simple_html_dom;

class VacationAnswerParse
{
    private $html;

    public function __construct($job,$where,$distance, $page)
    {
        $this->html = new simple_html_dom();
        $this->html = \AppBundle\Parser\file_get_html("http://ua.jobrapido.com/?w=".$job."&l=".$where."&r=".$distance."&p=".$page);
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