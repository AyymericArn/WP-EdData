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
    height 62.5rem
    width calc(100% - 20rem)
    margin auto
    display grid
    padding-top 4vh
    grid-template-columns 1fr 1fr 1fr
    grid-template-rows 1fr 1fr
    grid-gap 20px


@media screen and (max-width 360px){

    .latests-posts
    {
        // background-color red
        width 100%
        display flex
        flex-direction column
        align-items center
    }
}

@media screen and (min-width 360px) and (max-width 899px){

    .latests-posts
    {
        // background-color red
        width 100%
        display flex
        flex-direction column
        align-items center
    }
}

// @media screen and (min-width 899px) and (max-width 1100px) {
//     .latests-posts
//     {
//         height 30.5rem
//         width calc(100% - 20rem)
//         margin auto
//         display grid
//         padding-top 4vh
//         grid-template-columns 1fr 1fr 1fr
//         grid-template-rows 1fr 1fr
//         grid-gap 20px
//     }
// }

</style>
