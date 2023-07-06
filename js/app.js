import "./bootstrap";

import Alpine from "alpinejs";
import focus from "@alpinejs/focus";
import mask from "@alpinejs/mask";
import intersect from "@alpinejs/intersect";
import persist from "@alpinejs/persist";
import collapse from "@alpinejs/collapse";

window.Alpine = Alpine;

Alpine.plugin(focus);
Alpine.plugin(mask);
Alpine.plugin(intersect);
Alpine.plugin(persist);
Alpine.plugin(collapse);

Alpine.start();
