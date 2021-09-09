<template>
    <div class="container-md" id="QuestionCreate">
        <div><p>Question is: {{ question }}</p></div>
<!--        <form method="post" action="/questions/store" @submit.prevent="send">-->
            <div class="control">
                <input type="text" required v-model="question" placeholder="Area for questions">

                <button  class="button btn-success "  @click="send()">Save</button>

                <div>
                    <p>Created Data:</p>
                </div>

                <div v-for="answer in answers">

                    <span>Answer:{{ answer.text}} , Variant:{{ answer.variant}},Value:{{ answer.value}}</span>
                </div>
<span class="error">{{error}}</span>
                <div>
                    <em>
                    <label>Answer:</label>
                    <input type="text" required v-model="answer.text">

<!--                    <label>Variant:</label>-->
<!--                    <input type="number" required v-model="answer.variant">-->
<!--                    <input type="radio" id="one" value="0" v-model="answer.value">-->
<!--                    <label for="one">Wrong</label>-->
<!--                    <br>-->
<!--                    <input type="radio" id="two" value="1" v-model="answer.value">-->
<!--                    <label for="two">Correct</label>-->
                        <input type="checkbox" v-model="answer.value"
                            true-value="1"
                            false-value="0"
                        >
                    <label >Correct?</label>
<!--                    <label>Value:</label>-->
<!--                    <input type="int" required v-model="answer.value">-->
                    </em>
                    <button class="button btn-primary" v-on:click="addAnswer()"><span class="fa fa-plus-circle"></span>
                    </button>

                    <button class="button btn-danger" v-on:click="removeAnswer()"><span class="fa fa-minus-circle"></span>
                    </button>
                </div>
            </div>
<!--        </form>-->
        <div>
<!--                        <button type="button" class="btn-warning" @click="showModal">-->
<!--                            Open Modal!-->
<!--                        </button>-->
<!--            <modal-component v-show="isModalVisible" @close="closeModal"/>-->
        </div>
    </div>
</template>

<script>
import axios from "axios";
import ModalComponent from "./ModalComponent";

export default {
    name: "QuestionCreate",
    components: {ModalComponent},

    data() {
        return {
            question: '',
            answer:{
                value:0,
                variant:0,
                text:''
            },
            answers: [],
            isModalVisible: false,
            resSum: '',
            error:'',
            isAvailable:false
        }

    },


    mounted() {

    },
    watch: {
        // resSum: function (res) {
        //     if (res === 0) {
        //         this.isModalVisible = true
        //     } else {
        //         location.href = this.resSum
        //     }
        // },
        // resSum:function(res){
        //     if(res ===0){
        //         this.error='Cannot accept that data'
        //     }else{
        //         this.error='Data accepted'
        //     }
        // }
    },
    computed: {

    },

    methods: {
        addAnswer() {
            let an = {...this.answer}
            this.answers.push(an)
        },
        removeAnswer() {
            let an = this.answer
            this.answers.pop(an)
        },
        send() {
            //this.answers = [this.answers.answer]

            axios.post('/questions/create', {
                question: this.question,
                answers: this.answers
            })
                .then((response) => {
                    //Perform Success Action
                    console.log(response)
                    if(response.data===0){
                        this.error='Cannot accept that data'
                    }
                    this.resSum = response.data
                })
                .catch((error) => {
                    this.errors = error.response.data
                    // error.response.status Check status code
                    console.log('tesrerror.response.data');
                    console.log(error.response.data);
                    this.error=error.response.data.message;
                }).finally(() => {
                //Perform action in always
            })
        },
        showModal() {
            this.isModalVisible = true;
        },


        closeModal() {
            this.isModalVisible = false;
        }
    },

}
</script>

<style scoped>
label {


    display: inline-block;
    margin: 25px 0 15px;
    font-size: 1em;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-width: bold;
}

span {

}

button {
    max-width: 50px;
    margin: 20px auto;
    background: grey;
    text-align: center;
    padding: 8px;
    border-radius: 10px;
}

button[type="submit"] {
    max-width: 120px;
    background-color: white;
    color: black;
    margin: auto;
    text-align: center;
    padding: 8px;
    border-radius: 10px;
    font-width: bold;
}
span[class='error']{
    color:red;

}

p {

    display: inline-block;
    font-size: 1em;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-width: bold;
    margin-right: auto;
    margin-top: 30px;
}

input {
    padding-bottom: 10px;
}
</style>
