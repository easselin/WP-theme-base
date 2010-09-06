
<?php get_header(); ?>

<div id="content">

	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">
  		<div id="date"><?php the_time('j F Y') ?></div>
  		<h2>
  			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
  			<div id="home-comments"><?php comments_popup_link(' (0)', ' (1)', ' (%)'); ?></div><?php edit_post_link('Editer', ' &#124; ', ''); ?></h2>
				
  		<div class="post_content">
  			<?php the_content(); ?>
  		</div>
  		<div class="tags"><?php the_tags(); ?></div>
  	</div>
		
<?php endwhile; ?>

    <div class="navigation">
    	<div class="alignleft"><?php next_posts_link('&laquo; Articles plus anciens') ?></div>
    	<div class="alignright"><?php previous_posts_link('Articles plus récents &raquo;') ?></div>
    </div>

<?php else : ?>
		<h2 class="center">Introuvable</h2>
		<p class="center">D&eacute;sol&eacute;, mais vous cherchez quelque chose qui ne se trouve pas ici .</p>
		<div id="searchno"><?php include (TEMPLATEPATH . "/searchform.php"); ?></div><?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>