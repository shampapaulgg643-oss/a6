(function(){
  var b=document.querySelector('.burger'),n=document.getElementById('nav');
  if(b&&n)b.addEventListener('click',function(){var o=n.classList.toggle('open');b.setAttribute('aria-expanded',o?'true':'false');});
  // Sock size finder (US shoe sizes)
  var range=document.getElementById('shoe'),out=document.getElementById('sock-size'),val=document.getElementById('shoe-val'),note=document.getElementById('size-note'),gender='w';
  var CH={w:[[4,4.5,'XS'],[5,7,'S'],[7.5,9.5,'M'],[10,12,'L'],[12.5,14,'XL']],m:[[4,5.5,'S'],[6,8.5,'M'],[9,11.5,'L'],[12,14,'XL'],[14.5,16,'XXL']]};
  function calc(){if(!range)return;var s=parseFloat(range.value);val.textContent=s;var r='-';CH[gender].forEach(function(c){if(s>=c[0]&&s<=c[1])r=c[2];});out.textContent=r;
    note.textContent=(gender==='w'?'Women’s':'Men’s')+' US shoe size '+s+' usually fits a sock size '+r+'. Between sizes? Size up for thick hiking socks, down for thin liners.';}
  document.querySelectorAll('[data-g]').forEach(function(btn){btn.addEventListener('click',function(){document.querySelectorAll('[data-g]').forEach(function(x){x.setAttribute('aria-pressed','false');});btn.setAttribute('aria-pressed','true');gender=btn.dataset.g;calc();});});
  if(range){range.addEventListener('input',calc);calc();}
  // Cookie
  var c=document.getElementById('cookie'),v=null;try{v=localStorage.getItem('af_cookie');}catch(e){}
  if(c&&!v)c.classList.add('show');
  document.querySelectorAll('[data-cookie]').forEach(function(x){x.addEventListener('click',function(){try{localStorage.setItem('af_cookie',x.dataset.cookie);}catch(e){}c.classList.remove('show');});});
  var y=document.getElementById('year');if(y)y.textContent=new Date().getFullYear();
})();
