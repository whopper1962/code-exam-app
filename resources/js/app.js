require("./bootstrap");

import router from "./router";
import VueRouter from "vue-router";

import Vue from 'vue';
Vue.use(VueRouter);

Vue.config.productionTip = false;

// Import fontawesome
import { library } from "@fortawesome/fontawesome-svg-core";
import { faLaptopCode, faRocket, faAngleRight } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
const faIcons = [faRocket, faLaptopCode, faAngleRight];
library.add(faIcons);
Vue.component("font-awesome-icon", FontAwesomeIcon);

// Navigation bar
import NavigationBar from './components/NavigationBar';
Vue.component('navigation-bar', NavigationBar);

new Vue({
    el: "#app",
    router
});
