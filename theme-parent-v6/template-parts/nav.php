<?php defined('ABSPATH')||exit;$h=home_url('/');$r=home_url('/location-shampouineuse-nantes/');$b=home_url('/nos-conseils/');?>
<nav class="nav"><div class="nw c">
<a href="<?php echo esc_url($h);?>" class="nl">Shampouineuse <b>Nantes</b></a>
<ul class="nk">
<li><a href="<?php echo esc_url($h);?>">Accueil</a></li>
<li><a href="<?php echo esc_url($r);?>">Réservation</a></li>
<li><a href="<?php echo esc_url($b);?>">Nos conseils</a></li>
</ul>
<a href="<?php echo esc_url($r);?>" class="btn btn--y nc">Réserver <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="arr"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
<button class="nm" aria-label="Menu"><span></span><span></span><span></span></button>
</div></nav>
<div class="dr"><button class="dr__x">&times;</button>
<ul class="dr__l"><li><a href="<?php echo esc_url($h);?>">Accueil</a></li><li><a href="<?php echo esc_url($r);?>">Réservation</a></li><li><a href="<?php echo esc_url($b);?>">Nos conseils</a></li></ul>
<div class="dr__b"><a href="<?php echo esc_url($r);?>" class="btn btn--y btn--full btn--lg">Réserver maintenant</a></div></div>
