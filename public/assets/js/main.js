// STICKY MENU..........................................................................
// Get the header
var header = document.getElementById("menuHeader");

// Get the offset position of the navbar
var sticky = header.offsetTop;

window.onscroll = function () {
  checkScreenSize();
};

function checkScreenSize() {
  if ($(window).width() >= 1200) {
    desktopMenus();
  } else {
    mobileMenus();
  }
}

$(window).resize(function () {
  checkScreenSize();
});

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function desktopMenus() {
  if (window.pageYOffset > sticky) {
    $("#wazo30a").hide();
    $("#wazo30b").show();
    $("#mobimenu-wrap-1").hide();
    //header.classList.add("sticky");
    $("#menuHeader").addClass("sticky newFontClass");
  } else {
    $("#wazo30a").show();
    $("#wazo30b").hide();
    $("#mobimenu-wrap-1").hide();

    //header.classList.remove("sticky");
    $("#menuHeader").removeClass("sticky newFontClass");
  }
}

function mobileMenus() {
  if (window.pageYOffset > sticky) {
    $("#wazo30a").hide();
    $("#wazo30b").hide();
    $("#mobimenu-wrap-1").hide();
    //header.classList.add("sticky");
    $("#menuHeader").addClass("sticky newFontClass");
  } else {
    $("#wazo30a").hide();
    $("#wazo30b").hide();
    $("#mobimenu-wrap-1").hide();
    //header.classList.remove("sticky");
    $("#menuHeader").removeClass("sticky newFontClass");
  }
}
