const burger = document.getElementById('burger');
const nav = document.getElementById('nav');
const close = document.getElementById('closeNav');

burger.addEventListener('click', () => {
    nav.classList = 'open';
});

close.addEventListener('click', () => {
    nav.classList = 'closing';
    setTimeout(() => {
        nav.classList = 'closed';
    }, 500);
});

nav.addEventListener('click', () => {
    nav.classList = 'closing';
    setTimeout(() => {
        nav.classList = 'closed';
    }, 500);
});
