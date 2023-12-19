import './bootstrap';

import Alpine from 'alpinejs';
import { Input,Datepicker, initTE } from "tw-elements";

initTE({ Input, Datepicker });

window.Alpine = Alpine;

Alpine.start();
