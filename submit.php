<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>submit</title>
</head>
<body>
    Submit
    <?php
        include "from.php";
        $zodiac = array(
            "Monkey",
            "Rooster",
            "Dog",
            "Pig",
            "Rat",
            "Ox",
            "Tiger",
            "Rabbit",
            "Dragon",
            "Snake",
            "Horse",
            "Goat"
        );
        echo "The submitted year is: " . $_POST["year"];

        $year = (int)$_POST["year"];

        if ($year >= 1900 && $year <= 2025) {
            $remainder = $year % 12;
            $imagePath = $zodiac[$remainder] . ".png";
            echo '<img src="' . $imagePath . '" alt="animal image">';
        } else {
            echo "year must be between 1900 and next year, please try again";
        }
        
        
    ?>
    
</body>
</html>