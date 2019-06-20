import Vue from 'vue'
import '../styles/style.styl'
import '../styles/reset.css'

import MenuWrapper from './components/Menu.vue'

// Home
import LatestPosts from './components/Home/LatestPosts.vue'
import BigPosts from './components/Home/BigPosts.vue'
import SmallPostsUp from './components/Home/SmallPostsUp.vue'
import SmallPostsDown from './components/Home/SmallPostsDown.vue'
import PostThumbnail from './components/Home/PostThumbnail.vue'
import Sections from './components/Home/Sections.vue'

// Home/Articles
import AllArticles from './components/Home/Articles/AllArticles.vue'
import Article1 from './components/Home/Articles/Article1.vue'



// Vue component
Vue.component('menu-wrapper', MenuWrapper)

// Home
Vue.component('post-thumbnail', PostThumbnail)
Vue.component('latest-posts', LatestPosts)
Vue.component('big-posts', BigPosts)
Vue.component('small-posts-up', SmallPostsUp)
Vue.component('small-posts-down', SmallPostsDown)
Vue.component('sections', Sections)

// Home/Articles
Vue.component('all-articles', AllArticles)
Vue.component('article-1', Article1)

const app = new Vue({
    el: '#app'
})