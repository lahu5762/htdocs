<form action="add_movie.php" method="POST">
    <input type="text" name="movie_name"><br>
    <input type="text" name="movie_year"><br>
    <input type="text" name="movie_rating"><br>
    <select name='movie_genre' id='genres'>
        <option value='Action'>Action/Adventure</option>
        <option value='Comedy'>Comedy</option>
    </select>
    <input type="submit" value="Add Book">
</form>