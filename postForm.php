<?php
header('Location: index.php');
  require_once 'meekrodb.2.3.class.php';

  DB::debugMode(); // throw error messages

  $microBlog = $_POST['microBlog'];

  DB::insert('MicroBlog', array(
    'post'=>$microBlog)
  );
 ?>
