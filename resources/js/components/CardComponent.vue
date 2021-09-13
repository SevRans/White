<template>
    <div class="container">
        <div class="card" v-for="p in posts">
            <div class="card-header">
                <span>{{ p.user.name }}</span> ; {{ p.user.email }}
            </div>
            <div class="card-body" >
                <h5 class="card-title">{{ p.title| capitalize }}</h5>
                <p class="card-text">{{ p.body }}</p>
                <a href="/showApi" class="card-link">Show only</a>
                <a href="/" class="card-link">Homepage</a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "CardComponent",
    data() {
        return {
            posts: {},

        }
    },
    filters: {
        capitalize: function (v) {
            if (!v) return ''
            v = v.toString()
            return v.charAt(0).toUpperCase() + v.slice(1)
        }
    },
    mounted() {
        axios.get('/posts')
            .then((response) => {
                // handle success
                console.log(response);
                this.posts = response.data
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            })
            .then(function () {
                // always executed
            });

    }
}
</script>

<style scoped>
.card{
    border-radius:10px;
    margin-bottom:20px;
    background-color:whitesmoke ;
    border-color:#5c636a ;
}
span {
    margin-right: 15px;
    color:darkblue;
    text-align: center;
    font-weight: bold;
}

div[class="card-header"]{
    color:grey;
    background-color:#c1d2df;
}

/*image{*/
/*    font-weight: 50;*/
/*    max-width: 25px;*/
/*    max-height: 25px;*/
/*}*/
</style>
