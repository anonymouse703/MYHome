import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

import './../../vendor/power-components/livewire-powergrid/dist/powergrid';

Alpine.start();

import swal from 'sweetalert2';

window.swal = swal;
