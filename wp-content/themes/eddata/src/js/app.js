import Vue from 'vue'

import Test from './components/Test.vue'
import MenuWrapper from './components/Menu.vue'
import PostThumbnail from './components/PostThumbnail.vue'

console.log('pute')

Vue.component('test', Test)
Vue.component('menu-wrapper', MenuWrapper)
Vue.component('post-thumbnail', PostThumbnail)

const app = new Vue({
    el: '#app'
})