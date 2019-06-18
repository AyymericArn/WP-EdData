import Vue from 'vue'
import '../styles/style.styl'
import '../styles/reset.css'

import Test from './components/Test.vue'
import Posts from './components/Posts.vue'
import MenuWrapper from './components/Menu.vue'
import PostThumbnail from './components/PostThumbnail.vue'


Vue.component('test', Test)
Vue.component('menu-wrapper', MenuWrapper)
Vue.component('post-thumbnail', PostThumbnail)
Vue.component('posts', Posts)

const app = new Vue({
    el: '#app'
})