<template>
    <nav class="sections">
        <ul>
            <section-link @categorychange="AjaxCall" :categoryName="categoryName" :label="section.text" v-for="(section, index) in sections" :key="index"><a href="#"></a></section-link>
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
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: `category=${cat}`
            }).then(response => response.text())
            // .then(result => console.log(result))
        },
    },
    data() {
        return {
            sections: [
                { text: "Toutes", cat : 'all' },
                { text: "France", cat : 'france' },
                { text: "International", cat : 'inegalite' },
                { text: "Technologie", cat : 'international' },
                { text: "inégalités", cat : 'technologies' }
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

