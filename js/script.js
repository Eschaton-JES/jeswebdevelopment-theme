jQuery(document).ready(function() {

  var jump=function(e)
  {
   if (e){
       e.preventDefault();
       var target = jQuery(this).attr("href");
   }else{
       var target = location.hash;
   }

   jQuery('html,body').animate(
   {
       scrollTop: jQuery(target).offset().top
   },2000,function()
   {
       location.hash = target;
   });

  }

    /* Every time the window is scrolled ... */
    jQuery(window).scroll( function(){

        /* Check the location of each desired element */
        jQuery('.hideme').each( function(i){

            var bottom_of_object = jQuery(this).offset().top + jQuery(this).outerHeight();
            var bottom_of_window = jQuery(window).scrollTop() + jQuery(window).height();

            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){

                jQuery(this).animate({'opacity':'1'},600);

            }

        });

    });

});

const TypeWriter = function(txtElement, words, wait = 3000) {
  this.txtElement = txtElement;
  this.words = words;
  this.txt = '';
  this.wordIndex = 0;
  this.wait = parseInt(wait, 10);
  this.type();
  this.isDeleting = false;
}

// Type Method
TypeWriter.prototype.type = function() {
  // Current index of word
  const current = this.wordIndex % this.words.length;
  // Get full text of current words
  const fullTxt = this.words[current];

  // Check if deleting
  if(this.isDeleting) {
    //Remove char
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    // Add char
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  // Insert txt in to element
  this.txtElement.innerHTML = `<span class="txt">${this.txt}</span>`;

  // Type Speed
  let typeSpeed = 300;

  if(this.isDeleting) {
    typeSpeed /= 2;
  }

  // If word is complete
  if(!this.isDeleting && this.txt === fullTxt) {
    // Make pause at end
    typeSpeed = this.wait;
    // Set delete to true
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    // Move to next word
    this.wordIndex++;
    // Pause before start typing
    typeSpeed = 500;
  }

  setTimeout(() => this.type(), typeSpeed)
}

// Init On DOM Load
document.addEventListener('DOMContentLoaded', init);

// Init app

function init() {
  const txtElement = document.querySelector('.txt-type');
  const words = JSON.parse(txtElement.getAttribute('data-words'));
  const wait = txtElement.getAttribute('data-wait');
  // Init TypeWriter
  new TypeWriter(txtElement, words, wait);
}
