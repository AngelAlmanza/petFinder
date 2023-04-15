import './bootstrap';
import '../../node_modules/@fortawesome/fontawesome-free/css/all.min.css';
import '../../node_modules/@fortawesome/fontawesome-free/js/all.min';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

try {
    const menuToggle = document.getElementById('menuToggle');
    const menu = document.getElementById('menu');
    const menuIconOpen = document.getElementById('icon-menu-open');
    const menuIconClose = document.getElementById('icon-menu-close');
    menuToggle.addEventListener('click', function() {
        menu.classList.toggle('hidden');
        menuIconOpen.classList.toggle('hidden');
        menuIconClose.classList.toggle('hidden');
    });
} catch (error) {
    console.error(error)
}
