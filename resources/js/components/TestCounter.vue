<template>
    <div class="container counter-std" id="TestCounter">
        <Button btn-text="'Hi from Test Application'"></Button>
        <h1>Counter model 1 </h1>
        <div  :class="classObject" id="counter-el">{{ count }}</div>
        <button id="counter-btn" v-on:click="count=count+1">Increment</button>
        <button id="counter-btn" v-on:click="count=count-1">Increment</button>
        <button id="multiply-btn" v-on:click="count=count * 2">multiply</button>
        <button id="dissolve-btn" v-on:click="count=count / 2">dissolve</button>
    </div>
</template>

<script>

export default {
    name: "TestCounter",

    data() {
        return {
            count: 0,
            isActive: true,
            hasError:false
        }
    },
    mounted() {
        console.log('Component mounted.')
    },
    computed: {
        classObject:function () {
            return {
                is_zero: this.count===0,
                'big-number': this.count > 25,
            }
        }},
};
</script>

<style scoped>
.counter-std {
    color: navy;
}

.is_zero{
    color:yellowgreen;
}
.big-number{
    font-size: 125%;
    color:rebeccapurple;
}
</style>
