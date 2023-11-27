<?php

class OST implements \JsonSerializable
{

    /**
     * @param int $id
     * @param string $name
     * @param string $vdname
     * @param int $year
     * @param array $tracklist
     */
    public function __construct (

        public int $id,
        public string $name,
        public string $vdname,
        public int $year,
        public array $tracklist

    ) {}

    public function jsonSerialize(): array //Es wird als ein Array zurückgegeben
    {
        return array(                               // Json Serialze macht eben dieses Key und Value also 'id' (key) => $this->id (value)
            'id' => $this->id,
            'name' => $this->name,
            'video_game_name' => $this->vdname,
            'release_year' => $this->year,
            'songs' => $this->tracklist
        );

    }
}
