require('./bootstrap');
import { createApp } from 'vue'
import Alpine from 'alpinejs';
import collapse from '@alpinejs/collapse';

import Tabs from './components/Tabs.vue';
import Football from "./components/Football.vue";
import Payment from "./components/Payment.vue";
import SlideUpDown from 'vue3-slide-up-down'

const app = createApp({});

const app2 = createApp({});

const app3 = createApp({});

app.component('pred-tabs', Tabs);

app2.component('Football', Football);
app2.component('slide-up-down', SlideUpDown)

app3.component('Payment', Payment);

app3.mount("#payment-div")

app.mount('#vue-div');

app2.mount('#football-pred');

Alpine.plugin(collapse);

window.Alpine = Alpine;

Alpine.start();


