<template>
    <div>
        <table>
            <tr v-for="q in questions">
            <question-lonely :question="q"></question-lonely>
            </tr>

        </table>
<!--        <button class="btn-danger" @click="endTest()">End test and check answer</button>-->
    </div>
</template>

<script>

import QuestionLonely from "./QuestionLonely";

export default {
    name: "QuestionsList",
    components: {QuestionLonely},
    data() {
        return {
            questions: {},
            answer:{},
        }
    },

    mounted() {
        axios.get('/api/questions')
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
    methods:{

}
}
</script>

<style scoped>


</style>
