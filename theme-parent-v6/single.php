<?php defined('ABSPATH')||exit;get_header();sn_nav();while(have_posts()):the_post();?>
<article class="art" itemscope itemtype="https://schema.org/Article">
<div class="art__hd sr">
<span class="pill" style="margin-bottom:12px"><span class="pill__dot"></span> Guide pratique</span>
<h1 itemprop="headline"><?php the_title();?></h1>
</div>
<?php if(has_post_thumbnail()):?><div class="art__ft sr"><?php the_post_thumbnail('sn-card',['itemprop'=>'image']);?></div><?php endif;?>
<div class="art__bd sr" itemprop="articleBody"><?php the_content();?>
<div class="art__cta">
<h3>Besoin d'une shampouineuse à Nantes ?</h3>
<p>Kärcher Puzzi 8/1 pro, retrait Rezé, 25€/jour.</p>
<a href="<?php echo home_url('/location-shampouineuse-nantes/');?>" class="btn btn--y btn--lg">Réserver <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="arr"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
</div></div></article>
<?php endwhile;sn_ft();get_footer();?>
