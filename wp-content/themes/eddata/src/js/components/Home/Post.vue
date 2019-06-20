<template>
    <div class="post" :style="style">
        <h5>{{ data.category[0].category_nicename }}</h5>
        <h3>{{ data.title }}</h3>
        <a :href="data.link">Explorer le sujet</a>
    </div>
</template>

<script>
export default {
    name: 'Post',
    props: {
        data: Object,
        h: Number,
        w: Number
    },
    computed: {
        style () {
            if (this.h && this.w) {
                return `background-image: url(${this.data.illu}); grid-area: 1 / 1 / ${this.w} / ${this.h}`                
            } else {
                return `background-image: url(${this.data.illu});`                
            }
        }
    },
    mounted () {
        console.log(this.data)
    }
}
</script>

<style lang="stylus" scoped>

.post
    text-emphasis none
    background-size cover
    display flex
    flex-direction column
    justify-content flex-end
    align-items flex-start
    padding 40px
    transition all 0.2s ease
    will-change filter
    
    &:hover
        filter brightness(0.9)

    h5
        font-family: Rubik;
        font-style: normal;
        font-weight: normal;
        font-size: 10px;
        line-height: 17px;
        text-transform: uppercase;
        color: #FFFFFF;

    h3
        font-family: Rubik;
        font-style: normal;
        font-weight: 500;
        font-size: 17px;
        line-height: 43px;
        text-align: center;
        color: #FFFFFF;

    a
        text-decoration none
        font-family: Roboto;
        font-style: normal;
        font-weight: normal;
        font-size: 18px;
        line-height: 21px;
        display: flex;
        align-items: center;
        text-align: center;
        color: #FFFFFF;
        background: #067CFA;
        border-radius: 4px;
        padding 8px 16px


</style>
