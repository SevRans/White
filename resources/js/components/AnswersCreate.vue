<template>
    <div class="container">
        <select v-model="questions" v-for="q in questions">
            <option value="q.id">{{ q.question }}</option>
            <p>What change:{{q.question}}</p>
        </select>

        <table>

            <tbody>
            <tr v-for="a in ans">
                <td><input type="text" v-model="ans.text" placeholder="Area for answer"></td>
                <td><input type="text" v-model="ans.variant" placeholder="Area for answer's variant"></td>
                <td>
                    <button class="button btn-danger" @click="removeElement(ans);">Remove</button>
                </td>
            </tr>
            </tbody>
        </table>
        <div>
            <button class="button btn-primary" @click="addRow">Add row</button>
        </div>
    </div>
</template>

<script>import axios from 'axios';

export default {
    name: "AnswersCreate",
    // components:{AnsItem},
    data() {

        return {
            questions: {},
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
    methods: {
        send() {
            axios.post('/test/create', this.question.quest)
                .then((response) => {
                    //Perform Success Action

                })
                .catch((error) => {
                    // error.response.status Check status code
                    console.log(error);
                }).finally(() => {
                //Perform action in always
            })
        },
        addRow: function () {
            this.ans.push({id: "", text: "", variant: "", value: ""});
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

</style>
