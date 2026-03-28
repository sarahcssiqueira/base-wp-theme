
document.addEventListener('DOMContentLoaded', function(){
  var btn = document.getElementById('menu-toggle') || document.querySelector('[aria-controls][aria-expanded]');
  if(!btn) return;
  var targetId = btn.getAttribute('aria-controls');
  var target = targetId ? document.getElementById(targetId) : null;
  btn.addEventListener('click', function(){
    var expanded = btn.getAttribute('aria-expanded') === 'true';
    btn.setAttribute('aria-expanded', String(!expanded));
    if(target){
      if(expanded){
        target.setAttribute('hidden','');
      }else{
        target.removeAttribute('hidden');
      }
    }
  });
});
