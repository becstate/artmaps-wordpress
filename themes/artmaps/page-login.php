<div class="about-page">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h2><?php the_title(); ?></h2>
<?php wp_login_form(); ?>
<?php endwhile; endif; ?>
</div>