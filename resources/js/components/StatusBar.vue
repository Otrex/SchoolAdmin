<template>
<div class="status">
    <div class="p-30px">
        <b-navbar toggleable="lg">
            <b-navbar-brand href="#"> School MGT </b-navbar-brand>

            <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

            <b-collapse id="nav-collapse" is-nav>
                <b-navbar-nav>
                    <b-nav-item href="#">Link</b-nav-item>
                    <b-nav-item href="#" disabled>Disabled</b-nav-item>
                </b-navbar-nav>

                <!-- Right aligned nav items -->
                <b-navbar-nav class="ml-auto">
                    <b-nav-form>
                        <b-form-input size="sm" class="mr-sm-2" placeholder="Search"></b-form-input>
                        <b-button size="sm" class="my-2 my-sm-0" type="submit">Search</b-button>
                    </b-nav-form>

                    <setting-btn />

                    <b-nav-item-dropdown right>
                        <!-- Using 'button-content' slot -->
                        <template v-slot:button-content>
                            <b-icon icon="person-fill"></b-icon>
                        </template>
                        <b-dropdown-item href="#">
                            Pay Homage
                        </b-dropdown-item>
                        <hr>
                        <b-dropdown-item href="../logout">Sign Out</b-dropdown-item>
                    </b-nav-item-dropdown>
                </b-navbar-nav>
            </b-collapse>
        </b-navbar>
    </div>
</div>
</template>

<script>
import SettingBtn from "./statusbar/SettingBtn.vue";

export default {
    name: 'StatusBar',
    components: {
        SettingBtn
    },
    props: {
        msg: String
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->

<style scoped>
.status {
    position: absolute;
    top: 0px;
    z-index: 5;
    width: 100%;
    box-shadow: 0px 1px 5px grey;
}

.p-30px {
    padding: 0 40px;
    background: pink;
}
</style>
