import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import JSConfetti from 'js-confetti' //pacote para uso de confetes

const jsConfetti = new JSConfetti()

window.confetti = () => jsConfetti.addConfetti();