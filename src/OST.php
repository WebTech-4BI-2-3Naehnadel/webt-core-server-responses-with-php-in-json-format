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
        public array $tracklist

    ) {}

    public function jsonSerialize():mixed
    {
        return array(
            'id' => $this->id,
            'name' => $this->name,
            'video game name' => $this->vdname,
            'release year' => $this->year,
        );

    }
}