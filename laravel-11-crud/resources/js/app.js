import './bootstrap';

import Alpine from 'alpinejs';
import persist from '@alpinejs/persist';

window.Alpine = Alpine;
Alpine.plugin(persist);

document.addEventListener('DOMContentLoaded', function() {
    Alpine.start();
});