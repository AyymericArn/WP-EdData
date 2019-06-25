<template>
    <button @click="handleClick">
        {{ label }}
    </button>
</template>

<script>
export default {
    name: 'SectionLink',
    props: {
        label: String,
        categoryName: String
    },
    data () {
        return {
            isActive: false
        }
    },
    methods: {
        handleClick() {
            this.$emit('categorychange', this.categoryName)
        }
    }
}
</script>

<style lang="stylus" scoped>

button
    border none
    font-family: Rubik;
    font-style: normal;
    font-weight: 300;
    font-size: 18px;
    line-height: 21px;
    padding: 0 2.5vw
    color: #333333;
    text-transform uppercase
    margin auto
    cursor pointer

    &.isActive
        color #067CFA
        border: 1px solid #067CFA;

</style>
