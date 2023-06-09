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
const showSidebarBtn = document.getElementById('show_sidebar-btn');
const hideSidebarBtn = document.getElementById('hide_sidebar-btn');

//shows on sidebar on small divices
const showSidebar = () => {
  sidebar.style.left = '0';
  showSidebarBtn.style.display ='none';
  hideSidebarBtn.style.display ='inline-block';
}

//hide on sidebar on small divices
const hideSidebar = () => {
  sidebar.style.left = '-100%';
  showSidebarBtn.style.display ='inline-block';
  hideSidebarBtn.style.display ='none';
}

showSidebarBtn.addEventListener('click', showSidebar);
hideSidebarBtn.addEventListener('click', hideSidebar);

