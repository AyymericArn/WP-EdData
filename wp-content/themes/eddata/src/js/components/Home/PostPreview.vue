<template>
    <div class="post-preview">
        <h5>{{ category[0].category_nicename }}</h5>
        <img :src="illu" alt="illustration">
        <div class="post-text">
            <h1>{{ title }}</h1>
            <h2>{{ question }}</h2>
            <div class="excerpt" v-html="excerpt"></div>
            <div class="author-date-more">
                <p>{{ author }}, le {{ date }}</p>
                <a :href="link">Explorer le sujet</a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:'PostPreview',
    props: {
        illu: String,
        excerpt: String,
        title: String,
        category: Array,
        author: String,
        date: String,
        question: String,
        link: String
    }
    
}
</script>

<style lang="stylus" scoped>

.post-preview
    display flex
    font-family Rubik
    padding-bottom 3vh
    width 100%

    img
        width 33%
        height 33%

    .post-text
        display flex
        flex-direction column
        padding-left 1rem
        width 100%


        h1
            font-size 2rem
            line-height 50px

        .excerpt
            color red
            font-size 18px
            line-height 33px

        
        .author-date-more
            display flex
            justify-content space-between
            align-items center

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

