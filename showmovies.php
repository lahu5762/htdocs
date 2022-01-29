<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
    <label for='movie_name'>Name:</label>
    <input type="text" name="search_name">
    <input type="submit" value="Search">
</form>
<?php
include 'db.php'; //database connection php script

$result = mysqli_query($link,"SELECT m.mName, m.mYear, g.gGenre, m.mRating
                            FROM movies as m LEFT JOIN genres as g ON m.mGenreID = g.gID
                            WHERE m.mName LIKE '%" . $_POST['search_name'] . "%'");

if (mysqli_num_rows($result) == 0) {
print("No results matching your query<br>\n");
} else {
echo "<table border='1'>"; //define an html table
//<th> Defines a header cell in a table
//<tr> Defines a row in a table
//<td> Defines a cell in a table
echo "<tr><th>name</th><th>year</th><th>genre</th><th>rating</th></tr>";
while($row = mysqli_fetch_row($result)){
echo "<tr><td>";
echo $row[0];
echo "</td><td>";  // when I echo a text, it means I am sending it to the browser
echo $row[1];
echo "</td><td>";
echo $row[2];
echo "</td><td>";
echo $row[3];
echo "</td></tr>";
}
echo "</table>"; 
include 'closeDB.php'; }
?>
<br>
<form action="index.php" method="POST">
    <input type="submit" value="Add movie">
</form>