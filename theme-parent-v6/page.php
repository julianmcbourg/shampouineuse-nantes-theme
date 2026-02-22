<?php defined('ABSPATH')||exit;get_header();sn_nav();?>
<section class='art'><div class='c' style='max-width:680px'>
<?php while(have_posts()):the_post();?>
<div class='art__hd sr'><h1><?php the_title();?></h1></div>
<div class='art__bd sr'><?php the_content();?></div>
<?php endwhile;?>
</div></section>
<?php sn_ft();get_footer();?>