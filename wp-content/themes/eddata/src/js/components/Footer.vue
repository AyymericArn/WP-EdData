<template>
    <div class="footer">
    </div>
</template>

<script>

export default {
    name: 'FooterWrapper'
}
</script>

<style lang="stylus" scoped>

.footer
    background-color red


.menu-footer-container
    display flex
    align-items center
    justify-content space-between
    height 6.25rem
    padding 0 10rem

    ul
        display flex
        width auto
        justify-content space-between
        padding 2.125rem 0
        padding-bottom 1.25rem
        box-sizing border-box

        li
            list-style none


</style>
