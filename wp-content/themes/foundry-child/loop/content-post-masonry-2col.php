<?php $format = get_post_format(); ?>

<!-- <div class="col-sm-6 post-snippet masonry-item"> -->
<div class="col-sm-6 post-snippet">

    <?php get_template_part('inc/content-format', $format); ?>
    
    <?php if(!( 'quote' == $format )) : ?>
	    <div class="inner">
	    
	        <a href="<?php the_permalink(); ?>">
	            <?php the_title('<h6 class="mb0 uppercase">', '</h6><span class="inline-block mb16">'. get_the_time(get_option('date_format')) .'</span>'); ?>
	        </a>

	    </div>
	<?php endif; ?>
    
</div>
