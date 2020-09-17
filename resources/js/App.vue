<template>
<div id="app">

    <StatusBar msg="Hi" />
    <NavBar msg="Hi" />

    <div class="viewport">
        <router-view></router-view>
    </div>

</div>
</template>

<script>
//import HelloWorld from './components/HelloWorld.vue'
import StatusBar from './components/StatusBar.vue'
import NavBar from './components/NavBar.vue'

export default {
    name: 'App',
    components: {
        StatusBar,
        NavBar
    }
}
</script>

<style>
#app {
    font-family: Avenir, Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
}

.viewport {
    position: relative;
    top: 0px;
    padding: 55px 0px 0px 30px;
    background: black;
    /* 60 = 10+50*/
}
</style>
