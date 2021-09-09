<template>
    <div class="container">
<!--        <p>Question is: {{ question }}</p>-->
        <input v-model="question" placeholder="Area for questions"><button class="button btn-success submit" v-on:click="send()">Save</button>
        <p>Question is: {{ question.quest }}</p>
<!--        <button class="button btn-success submit" v-on:click="send()">Save</button>-->
<!--        <input v-model="ans" placeholder="Area for answer">-->
<!--        <p>Answer is: {{ ans }}</p>-->

        <table>
            <tbody>
            <tr v-for="a in ans">
                <td><input type="text" v-model="ans.text" placeholder="Area for answer"></td>
                <td><input type="text" v-model="ans.variant" placeholder="Area for answer's variant"></td>
                <td><button class="button btn-danger" @click="removeElement(ans);">Remove</button></td>
            </tr>
            </tbody>
        </table>
        <div>
            <button class="button btn-primary" @click="addRow">Add row</button>


        </div>


    </div>
</template>

<script>

import axios from 'axios';

export default {
    name: "TestCreate",
    // components:{AnsItem},
    data() {

        return {
            question:{
                quest:''
            },
            ans: [
                {
                    id: Number,
                    text: String,
                    variant: Number,
                    value: Number,
                },
                {
                    id: Number,
                    text: String,
                    variant: Number,
                    value: Number,
                }
            ],
            // rows: [
            //     {title: "XEngine for Sale", description: "An application"},
            //     {title: "There is no place like 127.0.0.1", description: "Best tool for your security."}
            // ]
        }
    },
    methods: {
        send() {
            axios.post('/api/questions', this.question.quest)
                .then((response) => {
                    //Perform Success Action
                    console.log('success')
                })
                .catch((error) => {
                    // error.response.status Check status code
                    console.log(error);
                }).finally(() => {
                //Perform action in always
            })
        },
        addRow: function () {
            this.ans.push({id: "", text: "",variant:"",value:""});
        },
        removeElement: function (ans) {
            var index = this.ans.indexOf(ans);
            this.ans.splice(index, 1);
        },
        // setFilename: function (event) {
        //     this.filename = event.target.name;
        // }
    }
}

</script>

<style scoped>
button{
    border-left-lenght:120px ;
    border-right-lenght:120px;

    margin:10px;
}
{

    background-color:aqua;
    color:red;
    border-color:greenyellow;
}
</style>
