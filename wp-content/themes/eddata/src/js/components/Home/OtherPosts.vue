<template>
    <div class="other-posts">
        <post-preview v-for="_post in otherpostsdata" :key="_post.id" 
            :illu="_post.illu" 
            :excerpt="_post.excerpt" 
            :title="_post.title" 
            :category="_post.category" 
            :author="_post.author" 
            :date="_post.date" 
            :question="_post.question" 
            :link="_post.link"></post-preview>
    </div>
</template>

<script>
import PostPreview from './PostPreview.vue'

export default {
    name: 'OtherPosts',
    components: {
        PostPreview
    },
    props: {
        postsdata: String
    },
    data() {
        return {
            otherpostsdata : null
        }
    },
    beforeMount() {
        this.otherpostsdata = JSON.parse(this.postsdata)
    },
    beforeUpdate() {
        console.log(this.otherpostsdata)
    },
}

</script>

<style lang="stylus" scoped>

.other-posts
    width calc(100% - 20rem)
    margin auto


@media screen and (max-width: 360px){

    .other-posts
    {
        width 100%
    }

}

@media screen and (min-width: 360px) and (max-width: 899px){

    .other-posts
    {
        width 100%
    }

}
</style>
