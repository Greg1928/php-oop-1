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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    <h1>Movies</h1>
    <ul>
        <?php foreach($movies as $movie) { ?>
            <li>
                <h2><strong>Title: </strong><?php echo $movie->title; ?></h2>
                <p><strong>Year: </strong><?php echo $movie->year; ?></p>
                <p><strong>Original Language: </strong><?php echo $movie->original_language; ?></p>
                <p><strong>Running Time: </strong><?php echo $movie->running_time; ?> minutes
                <?php
                    $duration = $movie->isShort();
                    if ($duration) {
                ?>
                <span style="color: green;"><?php echo 'Short Film' ?></span></p>
                <?php } ?>
                <p><strong>Genre: </strong><?php echo $movie->genre; ?></p>
            </li>
            <hr>
        <?php } ?>
    </ul>
</body>
</html>