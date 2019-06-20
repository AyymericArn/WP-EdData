<template>
    <div class="article-wrapper">
        <Chapo
            :title="data.title"
            :category="data.category"
            :description="data.description"
            :author="data.author"
            :illu="data.illu"
        ></Chapo>
        <Modale @close="toggleModal" v-if="displayModal" :infos="data.questions[0]"></Modale>
        <div class="hider" v-if="displayModal"></div>
        <DataViz></DataViz>
        <div :class="`content${displayModal ? ' is-hidden' : ''}`" v-html="data.content"></div>
    </div>
</template>

<script>
import Chapo from './Chapo'
import Modale from './Modale'
import DataViz from './DataViz'

export default {
    data () {
        return {
            data: null,
            displayModal: true
        }
    },
    methods: {
        toggleModal () {
            this.displayModal = false
        }
    },
    props: {
        // object stringified
        postdata: String
    },
    components: {
        Chapo,
        Modale,
        DataViz
    },
    beforeMount () {
        this.data = JSON.parse(this.postdata)
    }
}
</script>

<style lang="stylus" scoped>

p
    margin-bottom 16px

.content
    margin 60px 350px
    font-family: Rubik;
    font-style: normal;
    font-weight: 300;
    font-size: 16px;
    line-height: 21px;
    color: #333333;

    &.is-hidden
        height: 80px;
        overflow: hidden;

.hider
    background: linear-gradient(to top, rgba(255,255,255,1) 0%,rgba(255,255,255,1) 48%,rgba(255,255,255,1) 50%,rgba(255,255,255,0) 100%);
    width 100%
    height 90vh
    position absolute
    bottom -46vh
    z-index 1
    left 0

</style>
