/*========== SHOW MENU FUNC ==========*/
const showMenu = (toggleId, navId) => {
    const toggle = document.getElementById(toggleId),
        nav = document.getElementById(navId);


    toggle.addEventListener('click', () => {

        //Add show-menu class to nav menu
        nav.classList.toggle('show-menu')
        // Add show-icon class to show and hide menu icon
        toggle.classList.toggle('show-icon')

    });
};

showMenu('nav-toggle', 'nav-menu');

/*========== SWIPER JS ==========*/
var swiper = new Swiper(".home-slider", {
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    loop: true,
    grabCursor: true,
  });

/*========== Carousel ==========*/


