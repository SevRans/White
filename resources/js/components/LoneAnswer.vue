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
            <tr>
                <td v-for="an in question.answers">
                    <span :class="{ active: isActive }">{{ an.text | capitalize }}</span>

                    <!--                    <span>{{an.variant}}</span><i class="far fa-check-circle"></i> {{ an.text | capitalize }}-->
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
            isActive: false,
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
    //      value:function(){
    //         this.value = this.question.answers.value
    //     }
    // },
    watch: {
        show: function () {
            this.value = this.question.answers.value
        },
        value: function (val) {
            if (val === 1) {
                this.isActive = true
            } else {
                this.isActive = false
            }
        },
    },

    methods: {
        postedOn(question) {
            return moment(question.created_at).fromNow();
            // return moment(question.created_at).format("dddd, MMMM Do YYYY, h:mm:ss a");
        }
    }

}
</script>

<style scoped>
.active {
    color: aquamarine;
}

</style>
