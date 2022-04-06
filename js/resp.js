burger = document.querySelector('.burger')
mid = document.querySelector('.mid')
navbar = document.querySelector('.navbar')
// rightNav = document.querySelector('.rightNav')


burger.addEventListener('click', () => {
    // rightNav.classList.toggle('v-class-resp');
    navbar.classList.toggle('v-class-resp');
    mid.classList.toggle('h-nav-resp');
})
