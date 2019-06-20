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
        this.parsedData = JSON.parse(this.postdata)
    }
}
</script>

<style lang="stylus" scoped>

    .big-image
        background grey
        width 48vw
        height 84vh
        border-radius 6px

        .text-container
            width 30vw
            height 14vh
            font-weight 500
            font-size 2.25rem
            line-height 2.6875rem
    
</style>

