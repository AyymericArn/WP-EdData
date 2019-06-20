import Vue from 'vue'
import '../styles/style.styl'
import '../styles/reset.css'

import Test from './components/Test.vue'
import MenuWrapper from './components/Menu.vue'
import FooterWrapper from './components/Footer.vue'

// Home
import BigPosts from './components/Home/BigPosts.vue'
import SmallPostsUp from './components/Home/SmallPostsUp.vue'
import SmallPostsDown from './components/Home/SmallPostsDown.vue'
import PostThumbnail from './components/PostThumbnail.vue'

import LatestPosts from './components/Home/LatestPosts.vue'
import OtherPosts from './components/Home/OtherPosts.vue'
import Sections from './components/Home/Sections.vue'

// Article

import ArticleWrapper from './components/Article/ArticleWrapper.vue'
import DataViz from './components/Article/DataViz.vue'
import Modale from './components/Article/Modale.vue'

Vue.component('menu-wrapper', MenuWrapper)
Vue.component('footer-wrapper', FooterWrapper)
Vue.component('test', Test)

// Home
Vue.component('post-thumbnail', PostThumbnail)
Vue.component('big-posts', BigPosts)
Vue.component('small-posts-up', SmallPostsUp)
Vue.component('small-posts-down', SmallPostsDown)

Vue.component('latest-posts', LatestPosts)
Vue.component('other-posts', OtherPosts)
Vue.component('sections', Sections)

// Article
Vue.component('article-wrapper', ArticleWrapper)
Vue.component('dataviz', DataViz)
Vue.component('modale', Modale)

const app = new Vue({
    el: '#app'
})