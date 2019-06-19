import Vue from 'vue'
import '../styles/style.styl'
import '../styles/reset.css'

import MenuWrapper from './components/Menu.vue'
import LatestPosts from './components/Home/LatestPosts.vue'
import BigPosts from './components/Home/BigPosts.vue'
import SmallPostsUp from './components/Home/SmallPostsUp.vue'
import SmallPostsDown from './components/Home/SmallPostsDown.vue'
import PostThumbnail from './components/Home/PostThumbnail.vue'
import Sections from './components/Home/Sections.vue'
import AllArticles from './components/Home/AllArticles.vue'

Vue.component('menu-wrapper', MenuWrapper)
Vue.component('post-thumbnail', PostThumbnail)
Vue.component('latest-posts', LatestPosts)
Vue.component('big-posts', BigPosts)
Vue.component('small-posts-up', SmallPostsUp)
Vue.component('small-posts-down', SmallPostsDown)
Vue.component('sections', Sections)
Vue.component('all-articles', AllArticles)

const app = new Vue({
    el: '#app'
})