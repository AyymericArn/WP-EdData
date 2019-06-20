<template>
    <div class="post-thumbnail">
        <h1><a :href="parsedData.link">{{ parsedData.title }}</a></h1>
        <p v-html="postcontent"></p>
    </div>
</template>

<script>
export default {
    name: 'PostThumbnail',
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
