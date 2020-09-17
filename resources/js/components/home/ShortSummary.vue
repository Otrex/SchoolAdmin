<template>
<div>
    <div>
        <b-container fluid class="remove-pad">
            <b-row align-v="stretch">
                <b-col cols="6" md="3">
                    <InfoCardShort msg="First" />
                </b-col>
                <b-col cols="6" md="3">
                    <InfoCardShort msg="Second" />
                </b-col>
                <b-col cols="6" md="3">
                    <InfoCardShort msg="Third" />
                </b-col>
                <b-col cols="6" md="3">
                    <InfoCardShort msg="fourth" />
                </b-col>
            </b-row>
        </b-container>
    </div>
</div>
</template>

<script>
import InfoCardShort from "./../general/InfoCardShort.vue"
export default {
    name: 'ShortSummary',
    components: {
        InfoCardShort
    },
    props: {
        data: Object
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->

<style scoped>

</style>
