<template>

    <div class="container">
        <div>
<!--            {{user.name}}-->
        </div>
        <img src="/770826-200.png" class="rounded float-left" alt="...">
    </div>
</template>

<script>
export default {
    name: "Account",
    data(){
        return{
            user:{}
        }
    },

    mounted() {
        // axios.get('/account')
        //     .then((response) => {
        //         // handle success
        //         //console.log(response);
        //         this.user = response.data
        //     })
        //     .catch(function (error) {
        //         // handle error
        //         console.log(error);
        //     })
        //     .then(function () {
        //         // always executed
        //     });
    }
}
</script>

<style scoped>

</style>
