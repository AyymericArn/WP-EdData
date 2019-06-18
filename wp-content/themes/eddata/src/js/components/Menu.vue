<template>
    <div class="menu">
        <slot></slot>
        <img src="../../images/search.svg" alt="">
    </div>
</template>

<script>
export default {
    name: 'MenuWrapper'
}
</script>

<style lang="stylus" scoped>

ul
    display flex
    justify-content space-between
    padding 2.125rem 11.5rem

    li
        list-style none

</style>
