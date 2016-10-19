<?php require('includes/config.php'); ?>
<!doctype html>
<html>
<body>
<br>

<form action="post.php" method="post">
       <p>Title: <input type="text" name="title" /></p>
        <p>Post: <textarea type="text" name="content"></textarea></p>
       <p>First name: <input type="text" name="fname" /></p>
       <input type="submit" name="submit" value="Submit" />
</form>

<?php


if(isset($_POST['submit'])){
    date_default_timezone_set("Europe/Stockholm");
    $title = $_POST['title'];
    $content = $_POST['content'];
    $fname = $_POST['fname'];
    $date = date("Y-m-d");


    $sql = "INSERT INTO dw_blog.blog_posts(Title, Content, Fname, Date)
VALUES( '$title', '$content', '$fname', '$date')";




}

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully! <br>";
    echo("Thank you " . $_POST['fname'] . " for your post.");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>



</body>
</html>