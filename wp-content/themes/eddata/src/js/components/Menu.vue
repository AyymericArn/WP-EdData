<template>
    <div class="menu">
        <slot></slot>
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
    justify-content center

    li
        list-style none
        padding 5px 20px

</style>
