<template>
    <div class="post-preview">
        <!-- <h5>{{ data.category[0].category_nicename }}</h5> -->
        <img :src="illu" alt="illustration">
        <div class="post-text">
            <h1>{{ title }}</h1>
            <h2>{{ question }}</h2>
            <div class="excerpt" v-html="excerpt"></div>
            <div class="author-date">{{ author }}, le {{ date }}</div>
            <a :href="link">Explorer le sujet</a>
        </div>
    </div>
</template>

<style lang="stylus" scoped>

.post-preview
    display flex
    font-family Rubik
    padding-bottom 3vh

    img
        width 33%
        height 33%

    .post-text
        display flex
        flex-direction column
        padding-left 1rem
        line-height 22px


        h1
            font-size 2rem
            line-height 33px

        .excerpt
            color red
        
        .author-date
            width 24vw
        
        a
            text-decoration none
            font-family Roboto
            font-style normal
            font-weight normal
            font-size 18px
            line-height 21px
            display flex
            align-items center
            text-align center
            color #FFFFFF
            background:#067CFA
            border-radius 4px
            padding 8px 16px
</style>

<script>
export default {
    name:'PostPreview',
    props: {
        data: Object,
        illu: String,
        excerpt: String,
        title: String,
        category: String,
        author: String,
        date: String,
        question: String,
        link: String
    }
}
</script>
