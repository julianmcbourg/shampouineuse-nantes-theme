<?php
/**
 * Template Name: Blog Nos Conseils
 */
defined('ABSPATH')||exit;get_header();sn_nav();?>
<section class="blg"><div class="c">
<div class="blg__top sr">
<span class="pill" style="margin-bottom:12px"><span class="pill__dot"></span> Conseils</span>
<h1>Nos guides pratiques</h1>
<p>Tout savoir pour nettoyer vos textiles comme un pro à Nantes.</p>
</div>
<div class="bg_">
<?php $q=new WP_Query(['post_type'=>'post','posts_per_page'=>12]);
$d=1;if($q->have_posts()):while($q->have_posts()):$q->the_post();?>
<article class="ac sr d<?php echo $d;?>">
<?php if(has_post_thumbnail()):?><div class="ac__img"><a href="<?php the_permalink();?>"><?php the_post_thumbnail('sn-card');?></a></div><?php endif;?>
<div class="ac__b">
<span class="ac__tag">Guide</span>
<h2 class="ac__title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
<p class="ac__exc"><?php echo wp_trim_words(get_the_excerpt(),25);?></p>
<a href="<?php the_permalink();?>" class="ac__lk">Lire l'article <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
</div></article>
<?php $d=($d%3)+1;endwhile;wp_reset_postdata();else:?>
<p style="text-align:center;grid-column:1/-1;color:var(--tx3)">Aucun article pour le moment.</p>
<?php endif;?>
</div></div></section>
<section class="cta"><div class="cta__in c sr">
<h2>Besoin d'une shampouineuse ?</h2>
<p>Machine pro Kärcher, 25€/jour, retrait Rezé.</p>
<a href="<?php echo home_url('/location-shampouineuse-nantes/');?>" class="btn btn--y btn--lg">Réserver maintenant</a>
</div></section>
<?php sn_ft();get_footer();?>
