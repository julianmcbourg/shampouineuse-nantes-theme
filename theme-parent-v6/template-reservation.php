<?php
/**
 * Template Name: Réservation Shampouineuse
 */
defined('ABSPATH')||exit;get_header();sn_nav();?>
<section class="resa"><div class="c">
<div class="resa__top sr">
<span class="pill" style="margin-bottom:12px"><img src="<?php echo esc_url(sn_img('logo'));?>" alt="Kärcher" style="height:13px" loading="lazy"> Puzzi 8/1 · Retrait Rezé</span>
<h1>Réservez votre shampouineuse à Nantes</h1>
<p style="max-width:520px;margin:8px auto 0">Nettoyage canapé, matelas, tapis, sièges auto. Retrait sur Rezé. Réponse sous 24h.</p>
</div>
<div class="resa__g">
<div class="sr">
<div class="pr"><div class="pr__n">25€ <span class="pr__u">/ jour</span></div><span class="pr__pill">Plusieurs jours possibles</span></div>
<div class="co">
<div class="co__i"><div class="co__l">Retrait</div><div class="co__v">Rezé uniquement</div></div>
<div class="co__i"><div class="co__l">Caution</div><div class="co__v">100€ + carte d'identité</div></div>
<div class="co__i"><div class="co__l">Horaires</div><div class="co__v">Retour avant 20h</div></div>
<div class="co__i"><div class="co__l">Service</div><div class="co__v">Entre particuliers · +300 clients</div></div>
</div>
<div style="margin-top:16px"><img src="<?php echo esc_url(sn_img('close'));?>" alt="Shampouineuse location Nantes" style="border-radius:var(--r2);width:100%" loading="lazy"></div>
<div class="zo"><h3>Zones desservies</h3><p>Nantes, Rezé, Saint-Sébastien-sur-Loire, Vertou, Saint-Herblain, Orvault, Bouguenais. Retrait uniquement sur Rezé.</p></div>
</div>
<div class="sr d1">
<div class="hcard">
<div class="hcard__top"><h2>Demande de réservation</h2><p>Réponse sous 24h · Aucun engagement</p></div>
<?php sn_form('re');?>
</div></div>
</div></div></section>
<?php sn_ft();get_footer();?>
