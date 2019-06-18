import Vue from 'vue'
import '../styles/style.styl'
import '../styles/reset.css'

import Test from './components/Test.vue'
import BigPosts from './components/BigPosts.vue'
import SmallPostsUp from './components/SmallPostsUp.vue'
import SmallPostsDown from './components/SmallPostsDown.vue'
import MenuWrapper from './components/Menu.vue'
import PostThumbnail from './components/PostThumbnail.vue'


Vue.component('test', Test)
Vue.component('menu-wrapper', MenuWrapper)
Vue.component('post-thumbnail', PostThumbnail)
Vue.component('big-posts', BigPosts)
Vue.component('small-posts-up', SmallPostsUp)
Vue.component('small-posts-down', SmallPostsDown)

const app = new Vue({
    el: '#app'
})