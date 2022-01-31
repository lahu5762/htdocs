<body>
    <h3>Add a movie to the database</h3>
    <!-- Start of input methods -->
    <form action="add_movie.php" method="POST">
        <!-- Textbox input for name and year -->
        <label for='movie_name'>Name:</label>
        <input type="text" name="movie_name"><br>
        <label for='movie_year'>Year of release:</label>
        <input type="text" name="movie_year"><br>
        <!-- Number input for rating -->
        <label for='movie_rating'>Rating:</label>
        <input type="number" name="movie_rating" min='1' max='5' step='0.5'><br>
        <!-- Dropdown menu for genres -->
        <label for='genres'>Genre:</label>
        <select name=“genre"> 
            <?php 
            include 'db.php'; //establish database connection script
            $result = mysqli_query($link,"select gID, gGenre from genres"); 
            while($row = mysqli_fetch_assoc($result)) { 
            $genreid = $row["gID"];
            $genrename = $row["gGenre"]; 
            print "<option value='$genreid'>$genrename</option>"; 
            }
            ?> </select><br>
        <!-- Submit button -->
        <input type="submit" value="Submit">
    </form>
    <form action="showmovies.php" method="POST">
        <input type="submit" value="View database">
    </form>

</body>