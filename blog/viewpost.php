<?php require('includes/config.php'); ?>


<div id="wrapper">

    <h1>Blog</h1>


    <?php
    $sql = "SELECT Title, Content, Fname, Date Date FROM blog_posts";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
         // output data of each row
 while($row = $result->fetch_assoc()) {
             echo $row["Title"]. "<br>" . $row["Content"]. "<br>" . $row["Fname"] . " " . $row["Date"]. "<br><br>";
 }
} else {
         echo "0 results";
}
    $conn->close();
    ?>


</div>