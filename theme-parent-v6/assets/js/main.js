document.addEventListener('DOMContentLoaded',()=>{
const N=document.querySelector('.nav');if(N)addEventListener('scroll',()=>N.classList.toggle('s',scrollY>50),{passive:true});
const bu=document.querySelector('.nm'),dr=document.querySelector('.dr'),dx=document.querySelector('.dr__x');
if(bu&&dr){bu.onclick=()=>{dr.classList.add('on');document.body.style.overflow='hidden'};
dx&&(dx.onclick=()=>{dr.classList.remove('on');document.body.style.overflow=''});
dr.querySelectorAll('a').forEach(a=>a.onclick=()=>{dr.classList.remove('on');document.body.style.overflow=''})}
const io=new IntersectionObserver(es=>es.forEach(e=>{if(e.isIntersecting){e.target.classList.add('v');io.unobserve(e.target)}}),{threshold:.06,rootMargin:'0px 0px -30px 0px'});
document.querySelectorAll('.sr').forEach(el=>io.observe(el));
document.querySelectorAll('.faq__q').forEach(b=>b.onclick=()=>{const i=b.closest('.faq__item'),o=i.classList.contains('on');document.querySelectorAll('.faq__item.on').forEach(x=>x.classList.remove('on'));if(!o)i.classList.add('on')});
const sl=document.querySelector('.cmp__box');
if(sl){const bar=sl.querySelector('.cmp__bar'),af=sl.querySelector('.cmp__img--af');let d=false;
const u=x=>{const r=sl.getBoundingClientRect();let p=((x-r.left)/r.width)*100;p=Math.max(3,Math.min(97,p));bar.style.left=p+'%';af.style.clipPath='inset(0 0 0 '+p+'%)'};
bar.onmousedown=e=>{d=true;e.preventDefault()};bar.ontouchstart=()=>{d=true};
onmousemove=e=>{if(d)u(e.clientX)};ontouchmove=e=>{if(d)u(e.touches[0].clientX)};
onmouseup=ontouchend=()=>d=false;sl.onclick=e=>u(e.clientX)}
document.querySelectorAll('.sn-form').forEach(f=>f.onsubmit=async e=>{e.preventDefault();
const hp=f.querySelector('[name="sn_website"]');if(hp&&hp.value)return;
const b=f.querySelector('[type="submit"]'),o=b.innerHTML;b.innerHTML='Envoi\u2026';b.disabled=true;
try{const r=await fetch(f.action,{method:'POST',body:new FormData(f)});const d=await r.json();
if(d.success){(f.closest('.hcard')||f.closest('.lf')||f.parentElement).innerHTML='<div class="ok"><div class="ok__i"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div><h3>Demande envoy\u00e9e !</h3><p style="color:var(--tx2)">R\u00e9ponse sous 24h.</p></div>'}
else{alert(d.data?.message||'Erreur');b.innerHTML=o;b.disabled=false}}
catch(_){alert('Erreur connexion');b.innerHTML=o;b.disabled=false}});
document.querySelectorAll('a[href^="#"]').forEach(a=>a.onclick=e=>{const t=document.querySelector(a.getAttribute('href'));if(t){e.preventDefault();scrollTo({top:t.offsetTop-70,behavior:'smooth'})}});
});
