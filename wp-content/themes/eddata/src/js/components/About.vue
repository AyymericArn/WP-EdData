<template>
    <div class="about">
        <div class="txt">
            <h1>{{ data.title }}</h1>
            <h3 v-html="data.content"></h3>
        </div>
        <img :src="data.illu" alt="img">
    </div>
</template>

<script>
export default {
    props: {
        postdata: String
    },
    data() {
        return {
            data: null
        }
    },
    beforeMount () {
        this.data = JSON.parse(this.postdata)
    },
    mounted() {
        console.log(data.illu)
    },
}
</script>

<style lang="stylus" scoped>
    
    .about
        display flex
        width calc(100% - 20rem)
        padding-top 4vh
        height 73vh
        margin auto
        margin-top 4vh

        .txt
            h1
                font-family Rubik 
                font-size 36px
                line-height 43px
            
            h3
                width 35vw
                font-family Roboto
                font-style normal
                font-weight 300
                font-size 16px
                line-height 25px
                padding-top 4vh
        
        img
            width 50%
            height 80%
            margin 3rem

</style>
