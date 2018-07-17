<?php
	include_once 'includes/dbh.inc.php';
$name = $_REQUEST['c_name'];
$comments = $_REQUEST['comments'];





mysqli_query($conn, "INSERT INTO comment(c_name, comments) VALUES('$name','$comments')");

$result = mysqli_query($conn, "SELECT * FROM comment ORDER BY comment_id ASC");
while($row=mysqli_fetch_array($result)){
echo "<div class='comments_content'>";
echo "<h4><a href='comment_box/comment_box/delete.php?id=" . $row['comment_id'] . "'> X</a></h4>";
echo "<h1>" . $row['c_name'] . "</h1>";
echo "<h2>" . $row['date_publish'] . "</h2></br></br>";
echo "<h3>" . $row['comments'] . "</h3>";
echo "</div>";
}
mysqli_close($conn);
?>