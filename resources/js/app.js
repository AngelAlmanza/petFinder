import './bootstrap';
import '../../node_modules/@fortawesome/fontawesome-free/css/all.min.css';
import '../../node_modules/@fortawesome/fontawesome-free/js/all.min';
import "/node_modules/flag-icons/css/flag-icons.min.css";
import { countries } from './flags';

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

try {
    const input = document.getElementById('url');
    input.value = window.location.pathname.substring(13);
} catch (error) {
    console.error(error);
}

try {
    const header = document.getElementById('header');
    const main = document.getElementById('main');
    const footer = document.getElementById('footer');
    const height = window.innerHeight;
    if (!((header.clientHeight + main.clientHeight + footer.clientHeight) >= height)) {
        main.style.height = `${(height - header.clientHeight - footer.clientHeight)}px`;
    }
} catch (error) {
    console.error(error)
}

try {
    const selectMenu = document.getElementById('select');
    const options = document.getElementById('options');
    const inputLocation = document.getElementById('ubicacion');
    const optionsList = document.querySelectorAll('#options > div');
    selectMenu.addEventListener('click', () => {
        options.classList.toggle('hidden');
    });
    optionsList.forEach((opcion) => {
        opcion.addEventListener('click', (e) => {
            inputLocation.value = e.currentTarget.querySelector('.country').innerText;
            selectMenu.innerHTML = opcion.innerHTML;
            options.classList.toggle('hidden');
        });
    });
} catch (error) {
    console.error(error);
}
