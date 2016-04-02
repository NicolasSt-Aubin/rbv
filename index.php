<?php include_once('header.php') ?>

<div id="about-page" class="pt-page">
  <div class="about-text text">
    <?php echo $lang["about-desc"];?>
    <br><br>
    <?php echo $lang["about-num"];?>
    <br>
    <?php echo $lang["about-email"];?>
    <br>
    <?php echo $lang["about-address-1"];?>
    <br>
    <?php echo $lang["about-address-2"];?>
  </div>
</div>

<div id="home-page" class="pt-page">
  <div class="hover-bg" id="frog-bg"></div>
  <div class="hover-bg" id="faces-bg" ></div>
  <img class="cover-img" src="img/cover_blanc.png" />
  <div id="about-button" class="menu-button">A propos</div>
  <div id="contact-button" class="menu-button">Contact</div>
  <div id="music-button" class="menu-button">Musique</div>
  <div id="galery-button" class="menu-button">Galerie</div>
</div>

<div id="contact-page" class="pt-page">
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
      <?php echo $lang["sincerely"];?>
      <input name="name" id="name-input" type="text" placeholder="<?php echo $lang["name"];?>"/>
      <?php echo $lang["at"];?>
      <input name="email" id="email-input" typse="text" placeholder="<?php echo $lang["address"];?>">
      <div class="send-button button">
        <?php echo $lang["send"];?>
        <img src="img/right_arrow.svg">
      </div>
    </div>
  </form>
</div>

<div class="pt-page pt-page-current" id="music-lightbox">
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
