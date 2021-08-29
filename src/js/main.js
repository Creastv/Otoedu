AOS.init();

// Go to top arrow show/hide
jQuery(window).scroll(function () {
  if (jQuery(window).scrollTop() > 300) {
    jQuery("#go-to-top").addClass("show");
  } else {
    jQuery("#go-to-top").removeClass("show");
  }
});
// Go to top
jQuery("#go-to-top").on("click", function (e) {
  e.preventDefault();
  jQuery("html, body").animate({ scrollTop: 0 }, "300");
});

// Mobile navbar show/hide
jQuery(document).ready(function () {
  jQuery(".js-hamburger").click(function () {
    jQuery(".js-hamburger").toggleClass(" is-active");
    jQuery(".js-navbar").slideToggle("fast");
  });
});

window.onscroll = function () {
  stickyNavbar();
};

var navbar = document.getElementById("js-navigation");
var sticky = navbar.offsetTop;

function stickyNavbar() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky");
    jQuery("#specer").css("marginTop", "62px");
  } else {
    navbar.classList.remove("sticky");
    jQuery("#specer").css("marginTop", "0px");
  }
}
