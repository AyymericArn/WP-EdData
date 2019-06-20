<template>
    <div class="latest-posts-container">
        <slot></slot>
        <!-- <big-posts></big-posts>
        <small-posts-up></small-posts-up>
        <small-posts-down></small-posts-down> -->
    </div>
</template>

<script>
import BigPosts from './BigPosts.vue'
import SmallPostsUp from './SmallPostsUp.vue'
import SmallPostsDown from './SmallPostsDown.vue'

export default {
    name:'LatestPosts',
    components:{
        BigPosts,
        SmallPostsUp,
        SmallPostsDown
    },
    props:{
        postdata: String,
        postcontent: String
    },
    data () {
        return {
            parsedData: null
        }
    }
}
</script>

<style lang="stylus">

.latest-posts-container
    position relative
    background red
    width 73vw
    height 84vh
    margin auto
    margin-top 7vh
    display grid
    grid-auto-columns auto

</style>

