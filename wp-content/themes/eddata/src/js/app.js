import Vue from 'vue'

import Test from './components/Test.vue'
import MenuWrapper from './components/Menu.vue'

Vue.component('test', Test)
Vue.component('menu-wrapper', MenuWrapper)

const app = new Vue({
    el: '#app'
})