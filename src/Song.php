<?php

class Song implements \JsonSerializable {

    public function __construct(
        public int $id,
        public string $name,
        public string $artist,
        public int $tracknum,
        public string $duration
        )
    {}

    public function jsonSerialize(): array
    {
        return array(
            'id' => $this->id,
            'name' => $this->name,
            'artist' => $this->artist,
            'tracknumber' => $this->tracknum,
            'duration' => $this->duration
        );
    }
}
