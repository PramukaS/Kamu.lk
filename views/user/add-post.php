<h1>Add Post</h1>
<ul>
  <?php foreach($posts as $post) { ?>
  <li><?php echo $post['post_name'] ?></li>
  <?php } ?>
</ul>