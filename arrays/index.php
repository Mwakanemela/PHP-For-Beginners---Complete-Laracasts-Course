<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h1>Recommended Jamaica Dancehall Artists:</h1>

    <?php 
        $artists = [
            "Vybz Kartel",
            "Shawn Storm",
            "Tommy Lee Sparta"
        ]
    ?>

    <ul>
        <?php 
        foreach($artists as $artist) {
            // echo "<li>".$artist."</li>";
            echo "<li> $artist </li>";
        }
        
        ?>
    </ul>
</body>
</html>