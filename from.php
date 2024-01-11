<form action="submit.php" method="POST">
        <h5>Year: </h5> 
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $year = $_POST["year"];
            } else {
                $year = "0";
            }
                echo '<input type="text" name="year" autofocus="autofocus" value="' . $year . '"/>';
        ?>
        
        <input type="submit" value="submit"/>
        <input type="button" value="clear" onclick="window.location.href = 'index.php'">
</form>
