<template>
    <nav class="sections">
        <ul>
            <section-link @categorychange="AjaxCall" :categoryName="section.cat" :label="section.text" v-for="(section, index) in sections" :key="index"></section-link>
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
    methods: {
        AjaxCall(cat)
        {
            // console.log(event.currentTarget.__vue__._props.categoryName);
            console.log(ajaxurl);
            fetch(ajaxurl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8'
                },
                body: `action=ajax-actionpost&category=${cat}`
            }).then(response => response.text())
            .then(result => {
                this.$parent.$children[2].otherpostsdata = JSON.parse(result)
            })
            
        },
    },
    data() {
        return {
            sections: [
                { text: "Toutes", cat : 'all' },
                { text: "France", cat : 'france' },
                { text: "International", cat : 'international' },
                { text: "Technologie", cat : 'technologie' },
                { text: "inégalités", cat : 'inégalité' }
            ]
        }
    }
}
</script>

<style lang="stylus" scoped>

    .sections
        height 10vh
        margin auto 
        display: flex;
        width calc(100% - 320px)
        justify-content center

        ul
            display flex
            flex-direction row
            padding 0

            li
                position relative
                list-style none

                a
                    display block
                    padding 0 2.5vw
                    text-decoration none
                    text-transform uppercase

</style>

