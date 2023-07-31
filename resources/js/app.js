import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

$("#tanggal_acara").flatpickr({
    enableTime: true,
    dateFormat: "Y-m-d H:i",
});

