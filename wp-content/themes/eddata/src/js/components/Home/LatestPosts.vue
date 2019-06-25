<template>
    <div class="latests-posts">
        <Post :data="data[0]" :h="3" :w="3"></Post>
        <Post :data="data[1]"></Post>
        <Post :data="data[2]"></Post>
    </div>
</template>

<script>
import Post from './Post'

export default {
    components: {
        Post
    },
    props: {
        postsdata: String
    },
    data () {
        return {
            data: null
        }
    },
    beforeMount () {
        this.data = JSON.parse(this.postsdata)
    }
}
</script>

<style lang="stylus" scoped>

.latests-posts
    height 1000px
    width calc(100% - 320px)
    margin auto
    display grid
    padding-top 4vh
    grid-template-columns 1fr 1fr 1fr
    grid-template-rows 1fr 1fr
    grid-gap 20px

</style>
