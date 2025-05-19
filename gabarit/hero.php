    <?php $hero_auteur = get_theme_mod('hero_auteur', ''); ?>
    <?php $hero_text_color = get_theme_mod('hero_couleur', ''); ?>
    <?php $hero_email = get_theme_mod('hero_mail', ''); ?>
    <?php $hero_lieu = get_theme_mod('hero_lieu', ''); ?>
    <?php $hero_telephone = get_theme_mod('hero_telephone', ''); ?>
    <?php $hero_tailleCarrousel = get_theme_mod('hero_tailleCarrousel', '1'); ?>
    <?php
        for($i=0;$i<$hero_tailleCarrousel;$i++){
          $hero_background[$i] = get_theme_mod('hero_background_'.$i, '');
        }
    ?>

    

    <style>
      .hero_couleur {
        color: <?php echo $hero_text_color ?>;
      }
    </style>

  <!-- Hero (Zone avec img de background) -->
    <section class="hero">

    <!-- Carrousel -->
     <div class="hero__carrousel-parent">
      <div class="hero__carrousel"
          style="background-image: url('<?php echo $hero_background[0]; ?>')">
        </div>

        <?php
          for ($j = 1; $j < $hero_tailleCarrousel; $j++) { 
        ?>
        <div class="hero__carrousel carrouselInvisible" style="background-image: url('<?php echo $hero_background[$j];?>')" >
        </div>
        <?php }  ?>

     </div>
    <!--  -->

    <!-- Contenu -->
      <div class="hero__contenu">
        <h1 class="hero__titre hero_couleur">
          <?php echo bloginfo("name"); ?>
          <!-- En haut va prendre la valeur de "Site Title" des settings -->
        </h1>
        <p class="hero__description hero_couleur"> <?php bloginfo("description") ?>

        </p>

        <?php  ?>

        <p class="hero__addresse-electronique hero_couleur"><?php echo $hero_email ?></p>
        <p class="hero__addresse-physique hero_couleur"><?php echo $hero_lieu ?></p>
        <p class="hero__telephone hero_couleur"><?php echo $hero_telephone ?></p>
        <a href="" class="hero__courriel"></a>
        <button class="hero__bouton">S'INSCRIRE</button>
        <div class="hero__icones-box">
          <img class="hero__icones" src="https://s2.svgbox.net/social.svg?ic=facebook&color=000" width="32" height="32">
          <img class="hero__icones" src="https://s2.svgbox.net/social.svg?ic=instagram&color=000" width="32" height="32">
        </div>
        <p class="hero_couleur">Auteur: <?php echo $hero_auteur; ?></p>

        <div class="hero__carrousel-boutonsRadio">
          <input type="radio" name="carrousel" data-id_carrousel="0" class="carrousel__radio" checked>
          <!-- <input type="radio" name="carrousel" data-id_carrousel="1" class="carrousel__radio">
          <input type="radio" name="carrousel" data-id_carrousel="2" class="carrousel__radio"> -->

            <?php
            for ($j = 1; $j < $hero_tailleCarrousel; $j++) { 
            ?>
                      <input type="radio" name="carrousel" data-id_carrousel="<?php echo $j ;?>" class="carrousel__radio">
            <?php }  ?>
        </div>

      </div>

    <!--  -->

    </section>
  <!--  -->

  <!-- Formulaire -->
    <section class="formulaire">
      <div class="formulaire__section">
        <p class="formulaire__section--titre hero_couleur">
          Nom
        </p>
        <form action="" class="formulaire__section--form">
          <input type="text" value="Écrivez votre nom" class="formulaire__section--input">
        </form>
      </div>
      <div class="formulaire__section">
        <p class="formulaire__section--titre hero_couleur">
          Prénom
        </p>
        <form action="" class="formulaire__section--form">
          <input type="text" value="Écrivez votre prénom" class="formulaire__section--input">
        </form>
      </div>
      <div class="formulaire__section">
        <p class="formulaire__section--titre hero_couleur">
          Courriel
        </p>
        <form action="" class="formulaire__section--form">
          <input type="text" value="Écrivez votre courriel" class="formulaire__section--input">
        </form>
      </div>
      <div class="formulaire__section">
        <p class="formulaire__section--titre hero_couleur">
          Téléphone
        </p>
        <form action="" class="formulaire__section--form">
          <input type="text" value="Écrivez votre téléphone" class="formulaire__section--input">
        </form>
      </div>

      <button class="formulaire__bouton hero_couleur">S'INSCRIRE</button>
    </section>
  <!--  -->