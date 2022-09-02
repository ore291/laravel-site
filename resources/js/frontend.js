require('./bootstrap');
import { createApp } from 'vue'
import Alpine from 'alpinejs';
import collapse from '@alpinejs/collapse';

import Tabs from './components/Tabs.vue';
import Football from "./components/Football.vue";
import Payment from "./components/Payment.vue";
import Sports from "./components/Sports.vue"
import SlideUpDown from 'vue3-slide-up-down'
import Flutterwave from 'vue-flutterwave'



const app = createApp({});

const app2 = createApp({});

const app3 = createApp({});

const app4 = createApp({});



app4.component('Sports', Sports)

app.component('pred-tabs', Tabs);

app2.component('Football', Football);
app2.component('slide-up-down', SlideUpDown)

app3.component('Payment', Payment);
app3.use(Flutterwave, { publicKey: 'FLWPUBK_TEST-3b100333c526f8573b7e7c85ee5310b8-X' })

app3.mount("#payment-div")

app.mount('#vue-div');

app2.mount('#football-pred');
app4.mount("#other-sports-pred")

Alpine.plugin(collapse);

window.Alpine = Alpine;

Alpine.start();


