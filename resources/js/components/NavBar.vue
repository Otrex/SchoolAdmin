<template>
<div class="nav-box" @mouseover="open" @mouseout="close" ref="navB">
    <div class="nav-menu-btns">
        <div class="user-img">
            <div class="circle">
                <!--image here -->
            </div>
        </div>
        <div class="overflow-prev">
            <b-nav vertical align="left">
                <b-nav-item active href="#/">
                    <b-icon icon="house-door-fill"></b-icon> Dashboard
                </b-nav-item>
                <b-nav-item>
                    <b-icon icon="bell-fill"></b-icon> Alerts
                </b-nav-item>
                <b-nav-item href="#/pages">
                    <b-icon icon="book-fill"></b-icon> Books
                </b-nav-item>
                <b-nav-item>
                    <b-icon icon="flag-fill"></b-icon> Flags
                </b-nav-item>
                <b-nav-item-dropdown>
                    <template v-slot:button-content>
                        <b-icon icon="terminal-fill"></b-icon> Edit Code
                    </template>
                    <b-dropdown-item href="#/code/webpages">
                        <b-icon icon="file-code-fill"></b-icon> Webpages
                    </b-dropdown-item>
                    <b-dropdown-item href="#/code/files">
                        <b-icon icon="folder-fill"></b-icon> Other Files
                    </b-dropdown-item>
                </b-nav-item-dropdown>
                <b-nav-item>
                    <b-icon icon="nut-fill"></b-icon> Settings
                </b-nav-item>
                <b-nav-item disabled> Disabled </b-nav-item>
            </b-nav>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name: 'NavBar',
    props: {
        msg: String
    },
    methods: {
        open: function () {
            this.$refs.navB.classList.add("out");
        },
        close: function () {
            this.$refs.navB.classList.remove("out");
        }
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->

<style scoped>
.overflow-prev {
    max-height: 50vh;
    overflow-y: scroll;
    text-align: left;
    margin-top: 20px;
}

.nav-box {
    width: 200px;
    position: fixed;
    top: 0px;
    padding-left: 5px;
    left: -170px;
    height: 100%;
    background: pink;
    z-index: 10;
    transition: 1s all;
    box-shadow: 0px 1px 5px grey;
}

.circle {
    display: inline-block;
    width: 100px;
    height: 100px;
    border: 3px solid lightcoral;
    background-image: url('/img/logo.png');
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}

.out {
    left: 0px;
    /* background: green;*/
}

.nav-box .nav-menu-btns {
    z-index: 400;
    position: relative;
    top: 40%;
    transform: translateY(-50%);
    left: 0;
}
</style>
