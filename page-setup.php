<?php
/*
 Template Name: Setup
*/
?>
<?php get_header(); ?>


  <main id="main" class="content" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
   

		
	<?php if( have_rows('home_carousel_image_boxes_wrap') ): ?>


	<?php while( have_rows('home_carousel_image_boxes_wrap') ): the_row(); ?>

			<?php if( get_row_layout() == 'home_inner' ): 

					$banner_image = get_sub_field('banner_background_image');
				  	$image_01 = get_sub_field('banner_box_one_image');
				  	$image_02 = get_sub_field('banner_box_two_image');
				  	$image_03 = get_sub_field('banner_box_three_image'); 

				?>
		   <section class="home-banner">		
				<h1><?php the_sub_field('banner_title'); ?></h1>
				<h2><?php the_sub_field('banner_sub_title'); ?></h2>
				
				<img class="background-image" src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt'] ?>" />
				<figure>
					<img src="<?php echo $image_01['url']; ?>" alt="<?php echo $image_01['alt'] ?>" />
					<figcaption>
						<?php the_sub_field('banner_title'); ?>
						<a href="<?php the_sub_field('banner_box_one_text'); ?>">Learn More</a>
					</figcaption>
				</figure>
				
				<figure>
					<img src="<?php echo $image_02['url']; ?>" alt="<?php echo $image_02['alt'] ?>" />
					<figcaption>
						<?php the_sub_field('banner_title'); ?>
						<a href="<?php the_sub_field('banner_box_two_text'); ?>">Learn More</a>
					</figcaption>
				</figure>
				
				<figure>
					<img src="<?php echo $image_03['url']; ?>" alt="<?php echo $image_03['alt'] ?>" />
					<figcaption>
						<?php the_sub_field('banner_title'); ?>
						<a href="<?php the_sub_field('bbanner_box_three_text'); ?>">Learn More</a>
					</figcaption>
				</figure>
			</section>				
			<?php elseif(get_row_layout() == 'product_block' ): 
				
				$product_image = get_sub_field('product_image');
				$product_bg = get_sub_field('product_background_image');
				
			?>
			<section class="home-product">
				<?php the_sub_field('product_title'); ?>
				<?php the_sub_field('product_sub_title'); ?>
				<img src="<?php echo $product_image['url']; ?>" alt="<?php echo $product_image['alt'] ?>" />
				<img src="<?php echo $product_bg['url']; ?>" alt="<?php echo $product_bg['alt'] ?>" />
			</section>

			<?php endif; ?>

	<?php endwhile; ?>


<?php endif; ?>	
	

	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

     
      
 
      
      <footer class="article-footer">
        <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
      </footer>
      <?php comments_template(); ?>
    </article>
    <?php endwhile; else : ?>
    <article id="post-not-found" class="hentry cf">
      <header class="article-header">
        <h1>
          <?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?>
        </h1>
      </header>
      <section class="entry-content">
        <p>
          <?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?>
        </p>
      </section>
      <footer class="article-footer">
        <p>
          <?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?>
        </p>
      </footer>
    </article>
    <?php endif; ?>
  </main>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
