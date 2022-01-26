<?php
    // connect to database
    include 'db.php';

    // insert into movies (...) values (name, year, rating, (gID where gGenre=input))
    $sql_insert = "INSERT INTO movies(mName, mYear, mRating, mGenreID) 
    VALUES ('" . $_POST['movie_name'] . "', '" . $_POST['movie_year'] . "', 
    '" . $_POST['movie_rating'] . "', (SELECT gID FROM genres WHERE gGenre='" 
    . $_POST['movie_genre'] . "'))";
    
    if (mysqli_query($link, $sql_insert)) {
        echo "New record created successfully.";
    } else {
        echo 'Error: ' . $sql_insert . '<br>' . mysqli_error($link);
    }
?>
<form action="index.php" method="POST">
    <input type="submit" value="Add another movie">
</form>