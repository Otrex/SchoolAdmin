<template>
<div>
    <b-calendar block selected-variant="success" today-variant="info" nav-button-variant="primary"></b-calendar>
</div>
</template>

<script>
export default {
    name: 'Calendar',
    props: {
        msg: String
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->

<style scoped>

</style>
