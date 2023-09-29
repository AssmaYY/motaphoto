<!-- Bouton burger -->
<input id="toggle" type="checkbox"></input>

<label for="toggle" class="hamburger">
  <div class="top-bun"></div>
  <div class="meat"></div>
  <div class="bottom-bun"></div>
</label>

<!-- Div de mon menu burger -->
<div id="myMenuBurger" class="nav menuBurger">
  <div class="nav-wrapper">
    <nav class="lienBurger">
      <a href="<?php echo home_url( '/' ); ?>">Accueil</a><br>
      <a href="http://localhost:10028/a-propos/">A propos</a><br>
      <a id="contact-burger" href="">Contact</a><br>
    </nav>
  </div>
</div>