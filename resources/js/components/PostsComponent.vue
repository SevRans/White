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
        <textarea class="form-control bordered" aria-label="With textarea" v-model="post.text"></textarea>
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
                    location.href ='/'
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
div[class="container"]{
    margin:auto;
}
div[class="input-group"]{
    margin:20px;
}
button[type="submit"]{
    margin-bottom: 140px;
}
textarea [class="form-control"]{
    border-color: #1a1e21;
    margin-top:20px ;
}
span [class="input-group-text"]{
    border-color:#1a1e21;
    background-color: #bebebf;
}
input [type="text"]{
    margin: 20px;
}
button {
    max-width: 50px;
    margin: 20px auto;
    text-align: center;
    padding: 8px;
    border-radius: 10px;
}
</style>
