const navItems = document.querySelector('.nav_items');
const openNavBtn = document.querySelector('#open_nav-btn');
const closeNavBtn = document.querySelector('#close_nav-btn');

// opens nav dropdown
const openNav = () => {
    navItems.Style.display = 'flex';
    openNavBtn.Style.display = 'none';
    openNavBtn.Style.display = 'inline-block';
}

// close nav dropdown
const openNav = () => {
    navItems.Style.display = 'flex';
    openNavBtn.Style.display = 'none';
    openNavBtn.Style.display = 'inline-block';
}
openNavBtn.addEventListener('click', openNav);
closeNavBtn.addEventListener('click', closeNav);
