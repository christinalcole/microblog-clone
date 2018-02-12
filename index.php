<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset="UTF-8">
  <title>Microblogging Clone</title>
</head>

<body>
  <form action="postForm.php" method="POST">
    <textarea name="microBlog" id="microBlog" rows="10" cols="30">
    </textarea>
    <input type="submit">
    <?php
    if(isset($_POST['submit'])){
 if (!empty($_POST['value'])){
 header("Location:index.php");
 }
}
?>
  </form>

  <h2>Microblogs so far submitted:<h2>
    <?php
    require_once 'meekrodb.2.3.class.php';

    $posts = DB::query("SELECT post FROM MicroBlog");
    foreach ($posts as $p) {
      echo "<div class='microblog'>" . $p['post'] . "</div>";
    }
     ?>

</body>
</html>
