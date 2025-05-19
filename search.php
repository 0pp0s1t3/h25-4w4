<?php get_header() ?>
<h1 class="search__titre">Recherche actuelle: <?php echo get_search_query();?></h1>
<section class="populaire search__populaire">
    <div class="populaire__contenant search__contenant">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="populaire__article">

                    <div class="carte__contenu">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('thumbnail');
                        }
                        ?>
                        <div class="carte__contenu--texte">
                            <h2 class="carte__titre">
                                <?php the_title(); ?>
                            </h2>
                            <p class="carte__description">
                                <?php echo wp_trim_words(get_the_excerpt(), 50, "..."); ?>
                            </p>
                            <?php the_category(); ?>

                        </div>
                    </div>

                </article>
        <?php endwhile;
        endif; ?>
    </div>
</section>

<?php get_footer() ?>

</body>

</html>