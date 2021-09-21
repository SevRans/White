<template>
    <div class="container">

            <a v-for="q in questions">
                <lone-answer :question="q"></lone-answer>
            </a>

    </div>
</template>

<script>
import axios from "axios";
import moment from "moment";
import LoneAnswer from "./LoneAnswer";

export default {
    name: "AnswersListComponent",
    components:{LoneAnswer},
    data() {
        return {
            questions:{},
            answer:{}
        }
    },
    mounted() {
        axios.get('/questions')
            .then((response) => {
                // handle success
                //console.log(response);
                this.questions = response.data
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            })
            .then(function () {
                // always executed
            });

    },
}
</script>

<style scoped>

</style>
