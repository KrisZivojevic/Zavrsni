<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Vivify Blog</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="styles/blog.css" rel="stylesheet">
    
</head>

<body>

<?php include_once('header.php'); ?>

<main role="main" class="container">

    <div class="row">
    <form class="col-sm-8">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" placeholder="blog title">
  </div>
  <div class="form-group">
    <label for="created">Created by</label>
    <input type="text" class="form-control" id="created" placeholder="Kristina">
  </div>
  <div class="form-group">
    <label for="blogcontent">Blog text</label>
    <textarea class="form-control" id="blogcontent" rows="3"></textarea>
  </div>
</form>

        <?php include('sidebar.php'); ?>
    </div><!-- /.row -->

</main><!-- /.container -->

<?php include_once('footer.php'); ?>

</body>
</html>
