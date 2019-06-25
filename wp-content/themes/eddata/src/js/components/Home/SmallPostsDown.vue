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

<style lang="stylus">

.small-image-down
    background purple 
    width 23.4vw
    height 41vh
    margin-bottom -100%
    border-radius 6px
    grid-column 2 / 2
    grid-row 1
    margin-top 43vh
    background-image url("../../../images/small-img-down.jpg")
    background-size 129%

</style>

