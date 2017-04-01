<h2><?= $title ?></h2>
<?php foreach($post as $var ) : ?>
<h3><?php echo $var['title']; ?></h3>
<small class="post-date">Posted on: <?php echo $var['created_at']; ?></small><br>
<?php echo $var['body']; ?>
<p><a href="<?php echo site_url('/posts/'.$var['slug']); ?>">view more..</a></p>
<?php endforeach; ?>