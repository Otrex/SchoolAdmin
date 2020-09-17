<template>
<div>
    <b-container fluid class="remove-pad">
        <b-row>
            <b-col cols="12" md="4">
                <InfoCard msg="First">
                    <Calendar msg="" />
                </InfoCard>
            </b-col>
            <b-col cols="12" md="4">
                <InfoCard msg="Second">
                    <ChatMsgs msg="" />
                </InfoCard>
            </b-col>
            <b-col cols="12" md="4">
                <InfoCard msg="Third" />
            </b-col>
        </b-row>
    </b-container>
</div>
</template>

<script>
import InfoCard from "./../general/InfoCard.vue"
import Calendar from "./../general/Calendar.vue"
import ChatMsgs from "./../general/ChatMsgs.vue"

export default {
    name: 'InfoCards',
    components: {
        InfoCard,
        Calendar,
        ChatMsgs
    },
    props: {
        data: Object
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->

<style scoped>

</style>
