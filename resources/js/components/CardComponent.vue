<template>
    <div class="container">
        <div class="card">
            <div class="card-body" v-for="p in posts">
                <h5 class="card-title">{{ p.title| capitalize }}</h5>
                <h6 class="card-subtitle mb-2 text-muted"><span>{{ p.user.name }}</span> ; {{ p.user.email }}</h6>
                <p class="card-text">{{ p.body }}</p>
                <a href="#" class="card-link">Some link</a>
                <a href="#" class="card-link">Another link</a>
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
span {
    color: black;
    text-align: center;
    font-weight: bold;
}

/*image{*/
/*    font-weight: 50;*/
/*    max-width: 25px;*/
/*    max-height: 25px;*/
/*}*/
</style>
