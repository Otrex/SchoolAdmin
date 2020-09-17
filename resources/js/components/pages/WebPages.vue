<template>
<div>
    <div class="new-btn-box">
        <b-button v-on:click="newSite = true">+ new Site</b-button>
    </div>
    <div class="forms" v-show="newSite">
        <div role="group">
            <label for="input-live">Name:</label>
            <b-form-input id="input-live" v-model="form.name" :state="nameState" aria-describedby="input-live-help input-live-feedback" placeholder="Enter your name" trim></b-form-input>

            <!-- This will only be shown if the preceding input has an invalid state -->
            <b-form-invalid-feedback id="input-live-feedback">
                Enter at least 3 letters
            </b-form-invalid-feedback>

            <!-- This is a form text block (formerly known as help block) -->
            <b-form-text id="input-live-help">Your full name.</b-form-text>
        </div>
        <div>
            <FileInput v-model="form.file" file-type="img"/>
        </div>

        <div>
            <b-button v-on:click="register()" variant="primary"> Register Site </b-button>
        </div>

        <div v-show="isCreated" >
            <b-form-textarea
            id="textarea-auto-height"
            placeholder="Auto height textarea"
            rows="3"
            @change = "html.body + 'avvv'"
            v-model = "html.body"
            max-rows="8"
        ></b-form-textarea>
        </div>
    </div>

</div>
</template>

<script>
import FileInput from "./../general/FileInput.vue";
export default {
    name: 'Webpages',
    props: {
        msg: String
    },
    components: {
        FileInput
    },
    computed: {
        nameState() {
            return this.form.name.length > 2 ? true : false
        }
    },
    methods: {
        printr: (e) => {
            console.log(e)
            return e.name
        },

        register() {
            alert(JSON.stringify(this.form))

            this.isCreated = true
        }
    },
    data: function () {
        return {
            newSite: false,
            form : {name: "mySite"},
            isCreated : false,
            html : {body: "<body>\n\t\n\n</body>"}
        }
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->

<style scoped>
.new-btn-box {
    background: pink;
    padding: 20px;
}

.forms {
    padding: 0px 20%;
}
</style>
