<template>
    <div class="container">
<!--        <h1 v-if="1==2">Vue восхитителен!</h1>-->

        <h3>{{message}}</h3>
        <h1>Your Score</h1>
        <h3>Alert:{{ msg }}</h3>
        <h2 id="score-el">{{ count }}</h2>
        <h2 id="score-el">{{ start }}</h2>
        <button id="increment-btn" @click="increment()">Increment</button>
        <button :class="classObject" id="Score-btn" @click="add()" :disabled="count < 1">Add</button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            msg: "You work on testing page",
            count: 0,
            sum: 35,
            getRandomNumber : Math.floor(Math.random()*8)+1,
        }
    },

   // props:{
   //      5 :{
   //          type:Number,
   //          required:5,
   //          default: 0
   //      }

    props: {
        inc: Number ,
        start: Number,
        message:String,
    },


    mounted() {
        //this.count = parseInt(this.test321);
        this.count = this.start;

        console.log('Component mounted.')

    },
    computed: {
        classObject: function () {
            return {
                active:true,
                'text-danger': this.count === 0,
            }

        }},
    methods:
        {
            // getRandom() {
            //     getRandomNumber : Math.floor(Math.random()*8)+1
            //     return getRandomNumber
            // },
            add() {
                // alert("test")
                this.count = this.count - this.getRandomNumber;
                console.log( this.getRandomNumber)
            },
            increment() {
                this.count = this.count + this.getRandomNumber
                // if (this.count < 10) {
                //     this.count = this.count + 1
                //     console.log("text")
                // } else if (this.count === 10) {
                //     this.count = this.count + 10
                //     console.log(count)
                // } else {
                //     this.count = this.count + 5
                //     console.log("Else")
                // }
                // this.count=this.count+10
            },
        }
}
</script>

<style scoped>
{
    background-color: goldenrod  ;
    color: navy  ;
}
.text-danger{
    background-color:aquamarine;
    color:navy;
}

</style>
