<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 06/12/15
 * Time: 23:51
 */

namespace AppBundle\ParsingPages;

use AppBundle\Parser\simple_html_dom;

class ByProfessionParse
{
    private $html;

    public function __construct($letter)
    {
        $this->html = new simple_html_dom();
        $this->html = \AppBundle\Parser\file_get_html("http://ua.jobrapido.com/поиск-вакансий/индекс/".$letter);
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