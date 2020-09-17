<template>
<div>
    <div class="info-box">
        <div class="content">
            <slot>
                <div class="info-msg">
                    Some quick example text to build on the card and make up the bulk of the card's content.
                </div>
            </slot>
        </div>
    </div>

</div>
</template>

<script>
export default {
    name: 'InfoCard',
    props: {
        msg: String
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->

<style scoped>
.info-box {
    background: pink;
    width: 100%;
    display: inline-block;
    text-align: center;
    overflow: hidden;
    padding: 10px;
}
</style>
