<template>
    <div>
        coucou {{ msg }}
    </div>
</template>

<script>
export default {
    name: 'Test',
    props: {
        msg: String
    }
}
</script>

<style lang="stylus" scoped>

*
    color red

</style>
