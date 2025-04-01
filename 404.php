<?php
/**
 *  index.php est le modèle par défaut
 *  si aucun modèle peut satisfaire la requête http dans ce cas c'est index.php qui affichera le contenu de la page
 */
?>
<?php get_header() ?>

    <section class="erreur">
        <div class="boiteflex erreur"> 
        <h1>Oops, you've landed on Island 404!</h1>
        <p>Don't worry, explorer! You seem to have drifted away from your dream destinations. Navigate back to find your perfect adventure.</p>
        <a href="index.php" class="btn">Return to Home</a>
        <div class="suggestions">
            <a href="#">Costa Rica</a>
            <a href="#">Alaska</a>
            <a href="#">Faroe Islands</a>
            <a href="#">Paris, France</a>     
        </div>
    </section>
    <?php get_footer(); ?>
</body>
</html>