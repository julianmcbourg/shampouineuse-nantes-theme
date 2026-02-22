<?php defined('ABSPATH')||exit;$x=get_query_var('sn_ctx','hp');?>
<form class="bf sn-form" action="<?php echo esc_url(admin_url('admin-ajax.php'));?>" method="POST">
<input type="hidden" name="action" value="sn_submit_booking">
<input type="hidden" name="sn_nonce" value="<?php echo wp_create_nonce('sn_booking');?>">
<div class="hp-f"><input type="text" name="sn_website" autocomplete="off" tabindex="-1"></div>
<div class="bf__row">
<div class="fi"><label for="n<?php echo $x;?>">Prénom &amp; Nom</label><input type="text" name="sn_name" id="n<?php echo $x;?>" placeholder="Jean Dupont" required></div>
<div class="fi"><label for="e<?php echo $x;?>">Email</label><input type="email" name="sn_email" id="e<?php echo $x;?>" placeholder="jean@email.com" required></div>
</div>
<div class="bf__row">
<div class="fi"><label for="p<?php echo $x;?>">Téléphone</label><input type="tel" name="sn_phone" id="p<?php echo $x;?>" placeholder="06 12 34 56 78" required></div>
<div class="fi"><label for="d<?php echo $x;?>">Date souhaitée</label><input type="date" name="sn_date" id="d<?php echo $x;?>" required min="<?php echo date('Y-m-d');?>"></div>
</div>
<div class="fi"><label for="l<?php echo $x;?>">Lieu de retrait</label><input type="text" name="sn_lieu" id="l<?php echo $x;?>" value="Rezé" readonly><small>Retrait uniquement sur Rezé.</small></div>
<button type="submit" class="btn btn--y btn--lg btn--full">Confirmer ma réservation <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="arr"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></button>
<div class="bf__meta">
<span class="bf__mi"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> Réponse 24h</span>
<span class="bf__mi"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg> Retrait Rezé</span>
<span class="bf__mi"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="4" width="22" height="16" rx="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg> 25€/jour</span>
<span class="bf__mi"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> Caution 100€</span>
</div></form>
