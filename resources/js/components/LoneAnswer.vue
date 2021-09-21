<template>

    <div class="container">

        <table class="table table-bordered">
            <tr>
                <th colspan="3">
                    {{ question.question }}
                </th>

            </tr>
            <tr>
                <td>
                    <span>{{ postedOn(question) }}</span>
                </td>
            </tr>
            <tr v-for="an in question.answers">
                <td>
                    <!--                    <span :class="{ active: isActive }">{{ an.text | capitalize }}</span>-->
                    <p v-bind:class="[isRight(an.value) ? 'right' :'']">
                        <span v-if="an.value ===1"> <i class="far fa-check-circle"></i></span>
                        {{ an.text | capitalize }}
                        <!--                        &lt;!&ndash;                        <span v-bind:class="[isActive ? 'lose-r' : 'win-r']">{{ ( an.value===0 ?'Loser':'Ok') }}</span>&ndash;&gt;-->
                    </p>

                    <!--                     <span v-bind:class="[isActive ? 'lose-r' : 'win-r']">{{ ( an.value===0 ?'Wrong':'right') }}</span>-->
                    <!--<span>{{an.variant}}</span><i class="far fa-check-circle"></i> {{ an.text | capitalize }}-->
                </td>
            </tr>
        </table>
    </div>
</template>

<script>
import axios from "axios";
import moment from "moment";

export default {
    name: "LoneAnswer",
    data() {
        return {
            now: '',
            value: '',
            // isRight: false,
            isHidden: true

        }
    },
    props: {
        // id: Number,
        question: Object,
    },
    filters: {
        capitalize: function (v) {
            if (!v) return ''
            v = v.toString()
            return v.charAt(0).toUpperCase() + v.slice(1)
        }
    },
    mounted() {
        console.log('mounted');
    },
    // watch: {
    //     value: function (an) {
    //         if (an.value === 1) {
    //             this.isRight = true;
    //         } else {
    //             this.isRight = false;
    //         }
    //     }
    // },

    methods: {
        isRight(value){
            return value===1
        },
        // showAns(an) {
        //     // this.value = this.question.answers.value;
        //     this.isActive = an.value === 1;
        //     console.log(this.value)
        // },

        postedOn(question) {
            return moment(question.created_at).fromNow();
            // return moment(question.created_at).format("dddd, MMMM Do YYYY, h:mm:ss a");
        }
    },

}
</script>

<style scoped>


.right {
    font-weight: bold;
    color:#38c172;
    /*color: red;*/
}
span{
    font-weight: bold;
}

</style>
