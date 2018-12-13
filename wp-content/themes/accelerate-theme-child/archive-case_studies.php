<?php
/**
 * The template for displaying case study archives
 *
 * This is the template that displays case study archives by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<?php query_posts('posts_per_page=3&post_type=case_studies&order=ASC'); ?>
			<?php while ( have_posts() ) : the_post();
                $image1 = get_field('image_1');
                $size = "full";
                $services = get_field('services');
                ?>
                <article class="case-study">
                    <aside class="case-study-sidebar">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <h4><?php echo $services; ?></h4>
                        <?php the_excerpt(); ?>
                        <p class="read-more-link"><a href="<?php the_permalink(); ?>">View Project &rsaquo;</a></p>
                    </aside>

                    <div class="case-study-images">
                        <a href="<?php the_permalink(); ?>">
                            <?php if($image1){
	                            echo wp_get_attachment_image( $image1, $size );
                            }?>
                        </a>
                    </div>
                </article>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->
<?php get_footer(); ?>