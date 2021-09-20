<template>
    <main>
        <p class="m-3">Pagina corrente: {{ currentPage }}.
            <br> Ultima pagina : {{ lastPage }}.
        </p>
        <div class="row">
            <div class="col-sm-6" v-for="post in posts" :key="post.id">
                <div class="card m-3">
                    <div class="card-body">
                        <h5 class="card-title"> {{ post.title }} </h5>
                        <p class="card-text"> {{ post.content }} </p>
                        <a href="#" class="btn btn-primary">Dettagli</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
export default {
    name: "Main",
    data() {
        return {
            chiamatApi : 'http://localhost:8000/api/posts',
            posts: [],
            currentPage : 1,
            lastPage: null,
        }

    },
    created(){
        this.getPosts();
    },
    methods: {
        getPosts() {
            axios.get(this.chiamatApi)
                 .then(response => {
                     this.currenPage = response.data.results.current_page;
                     this.lastPage = response.data.results.last_page;
                 })
                 .catch();
        }
    }
}
</script>

<style lang="scss" scoped>

</style>