import Vue from "vue";
import App from "./App.vue";
import store from "./vuex/store";

import MainPage from "./components/MainPage/MainPage";
import SubcategoryPage from "./components/ProductPage/SubcategoryPage";
import ProductPage from "./components/ProductPage/ProductPage";

require('./bootstrap');

const app = new Vue({
    el: '#app',
    store,
    components: {
        MainPage,
        SubcategoryPage,
        ProductPage
    }
});
app.$mount('#app');


