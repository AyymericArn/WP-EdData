<template>
    <main class="articles-container">
        <p>wesh</p>
        <slot></slot>
    </main>
</template>

<script>
import Article1 from './Article1.vue'

export default {
    name: 'AllArticles',
    components:{
        Article1
    }
}
</script>

<style lang="stylus" scoped>

main.articles-container
    position relative
    background red
    width 73vw
    height 84vh
    margin auto
    margin-top 2vh
    display grid
    grid-auto-columns 3
    grid-auto-rows 4
</style>
