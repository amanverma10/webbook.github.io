<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo $title; ?></title>

  <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
  <link href="./bootstrap/css/jumbotron.css" rel="stylesheet">
</head>

<body>

  <nav class="navbar  navbar-fixed-top  navbar-light" style="background-color: #e3f2fd; ">
    <div class=" container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">
          <img src="bootstrap\img\dark_logo_transparent.png" style="width:180px;height:40px;">
        </a>
      </div>

      <!--/.navbar-collapse -->
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <!-- link to publiser_list.php -->
          <li><a href="publisher_list.php"><span class="glyphicon glyphicon-paperclip"></span>&nbsp; Publisher</a></li>
          <!-- link to books.php -->
          <li><a href="books.php"><span class="glyphicon glyphicon-book"></span>&nbsp; Books</a></li>
          <!-- link to contacts.php -->
          <li><a href="contact.php"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp; Contact</a></li>
          <!-- link to shopping cart -->
          <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp; My Cart</a></li>
          <!-- link to login/signin cart -->
          <li><a href="loogin.php"><span class="glyphicon glyphicon-user"></span>&nbsp; Login</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <?php
  if (isset($title) && $title == "Index") {
  ?>
    <div class="jumbotron">
      <div class="container">
        <h1>Welcome to online RJ bookstore</h1>
        <p class="lead">This is an Online BookStore </p>
        <p>....</p>
      </div>
    </div>
  <?php } ?>

  <div class="container" id="main">