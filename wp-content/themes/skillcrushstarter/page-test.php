<?php
/**
 * 
 * Template name: Test Page
 * 
 * The test template page.
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */
/*get_header();*/
 ?>

<div class="content-wrapper">
    <div id="list">
        <ul id="list-one">
            <li id="list-two">Home</li>
            <li id="list-two">Gallery</li>
            <li id="list-two"><a>Impacted</a></li>
        </ul>
    </div>


<section class="default-page">
	<div class="main-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<h2 id="entry-title"><?php the_title(); ?></h2>
			<article class="post-entry">
				<?php the_content(); ?>
			</article>
		<?php endwhile; ?>
	</div>

</section>

</div>

<?php get_footer(); ?>