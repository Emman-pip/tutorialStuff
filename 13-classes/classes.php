<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Movie {
        private $title;
        private $length;
        
        function __construct($title, $len){
            $this->title = $title;
            $this->length = $len;
        }

        function setLength($len){
           $this->length = $len;
        }

        function getTitleAndLength(){
            return $this->title . " " . $this->length;
        }
    }

    class ActionMovie extends Movie {
        function makeSound(){
            echo "BENG BENG BOOM!!";
        }
    }

    $lordOfTheRings = new Movie("Lord of the Rings", "3:00:00");
    $lordOfTheRings->setLength("10:00:00");
    echo $lordOfTheRings->getTitleAndLength();

    $doOrDie = new ActionMovie("Do or Die", "1:00:00");
    $doOrDie->makeSound();
    ?>
</body>
</html>