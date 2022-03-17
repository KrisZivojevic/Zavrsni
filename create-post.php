<?php include_once('config/db.php'); 
if(isset($_POST['submit'])) {
// $sql = "INSERT INTO posts"
    $body = $_POST['body'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $currentDate = date("Y-m-d h:i");
    $sql = "INSERT INTO posts (title, body, author, created_at) VALUES ('$title', '$body', '$author', '$currentDate')";
    
    
    $statement = $connection->prepare($sql);
    $statement->execute();
    header('Location: ./posts.php');
  } else {
  echo "Ne postoji";
}
?>
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
    <link href="styles/styles.css" rel="stylesheet">
</head>

<body>

<?php include_once('header.php'); ?>

<main role="main" class="container">

    <div class="row">
    <form action="create-post.php" method="POST" class="col-sm-8">
      <div class="form-group">
        <label for="title">Title</label>
        <input name="title" type="text" class="form-control" id="title" placeholder="blog title" required>
      </div>
      <div class="form-group">
        <label for="author">Author</label>
        <input name="author" type="text" class="form-control" id="author" placeholder="Kristina" required>
      </div>
      <div class="form-group">
        <label for="body">Blog text</label>
        <textarea name="body" class="form-control" id="body" rows="3" required></textarea>
      </div>
      <button name="submit" id="submit" type="submit">Create post</button>
    </form>

        <?php include('sidebar.php'); ?>
    </div><!-- /.row -->

</main><!-- /.container -->

<?php include_once('footer.php'); ?>

</body>
</html>
