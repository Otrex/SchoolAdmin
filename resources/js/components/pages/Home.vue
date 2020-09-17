<template>
<div class="home">

    <div class="carousel-vp">
        <InfoCarousel />
    </div>

    <div class="short-summary-vp">
        <ShortSummary :data="summary" />
    </div>

    <div class="other-vp">
        <div class="m-40px"></div>
        <div class="info-cards-vp">
            <InfoCards :data="summary" />
        </div>
    </div>

</div>
</template>

<script>
import InfoCarousel from "./../home/InfoCarousel.vue";
import InfoCards from "./../home/InfoCards.vue";
import ShortSummary from "./../home/ShortSummary.vue";

export default {
    name: 'Home',
    components: {
        InfoCarousel,
        InfoCards,
        ShortSummary
    },
    data: function () {
        return {
            summary: {}
        }
    },
    props: {
        msg: String,
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->

<style>
.home {
    background: whitesmoke;
    overflow: hidden;
    width: 100%;
    position: relative;
    padding: 10px;
}

.remove-pad {
    padding: 0px !important;
}

.carousel-vp {
    position: absolute;
    display: none;
    top: 0;
    width: 100%;
    height: 100vh;
}

.m-40px {
    margin-top: 20px;
}

.other-vp {
    position: relative;
    z-index: 3;
    top: 0px;
}

/*
.carousel-vp,
.short-summary-vp,
.info-cards-vp {
    overflow: hidden;
    position: absolute;
    width: 100%;
}

/*
.carousel-vp {
    height: 300px;
}

.short-summary-vp,
.info-cards-vp {
    z-index: 10;
}

.short-summary-vp {
    top: 50px;
}

.info-cards-vp {
    top: 180px;
}*/
</style>
