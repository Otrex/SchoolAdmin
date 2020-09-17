<template>
<div>
    <div class="container-fluid remove-pad">
        <b-carousel id="carousel-fade" style="text-shadow: 0px 0px 2px #000" fade img-width="1024" img-height="480">
            <b-carousel-slide img-src="https://picsum.photos/1024/480/?image=10"></b-carousel-slide>
            <b-carousel-slide img-src="https://picsum.photos/1024/480/?image=12"></b-carousel-slide>
            <b-carousel-slide img-src="https://picsum.photos/1024/480/?image=22"></b-carousel-slide>
        </b-carousel>
    </div>
</div>
</template>

<script>
export default {
    name: 'InfoCarousel',
    props: {
        msg: String
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->

<style scoped>

</style>
