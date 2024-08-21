// JavaScript Document: StatFormula System - PHP Project

$(document).ready(function () { /* Start coding my page */
  // Remove the JavaScript warning element if it exists
  $("#noScript").remove(); // Select and remove the element with id="noScript"

  /******** Dealing with image gallery div in home section **********************/
  // Function to create an automatic slideshow of images
  function slideShow() {
    var current = $('.photos .show');
    var next = current.next().length ? current.next() : current.siblings().first();

    // Hide the current image and update classes
    current.hide().removeClass('firstAppear show');

    // Show the next image and add the 'show' class
    next.fadeIn().addClass('show');

    // Call slideShow function again after 3500ms
    setTimeout(slideShow, 3500);
  }

  slideShow(); // Initialize the slideshow
  /******** End: Dealing with image gallery div in home section *****************/

  // Apply fitText plugin to headings for responsive text size
  $("h1, h2, h3, h4").fitText(1.1); // 1.1 is the scaling factor for font size adjustment

  /* Begin accordion functionality for Technical profile page */
  $('.accordion > li ul')
    .click(function (event) {
      event.stopPropagation(); // Prevents the click event from bubbling up
    })
    .filter(':not(:first)')
    .hide(); // Hide all accordion sub-lists except the first one

  $('.accordion > li, .accordion > li > ul > li').click(function () {
    var selfClick = $(this).find('ul:first').is(':visible');

    if (!selfClick) {
      // Close all other open sub-lists in the same accordion
      $(this)
        .parent()
        .find('> li ul:visible')
        .slideToggle();
    }

    // Toggle visibility of the clicked sub-list
    $(this)
      .find('ul:first')
      .stop(true, true) // Stop any ongoing animations on the target
      .slideToggle();
  }); /* End of accordion functionality */

}); /* End Of the Main Function (document.ready) for loading all JS functions */
