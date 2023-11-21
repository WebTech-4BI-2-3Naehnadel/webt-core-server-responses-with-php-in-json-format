<?php

namespace src;

class Song extends OST {

    public function __construct(
        public int $id,
        public string $name,
        public string $artist,
        public int $tracknum,
        public int $duration
        )
    {
    }
}