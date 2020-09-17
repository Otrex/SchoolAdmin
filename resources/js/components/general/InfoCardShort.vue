<template>
<div>
    <div class="info-box">
        <b-container fluid>
            <b-row class="justify-content-md-center">
                <b-col col lg="2">
                    <div class="icon-circle">
                        <b-icon icon="circle-fill" animation="throb" font-scale="4"></b-icon>
                    </div>
                </b-col>

                <b-col cols="12" md="8" class="remove-pad">
                    <div class="var">{{msg}}</div>
                </b-col>
                <b-col col lg="2" class="remove-pad">
                    <div class="stat ">10%</div>
                </b-col>
            </b-row>
        </b-container>
    </div>
</div>
</template>

<script>
export default {
    name: 'InfoCardShort',
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

.icon-circle {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    overflow: hidden;
    background: yellow;
}

/*
.info-box * {
    border: 1px solid red;
}*/

.var,
.stat {
    padding: 10px 5px;
}

.stat {
    background: blue;
    color: white;
}
</style>
