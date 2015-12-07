<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 07/11/15
 * Time: 15:30
 */

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;


class IndexSearchEntity
{
    /**
     * @Assert\Length(
     *      min = 2,
     *      max = 40,
     *      minMessage = "Длина строки должна быть больше {{ limit }} символов",
     *      maxMessage = "Длина строки должна быть меньше {{ limit }} символов"
     * )
     */

    protected $job;

    /**
     * @Assert\Length(
     *      min = 2,
     *      max = 30,
     *      minMessage = "Длина строки должна быть больше {{ limit }} символов",
     *      maxMessage = "Длина строки должна быть меньше {{ limit }} символов"
     * )
     */

    protected $where;

    protected $distance;

    public function setJob($job)
    {
        $this->job = $job;
    }

    public function getJob()
    {
        return $this->job;
    }

    public function setWhere($where)
    {
        $this->where = $where;
    }

    public function getWhere()
    {
        return $this->where;
    }

    public function setDistance($distance)
    {
        $this->distance = $distance;
    }

    public function getDistance()
    {
        return $this->distance;
    }

}