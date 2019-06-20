<template>
    <div class="chapo">
        <div class="left">
            <h4>{{ category[0].category_nicename }}</h4>
            <h1>{{ title }}</h1>
            <p>{{ description }}</p>
            <div class="links">
                <a href="https://facebook.com">Facebook</a>
                <a href="https://twitter.com">twitter</a>
                <a href="https://pinterest.com">pinterest</a>
            </div>
            <div class="author">
                <img :src="author.portrait" alt="author">
                <span>{{ author.name }}</span>
            </div>
        </div>
        <img :src="illu" alt="illu">
    </div>
</template>

<script>
export default {
    name: 'Chapo',
    props: {
        category: Array,
        title: String,
        description: String,
        author: undefined,
        illu: String
    }
}
</script>

<style lang="stylus" scoped>

// @import url('https://fonts.googleapis.com/css?family=Roboto|Rubik:300,400,500&display=swap');

.chapo
    display flex
    margin 0 160px
    justify-content space-between
    padding-bottom 55px
    height 555px

    .left
        display flex
        flex-direction column
        justify-content center
        padding-right 5%

        h4
            font-family: Rubik;
            font-style: normal;
            font-weight: normal;
            font-size: 14px;
            line-height: 17px;
            text-transform: uppercase;
            color: #333333;
            margin-bottom 8px

        h1
            font-family: Rubik;
            font-style: normal;
            font-weight: 500;
            font-size: 36px;
            line-height: 43px;
            color: #333333;
            margin-bottom 22px

        p
            font-family: Rubik;
            font-style: normal;
            font-weight: 300;
            font-size: 16px;
            line-height: 19px;
            color: #333333;
            margin-bottom 22px

        .links
            margin-bottom 8px

        .author
            img
                width: 59.42px;
                height: 90.08px;

    img
        width 120%

</style>
