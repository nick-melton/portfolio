import router from './router'
import Vue from 'vue'
import App from './App.vue'
import VueMaterial from 'vue-material'
import 'vue-material/dist/vue-material.min.css'
import 'vue-material/dist/theme/default-dark.css'
import axios from 'axios'
import VueAxios from 'vue-axios'

Vue.use(VueMaterial)
Vue.use(VueAxios, axios)
Vue.prototype.$isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);

const app = new Vue({
    router,
    template: '<App />',
    components: {
        App
    }
})

app.$mount('#app')