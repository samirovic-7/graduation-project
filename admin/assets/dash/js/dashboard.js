const sideMenuOpen = document.getElementById('side-menu-open');
const sidemenuClose = document.getElementById('sidemenu-close');
const sideMenu = document.getElementById('sideMenu');
const themeChange = document.getElementById('themeChange');
const theme = localStorage.getItem('selectedTheme');
const currentTheme = () => theme === 'dark' ? 'light' : 'dark';
if (theme) {
    themeChange.classList[theme === 'dark' ? 'add' : 'remove']('fa-sun');
    document.body.classList[theme === 'dark' ? 'add' : 'remove']('darkTheme');
}
sideMenuOpen.addEventListener('click', () => {
    sideMenu.classList.add('sideMenu_open');
});
sidemenuClose.addEventListener('click', () => {
    sideMenu.classList.remove('sideMenu_open');
});
themeChange.addEventListener('click', () => {
    localStorage.setItem('selectedTheme', currentTheme());
    themeChange.classList.toggle('fa-sun');
    document.body.classList.toggle('darkTheme');
})