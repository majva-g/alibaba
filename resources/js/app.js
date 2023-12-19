import "./bootstrap";

import Alpine from "alpinejs";
import { Input, Datepicker, Modal, Ripple, initTE } from "tw-elements";

initTE({ Input, Datepicker, Modal, Ripple });

window.Alpine = Alpine;

Alpine.start();
