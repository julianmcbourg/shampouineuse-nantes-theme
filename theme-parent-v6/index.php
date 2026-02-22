<?php defined('ABSPATH')||exit;get_header();sn_nav();?>
<section class='blg'><div class='c'>
<div class='blg__top'><h1>Articles</h1></div>
<div class='bg_'>
<?php if(have_posts()):while(have_posts()):the_post();?>
<article class='ac'>
<?php if(has_post_thumbnail()):?><div class='ac__img'><a href='<?php the_permalink();?>'><?php the_post_thumbnail('sn-card');?></a></div><?php endif;?>
<div class='ac__b'><span class='ac__tag'>Guide</span>
<h2 class='ac__title'><a href='<?php the_permalink();?>'><?php the_title();?></a></h2>
<p class='ac__exc'><?php echo wp_trim_words(get_the_excerpt(),25);?></p>
<a href='<?php the_permalink();?>' class='ac__lk'>Lire <svg width='14' height='14' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2.5'><line x1='5' y1='12' x2='19' y2='12'/><polyline points='12 5 19 12 12 19'/></svg></a>
</div></article>
<?php endwhile;else:?><p style='text-align:center;grid-column:1/-1;color:var(--tx3)'>Aucun article.</p><?php endif;?>
</div></div></section>
<?php sn_ft();get_footer();?>