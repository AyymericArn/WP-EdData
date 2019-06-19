<template>
    <div class="big-image">
        <div class="text-container">
            <h2><a :href="parsedData.link">{{ parsedData.title }}</a></h2>
            <p v-html="postcontent"></p>
        </div>
    </div>
</template>

<script>
export default {
    name:'BigPosts',
    props: {
        postdata: String,
        postcontent: String
    },
    data () {
        return {
            parsedData: null
        }
    },
    beforeMount () {
        console.log(this.postdata)
        this.parsedData = JSON.parse(this.postdata)
    }
}
</script>

<style lang="stylus">

    .big-image
        background grey
        width 48vw
        height 84vh
        border-radius 6px
        background-image url("../../../images/big-img.jpg")
        background-size 138%

        .text-container
            width 30vw
            height 22vh
            font-weight 500
            font-size 2.25rem
            line-height 2.6875rem
            padding-top 60vh
            padding-left 4vw
            color white

            a
                text-transform none 
    
</style>

