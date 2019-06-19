<template>
    <nav class="sections">
        <ul>
            <section-link :label="section.text" v-for="(section, index) in sections" :key="index"><a href="#"></a></section-link>
        </ul>
    </nav>
</template>

<script>
import SectionLink from './SectionLink.vue'

export default {
    name:'Sections',
    components: {
        SectionLink
    },
    data() {
        return {
            sections: [
                { text: "Toutes", link : this.parsedData },
                { text: "mkldfkl", link : this.parsedData },
                { text: "oui", link : this.parsedData },
                { text: "oui", link : this.parsedData },
                { text: "oui", link : this.parsedData }
            ]
        }
    }
}
</script>

<style lang="stylus" scoped>

    .sections
        background-color red

        ul
            display flex
            flex-direction row
            padding 0

            li
                position relative
                list-style none
                margin auto 

                a
                    display block
                    padding 3vh 2vw
                    text-decoration none
                    text-transform uppercase

</style>

