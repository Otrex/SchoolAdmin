<template>
 <div>
            <div class="mt-3 resize-img" v-if="fileType === 'img'">
                <img :src="imgsrc" />
            </div>
            <b-form-file v-model="file1" :state="Boolean(file1)" ref="tag" @input="show()" placeholder="Choose a file or drop it here..." 
            drop-placeholder="Drop file here..."></b-form-file>
            
        </div>
</template>

<script>
export default {
    name: 'FileInput',
    props : {
        model: Object,
        fileType: String
    },
    methods: {
        show(){
            this.$emit("input", this.testfiletype(this.file1))
        },
        testfiletype(name){
            var v, x;
            name = name.name.split(".");
            v = name.length > 1 ? name[1].toLowerCase() : false;
            if (this.fileType === "img")
            {
                x = v === "png" || v === "jpg" || v === "jpeg";
                if (x) {
                    this.imgsrc = URL.createObjectURL(this.file1);
                    return this.file1;
                }
            }
            if (this.fileType === "pdf")
            {
                if (v === "pdf") return this.file1
            }

        }
    },
    data: () => {
      return {
        file1: null,
        imgsrc: null
      }
    },
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->

<style scoped>
.resize-img img {
    width: 100%;
    height:auto;
}
</style>
