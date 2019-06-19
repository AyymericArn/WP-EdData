<template>
    <button>
        {{ label }}
    </button>
</template>

<script>
export default {
    name: 'SectionLink',
    props: {
        label: String
    },
    data () {
        return {
            isActive: false
        }
    },
    // methods: {
    //     toggleActive () {
    //         this.isActive = !this.isActive
    //     }
    // }
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
    padding: 9px 24px
    color: #333333;
    text-transform uppercase

    &.isActive
        color #067CFA
        border: 1px solid #067CFA;

</style>
