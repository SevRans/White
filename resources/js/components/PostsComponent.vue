<template>
    <div class="container">
        <div>
            <label>Title:</label>
            <input type="text" required v-model="post.title">

            </div>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">Post textarea</span>
        </div>
        <textarea class="form-control" aria-label="With textarea" v-model="post.text"></textarea>
    </div>
        <button type="submit" class="button btn-success "  @click="send()">Save</button>
    </div>
</template>

<script>
import axios from "axios";


export default {
    name: "PostsComponent",
    // props:{
    //     username:String,
    // },
    data(){
        return{
            post:{
                text:'',
                title:'',

            }
        }
    },

    methods:{
        send() {
            axios.post('/posts/store', {
                title: this.post.title,
                text:this.post.text,

            })
                .then((response) => {
                    console.log(response)
                    location.href ='/home'
                })
                .catch((error) => {
                    console.log(error.response.data);
                }).finally(() => {

            })
        },
    }
}
</script>

<style scoped>
body{

}
</style>
