const { createApp } = Vue;

createApp({
    data() {
        return {
            movies: {},
        }
    },
    created() {

        axios
            .get('http://localhost/php-oop-1/Server/api.php')
            .then(response => {
                this.movies = response.data;
            })
            .catch(error => {
                console.error('Error server:', error);
            });
    },
}).mount('#app');