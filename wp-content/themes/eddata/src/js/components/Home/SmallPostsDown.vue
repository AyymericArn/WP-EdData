<template>
    <div class="small-image-down">
        <div class="text-container-down">
            <h2><a :href="parsedData.link">{{ parsedData.title }}</a></h2>
            <p v-html="postcontent"></p>
        </div>
    </div>
</template>

<script>
export default {
    name:'SmallPostsDown',
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

.small-image-down
    background purple 
    width 23.4vw
    height 47vh
    border-radius 6px

</style>

