<style>
  html{ height:100%; }
body{ min-height:100%; padding:0; margin:0; position:relative; }

body::after{ content:''; display:block; height:100px; }

footer{ 
  position:absolute; 
  bottom:0; 
  width:100%; 
  height:100px; 
}


/* FOR DEMO ONLY */
body{ font:bold 1.2em/2.5 arial; text-align:center; }
label{ cursor:pointer; display:inline-block; transition:1s ease; }
:checked ~ label{ margin-bottom:1400px; }

footer{ background:#DB8A8A; }
</style>
<header>HEADER</header>
<article>
  <input type='checkbox' id='c' />
  <label for='c'>Toggle Content Height</label>
</article>
<footer>FOOTER</footer>