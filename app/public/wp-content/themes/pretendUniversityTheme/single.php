<h2>This is a single blog post!</h2>

<?php

while(have_posts()){
the_post(); ?>
<h2><?php the_title(); ?></h2>
<?php the_content();?>
<?php }
?>