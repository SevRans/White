<template>
<div>
    <div>
        {{name2}}
    </div>
    <div>
        {{id}}
    </div>
    <div>
        {{active}}
    </div>
    <div><div v-for="child in childrens">
        <span v-if="child.man"> {{child.name}}</span>
    </div>
    </div>
    <div>
        {{variants2.test2[1]}}
    </div>
    <div>
        {{created}}
    </div>

</div>
</template>

<script>
export default {
    name: "TypesTest",

    props:{
        // name:String,
        name2:String,
        id:Number,
        active: Boolean,
        childrens:Array,
        variants2:Object,
        created:Date,
    }
}

</script>

<style scoped>

</style>
