<template>
    <div class="container">
        <table class="table-bordered">
            <tr >
                <td>
                    <span>{{ postedOn(question) }}</span>
                </td>
            </tr>
            <tr>
                <th colspan="3">
                    {{ question.question }}
                </th>
            </tr>

            <tr>
                <td v-for="an in question.answers">
                    <input type="checkbox" class="form-check-input" name="test" v-on:click="chois(an)" :value="an.id" v-model="checkedAnswers">
                    <label :id="an.id">{{ an.text | capitalize }}<br></label>
                </td>
            </tr>

            <tr>
                <td colspan="3">
                    <p v-if="show" v-bind:class="[isWrong ? 'lose' : 'win']"> Picked:{{ picked }}
                        <span v-bind:class="[isWrong ? 'lose-r' : 'win-r']">{{ ( result===0 ?'Loser':'Ok') }}</span>
                    </p>

                    <button class="btn-warning" @click="endTest">Check answer</button>
                </td>
            </tr>
        </table>



    </div>
</template>

<script>
import axios from "axios";
import moment from "moment";

export default {
    name: "QuestionLonely",
    data() {
        return {
            // question: {},
            answer: {},
            picked: '',
            show: false,
            result:'',
            isWrong:false,
            checkedAnswers: []
        }
    },
    props: {
        // id: Number,
        question: Object,

    },

    mounted() {
        // axios.get('/api/show/question/' +
        //     this.id)
        //     .then((response) => {
        //         // handle success
        //         //console.log(response);
        //         this.question = response.data
        //     })
        //     .catch(function (error) {
        //         // handle error
        //         console.log(error);
        //     })
        //     .then(function () {
        //         // always executed
        //     });
    },

    watch: {
        result: function (val) {
            if (val===1){
                this.isWrong = false
            } else{
                this.isWrong = true
            }
        },
    },
    filters: {
            capitalize: function (v) {
                if (!v) return ''
                v = v.toString()
                return v.charAt(0).toUpperCase()  + v.slice(1)
            }
        },

    methods: {
        chois(an) {
            // let cv= document.getElementById('Check').value
            // if(cv === true ){
            this.picked = an.id
            this.show = false
            // }else{
            //     console.log('variant unselected')
            // }
            console.log('variant selected');
            // return this.answer.text

        },
        endTest() {
            axios.post('/questions/check', {
                question_id: this.question.id,
                answers_id: this.checkedAnswers
            })
                .then((response) => {
                    //Perform Success Action
                    console.log(response)
                    this.result = response.data
                    this.show = true

                })
                .catch((error) => {
                    // error.response.status Check status code
                    console.log(error);
                }).finally(() => {
                //Perform action in always
            })
        },
        postedOn(question){
             return moment(question.created_at).fromNow();
           // return moment(question.created_at).format("dddd, MMMM Do YYYY, h:mm:ss a");
        }
    }

}

</script>


<style scoped>

{


}
span {
    margin: 20px;

}

table {
    bordercolor: "#343a40";
    width: 450px;
    /*display: inline-block;*/
    font-size: 1em;
    /*text-transform: uppercase;*/
    text-align: center;
    letter-spacing: 1px;
    margin-right: 150px;
    margin-top: 30px;
    margin-left: 250px;
}

button{
    max-width: 160px;
    margin:  auto;
    text-align: center;
    padding: 4px;
    border-radius: 10px;
}
.win{
    color:aqua;
}

.lose{

    color:red;
}

.win-r {
    font-size: larger;
}

.lose-r {
    font-size: smaller;
}

</style>
