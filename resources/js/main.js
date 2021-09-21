
import Vue from "vue";
import App from "./views/layouts/app.blade.php";
import router from "./routes";

Vue.config.productionTip = false;


new Vue({
    router,
    render: h => h(App)
}).$mount("#app");
