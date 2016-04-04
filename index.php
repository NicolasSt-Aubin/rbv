<?php include_once('header.php') ?>

<div id="home-page" class="pt-page pt-page-current">
  <div class="hover-bg" id="frog-bg"></div>
  <div class="hover-bg" id="faces-bg" ></div>
  <div class="hover-bg" id="chars-bg" ></div>
  <img class="cover-img" src="img/cover_blanc.png" />
  <div id="about-button" class="menu-button">A propos</div>
  <div id="contact-button" class="menu-button">Contact</div>
  <div id="music-button" class="menu-button">Musique</div>
  <div id="galery-button" class="menu-button">Galerie</div>
</div>

<div id="about-page" class="pt-page">
  <div class="close-box button" >X</div>
  <div class="about-text text">
    Cette babouinerie festive et rassembleuse qu’est RBV, groupe hiphop francofunk quebecois, plonge les racines de son arbre en constante croissance dans la musique du monde d’hier, deploie sa poesie de singe dans les moeurs d’aujourd’hui et agite sa culture sur les branches et les fleurs des rythmes de demain.
    <hr>
    «Un esprit sain dans un corps singe»
  </div>
</div>

<div id="contact-page" class="pt-page">
  <div class="close-box button" >X</div>
  <form>
    <div class="contact-text text">
      <div class="sk-folding-cube">
        <div class="sk-cube1 sk-cube"></div>
        <div class="sk-cube2 sk-cube"></div>
        <div class="sk-cube4 sk-cube"></div>
        <div class="sk-cube3 sk-cube"></div>
      </div>
      <div class="contact-error-msg"><?php echo $lang["error"];?></div>
      <div class="contact-success-msg"><?php echo $lang["success"];?></div>
      <textarea name="message" id="contact-textarea"></textarea>
    </div>
    <div class="contact-details">
      Sincèrement,
      <input name="name" id="name-input" type="text" placeholder="votre nom"/>
      ,
      <input name="email" id="email-input" typse="text" placeholder="votre e-mail">
      <div class="send-button button">
        <?php echo $lang["send"];?>
        <img src="img/right_arrow.png">
      </div>
    </div>
  </form>
</div>

<div class="pt-page" id="galery-lightbox">
  <div class="lightbox" >
    <div class="top-nav">
      <div class="close-box button" >X</div>
    </div>

    <div class="left-click" ></div>

    <div class="lb-page lb-page-current">
      <img src="img/cover.jpg"/>
    </div>
    <div class="lb-page">
      <img src="img/IMG_5896.JPG"/>
    </div>

    <div class="right-click" ></div>
  </div>
</div>

<?php include_once('footer.php') ?>
