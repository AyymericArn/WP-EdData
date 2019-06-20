<template>
    <div class="small-image-up">
        <div class="text-container-up">
            <h2><a :href="parsedData.link">{{ parsedData.title }}</a></h2>
            <p v-html="postcontent"></p>
        </div>
    </div>
</template>

<script>
export default {
    name:'SmallPostsUp',
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

.small-image-up
    background purple 
    width 23.4vw
    height 47vh
    border-radius 6px

</style>

