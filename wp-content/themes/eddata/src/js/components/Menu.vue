<template>
    <div class="menu">
        <img src="../../images/logo.png" alt="Educaviz">
        <!-- <slot></slot> -->
        <img src="../../images/search.svg" alt="search">
    </div>
</template>

<script>
export default {
    name: 'MenuWrapper'
}
</script>

<style lang="stylus" scoped>

.menu
    display flex
    align-items center
    justify-content space-between
    height 100px
    padding 0 160px

    ul
        display flex
        width auto
        justify-content space-between
        padding 2.125rem 0
        padding-bottom 20px
        box-sizing border-box

        li
            list-style none

</style>
