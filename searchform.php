<form class="recherche" role="search" method="get"  action="<?php echo esc_url( home_url( '/' ) ); ?>">
<button class="recherche__bouton" type="submit" class="search-submit">
      <img class="recherche__icon" src="https://s2.svgbox.net/hero-outline.svg?ic=search&color=000" width="14" height="13">
    </button>
      <input class="recherche__input" type="search" class="search-field" placeholder="Recherche..." value="<?php echo get_search_query(); ?>" name="s" />
</form>