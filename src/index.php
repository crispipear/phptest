<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>dynamic php</title>
    <link href="stylesheet/style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <?php
      error_reporting(0);
      include('header.php');
    ?>
    <div class="content">
      <?php
      if($_GET['page'])
      {
        $page=$_GET['page'].'.php';
        include($page);
      }else{
        echo 'this is the home page';
      }
      ?>
    </div>
  </body>
</html>
