import './bootstrap';
import Alpine from 'alpinejs';
import Home from './home';

window.Alpine = Alpine;

Alpine.data('home', Home);

Alpine.start();
