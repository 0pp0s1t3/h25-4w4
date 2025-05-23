(function(){

  // Variables
    const imagesCarrousel = document.querySelectorAll('.hero__carrousel');
    const boutonsCarrousel = document.querySelectorAll('.carrousel__radio');
    let i = 0;
  //


    boutonsCarrousel.forEach((bouton)=>{
      bouton.addEventListener("click", ()=>{

    
        imagesCarrousel[i].classList.add('carrouselInvisible'); 
        i = bouton.getAttribute('data-id_carrousel');
        imagesCarrousel[i].classList.remove('carrouselInvisible'); 
      })
    })
 

  // // // Automatique sur une boucle (avec intervalle de 5000ms)
    setInterval(()=>{
   
      imagesCarrousel[i].classList.add('carrouselInvisible'); 

      
      i++;
      if (i >= imagesCarrousel.length) {
        i = 0; 
      }

    
      boutonsCarrousel.forEach((bouton)=>{
        if (bouton.getAttribute('data-id_carrousel') == i) {
          bouton.checked = true;
        } else { 
          bouton.checked = false; 
        }
      })

      imagesCarrousel[i].classList.remove('carrouselInvisible'); // On affiche la nouvelle image (utilisation de "transition" dans la classe CSS pour avoir une sorte d'animation)
    }, 5000);
  // // //
})()