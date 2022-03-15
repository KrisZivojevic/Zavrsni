<?php include_once('config/db.php');

if (isset($_GET['post_id'])) {
      
  $sql = "SELECT * FROM comments WHERE comments.post_id = {$_GET['post_id']}";
  $comments = getDataFromServer($sql, $connection, true);
  // echo '<pre>';
  // var_dump($comments);
  // echo '</pre>';
} else {
  echo ("Post_id nije prosledjen kroz $_GET");
}

?>

<ul>
  <?php 
  
  foreach ($comments as $comment) {
  
  ?>

<li>
  <h4><?php echo ($comment['author'])?></h4>
  <p><?php echo ($comment['text'])?></p>
  <hr />
</li>

<?php
  }
?>

</ul>