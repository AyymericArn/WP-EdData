<template>
    <div class="post-preview">
        <img :src="illu" alt="illustration">
        <div class="post-text">
            <h5>{{ category[0].category_nicename }}</h5>
            <h1>{{ title }}</h1>
            <h2>Selon vous, est-ce qu'on vit dans un monde de constante inégalité et qu'on a beau se casser les fesses à améliorer les choses mais au final TOZ ?</h2>
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
    padding-bottom 6vh
    padding-top 4vh
    width 100%

    img
        width 33%
        height 33%

    .post-text
        display flex
        flex-direction column
        padding-left 1rem
        width 100%

        h5
            text-transform uppercase

        h1
            font-size 2rem
            line-height 50px
        
        h2
            color blue

        .excerpt
            color red
            font-size 18px
            line-height 23px
            margin 0.5rem 0

        
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

            &::after
                content ''
                transform translateY(6vh)
                background-color blue
                width calc(100% - 20rem)
                position absolute
                height 0.1vh
                left 10.5vw

@media screen and (max-width: 360px)
{

    .post-preview
    {
        width 100%
        display block
        text-align center

        .post-text
        {
            padding-left 0rem
            width 90%
            margin auto
        }
    }
    
    .author-date-more
    {
        ::after
        {
            content ''
            transform translateY(7vh)
            background-color blue
            width 74vw
            position absolute
            height 0.1vh
            left 10.5vw
        }
    }
}

@media screen and (min-width: 360px) and (max-width: 899px)
{

    .post-preview
    {
        width 100%
        display block
        text-align center

        .post-text
        {
            padding-left 0rem
            width 90%
            margin auto
        }
    }
    
    // .author-date-more
    // {
    //     ::after
    //     {
    //         content ''
    //         transform translateY(7vh)
    //         background-color blue
    //         width 74vw
    //         position absolute
    //         height 0.1vh
    //         left 10.5vw
    //     }
    // }
}
</style>

