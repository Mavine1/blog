const navItems = document.querySelector('.nav__items');
const openNavBtn = document.querySelector('#open__nav-btn');
const closeNavBtn = document.querySelector('#close__nav-btn');

// opens nav dropdown
const openNav = () => {
    navItems.Style.display = 'flex';
    openNavBtn.Style.display = 'none';
    closeNavBtn.Style.display = 'inline-block';
}

// close nav dropdown
const closeNav = () => {
    navItems.Style.display = 'none';
    openNavBtn.Style.display = 'inline-block';
    closeNavBtn.Style.display = 'none';
}
openNavBtn.addEventListener('click', openNav);
closeNavBtn.addEventListener('click', closeNav);
