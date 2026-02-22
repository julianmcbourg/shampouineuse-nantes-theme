<?php defined('ABSPATH')||exit;get_header();sn_nav();?>
<section class='art' style='min-height:80vh;display:flex;align-items:center'><div class='c' style='text-align:center'>
<h1 style='font-size:clamp(4rem,12vw,8rem);margin-bottom:12px'>404</h1>
<p style='margin-bottom:24px'>Cette page n'existe pas.</p>
<a href='<?php echo home_url("/");?>' class='btn btn--y btn--lg'>Retour à l'accueil</a>
</div></section>
<?php sn_ft();get_footer();?>