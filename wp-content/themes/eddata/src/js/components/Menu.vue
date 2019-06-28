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


@media screen and (max-width: 360px)
{
    .menu
    {
        height 8.5vh
        padding 0 3rem
    }
}

@media screen and (min-width: 361px) and (max-width: 630px)
{
    .menu
    {
        padding 0 3rem
    }
}


</style>
