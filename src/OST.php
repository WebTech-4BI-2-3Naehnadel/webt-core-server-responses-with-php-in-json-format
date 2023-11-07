<?php

namespace src;
class OST implements \JsonSerializable
{

    /**
     * @param int $id
     * @param string $name
     * @param string $vdname
     * @param int $year
     */
    public function __construct (

        public int $id,
        public string $name,
        public string $vdname,
        public int $year,

    ) {}

    public function jsonSerialize()
    {

    }
}