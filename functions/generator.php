
<?php 
function categories_liste($parent_slug){
  $parent_category = get_category_by_slug($parent_slug);
  echo "<script>console.log('Parent category: " . $parent_category->name . "');</script>";
  


  if ($parent_category) {
    $parent_id = $parent_category->term_id;
  } else {
    echo "<script>console.log('La catégorie parente n\'existe pas.');</script>";
    return;
  }

  $sous_categories = get_categories(array(
    'parent' => $parent_id, 
    'hide_empty' => true, 
    ));


    echo '<div class="articles__boutons"></div>';

  if (!empty($sous_categories)) {
    echo "<script>console.log('Sous-catégories trouvées: " . json_encode($sous_categories) . "');</script>";

    foreach ($sous_categories as $sous_categorie) {


      echo "<script>console.log('Sous-catégorie: " . $sous_categorie->name .  "');</script>";
      
      
      echo '<button  data-category-id="' . esc_html($sous_categorie->term_id) . '" class="articles__bouton">' . esc_html($sous_categorie->name . "") . '</button>';

    }
  } else {
    echo "<script>console.log('Aucune sous-catégorie trouvée.');</script>";
  }







}
?>
