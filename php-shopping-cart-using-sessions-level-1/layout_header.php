<?php
$_SESSION['cart']=isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title><?php echo isset($page_title) ? $page_title : "The Code of a Ninja"; ?></title>
 <!-- Latest compiled and minified Bootstrap CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.cs

 <!-- our custom CSS -->
5.2 Create footer layout le
This "layout_footer.php" will be included at the end of the PHP les that will needs it. This way, we won’t have to write
the same footer codes every time.
The assets used in this le are:
jQuery [https://jquery.com/] – needed by Bootstrap JavaScript.
Bootstrap JavaScript [https://getbootstrap.com/docs/3.3/javascript/] – to make cool UI components work.
Let’s go on and create the footer layout le.
Open "php-shopping-cart-using-sessions-level-1" folder.
Create "layout_footer.php" le.
Place the following code.
 <link rel="stylesheet" href="libs/css/custom.css" />
</head>
<body>
 <?php include 'navigation.php'; ?>
 <!-- container -->
 <div class="container">
 <div class="row">
 <div class="col-md-12">
 <div class="page-header">
 <h1><?php echo isset($page_title) ? $page_title : "The Code of a Ninja"; ?></h1>
 </div>
 </div>