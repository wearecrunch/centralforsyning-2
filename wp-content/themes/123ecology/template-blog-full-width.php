<?php
/*
Template Name: Blog Template (full width)
*/
?>
<?php get_header(); ?>

<?php 
//OptionTree Stuff
if ( function_exists( 'get_option_tree') ) {
	$theme_options = get_option('option_tree');
   
    /* Blog Options
    ================================================== */
    $blog_number_of_post = get_option_tree('blog_number_of_post',$theme_options);
    
    /* Theme Options
    ================================================== */
    $theme_style = get_option_tree('theme_style',$theme_options);
}
?>

		<?php $post_style = get_post_meta($post->ID, 'post_style_value', true);?>
		<?php $videoURL = theme_parse_video(get_post_meta($post->ID, 'video-url_value', true));?>
		<?php $linkURL = get_post_meta($post->ID, 'link-url_value', true);?>
		<?php $share = get_post_meta($post->ID, 'share_value', true);?>
		<?php if ($blog_number_of_post){ 
			$posts = $blog_number_of_post;
		}else{
			$posts = 10;
		}?>
		
		<div id="breadcrumb" class="<?php if($theme_style=="boxed"){?>wrap<?php }?> gradient">
			<div class="container">
				<?php get_template_part('includes/heading' ) ?>
			</div>
		</div>
		<div id="main" class="<?php if($theme_style=="boxed"){?>wrap<?php }?> post-template front-template">
			<div class="container">
				<div class="row-fluid">	
					<div class="span12">		

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php the_content();?>
                    <?php endwhile; else: ?>
                        <p><?php _e('Sorry, no posts matched your criteria.', GETTEXT_DOMAIN) ?></p>
                    <?php endif; ?>
                    </div>
                    
					<?php 
					//OptionTree Stuff
					if ( function_exists( 'get_option_tree') ) {
					$theme_options = get_option('option_tree');
					
					/* Blog Options
					================================================== */
					$blog_number_of_post = get_option_tree('blog_number_of_post',$theme_options);
					}
					?>
					
					<?php $post_style = get_post_meta($post->ID, 'post_style_value', true);?>
					<?php $videoURL = theme_parse_video(get_post_meta($post->ID, 'video-url_value', true));?>
					<?php $linkURL = get_post_meta($post->ID, 'link-url_value', true);?>
					<?php $share = get_post_meta($post->ID, 'share_value', true);?>
					<?php if ($blog_number_of_post){ 
						$posts = $blog_number_of_post;
					}else{
						$posts = 10;
					}?>
                    
					<div class="row-fluid">
						<div class="span12 post-page">
	                    <?php if ( get_query_var('paged') ) {
	                        $paged = get_query_var('paged');
	                    } elseif ( get_query_var('page') ) {
	                        $paged = get_query_var('page');
	                    } else {
	                        $paged = 1;
	                    }
	                    query_posts( array( 'post_type' => 'post', 'paged' => $paged, 'posts_per_page' => $posts ) );
	                    if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php get_template_part('includes/blog-post-fullwidth' ) ?>
	                    <?php endwhile; else: ?>
	                    <p><?php _e('Sorry, no posts matched your criteria.', GETTEXT_DOMAIN); ?></p>
	                    <?php endif; ?>
	                    <div class="pagination">
		                    <?php next_posts_link(__('Older Entries &rarr;', GETTEXT_DOMAIN), 0); ?>
		                    <?php previous_posts_link(__('&larr; Newer Entries', GETTEXT_DOMAIN), 0) ?>
	                    </div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php get_footer(); ?>