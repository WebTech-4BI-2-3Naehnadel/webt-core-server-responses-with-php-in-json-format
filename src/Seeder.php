<?php

namespace src;
require_once "OST.php";
require_once "Song.php";

class Seeder
{
    public function getData(): array
    {
        return array(
            new OST(1, "Animal Crossing:New Horizons Themes", "Animal Crossing", 2021, array(
                new Song(0, "Wedding Studio", "Master of Sounds", 1, "2:12"),
                new Song(1, "1AM", "Master of Sounds", 2, "2:51"),
                new Song(2, "4AM", "Master of Sound", 3, "1:53"),
                new Song(3, "Island Brodcast", "Master of Sounds", 4, "1:29"),
            )),
            new OST(2, "The Sims 4", "The Sims 4",2014, array(
                new Song(0, "Sul Sul", "Ilan Eshkeri", 1, "3:08"),
                new Song(1, "It's the Sims", "Ilan Eshkeri", 2, "2:15"),
                new Song(2, "Beatrix", "Ilan Eshkeri", 3, "3:35"),
                new Song(3, "Goodbye MBK", "Ilan Eshkeri", 4, "2:27")
            ) ),
            new OST(3, "Mario Kart Wiii, The Themes", "Mario Kart wii", 2020, array(
                new Song(0,"Coconus Mall", "Arcade Player", 1, "2:10"),
                new Song(1,"Koopa Cape", "Arcade Player", 2, "4:42"),
                new Song(2,"Title Theme", "Arcade Player", 3, "1:49"),
                new Song(3,"Rainbow Road", "Arcade Player", 4, "1:23"),
            ))
        );
    }
}