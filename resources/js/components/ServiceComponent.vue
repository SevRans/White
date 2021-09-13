<template>
    <div class="container">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Please, write us your problem.</span>
            </div>
            <textarea class="form-control bordered" aria-label="With textarea" v-model="service.text"></textarea>
        </div>
        <button type="submit" class="button btn-success "  @click="send()">Save</button>
    </div>
</template>

<script>
export default {
    name: "ServiceComponent",
    data(){
return{
    service:{
        text:'',
    }
}
    }
}
</script>

<style scoped>
button {
    max-width: 50px;
    margin: 20px auto;
    text-align: center;
    padding: 8px;
    border-radius: 10px;
}
</style>
