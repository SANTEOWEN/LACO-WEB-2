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
var swiper = new Swiper("#swiper-1", {
    effect: "fade",
    loop: true,
    grabCursor: true,
    pagination: {
        el: "#swiper-1 .swiper-pagination",
        clickable: true,
    },
})
/*========== modal ==========*/


const modal = document.querySelector('#modal');
const openModal = document.querySelector('.open_button');
const closeModal = document.querySelector('.close_button');

openModal.addEventListener('click',() =>{
    modal.showModal();
});



