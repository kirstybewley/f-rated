// Responsive images
var detect_mq = {
  live: true, // Boolean: Trigger on window resize, true or false
  threshold: 200, // Integer: Threshold time after window resize, in milliseconds
  callback: function () {

    var element = document.body;

    //remove any of our previous classes
    element.classList.remove( "mobile", "tablet", "desktop", "wide" );
    //add class to element
    element.classList.add(dmq_size);

    var images = [].slice.call(document.getElementsByClassName("swap-image")),
        dsize = ["mobile", "tablet", "desktop", "wide"],
        bgimages = [].slice.call(document.getElementsByClassName("bg-swap-image"));

    dsize.forEach(function(size, index, array) {
      if (dmq_size === size) {
        images.forEach(function(image, id) {
          imageUrl = image.getAttribute("data-"+size);
          image.setAttribute("src", imageUrl);
        });

        bgimages.forEach(function(image, id) {
          bgimageUrl = image.getAttribute("data-"+size);
          image.style.background = 'url('+bgimageUrl+') no-repeat center center';
          image.style.backgroundSize = 'cover';
        });
      }
    });
  }
};
