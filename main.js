const navItems = document.querySelector('.nav_items');
const openNavBtn = document.getElementById('open_nav-btn');
const closeNavBtn = document.getElementById('close_nav-btn');

const openNav = () => {
  navItems.style.display = 'flex';
  openNavBtn.style.display = 'none';
  closeNavBtn.style.display = 'inline-block';
};

const closeNav = () => {
  navItems.style.display = 'none';
  openNavBtn.style.display = 'inline-block';
  closeNavBtn.style.display = 'none';
};

openNavBtn.addEventListener('click', openNav);
closeNavBtn.addEventListener('click', closeNav);

const sidebar = document.querySelector('aside');
const showSideBtn = document.querySelector('#show_sidebar-btn');
const hideSideBtn = document.querySelector('#hide_sidebar-btn');

const showSidebar = () => {
  sidebar.style.left = '0'
}
 
