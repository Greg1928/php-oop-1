<?php
    class Movie{
        public $title;
        public $year;
        public $original_language;
        public $running_time;
        public $genre;

        public function __construct($_title, $_year, $_original_language, $_running_time, $_genre)
        {
            $this->title = $_title;
            $this->year = $_year;
            $this->original_language = $_original_language;
            $this->running_time = $_running_time;
            $this->genre = $_genre;
        }

        public function isShort(){
            if($this->running_time <= 45){
                return true;
            }
        }
    }


    $movies = [
        new Movie('The Silence of the Lambs', '1991', 'english', 118, 'thriller'),
        new Movie('Meshes of the Afternoon', '1943', 'silent film', 14, 'experimental'),
    ]

?>