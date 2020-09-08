








/* ===========================================================================
\\\\\\\\\\\\\\\\\\\\\\\\\Add-organization-and-close-wor-start////////////////////////////////////
=========================================================================== */

$("#add-organization").on('click', function (){
$('.step-form-overlay').css("opacity", "1")
$('.step-form-overlay').css("pointer-events", "all")
$('.main-step-form-container').css("right", "0")
});

$("#close-organization-form").on('click', function (){
  $('.step-form-overlay').css("opacity", "0")
  $('.step-form-overlay').css("pointer-events", "none")
  $('.main-step-form-container').css("right", "-100%")
  });


  /* ===========================================================================
\\\\\\\\\\\\\\\\\\\\\\\\\Add-organization-and-close-work-end////////////////////////////////////
=========================================================================== */




  /* ===========================================================================
\\\\\\\\\\\\\\\\\\\\\\\\\Page-tabs-start////////////////////////////////////
=========================================================================== */
function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}



  /* ===========================================================================
\\\\\\\\\\\\\\\\\\\\\\\\\Page-tabs-end////////////////////////////////////
=========================================================================== */







