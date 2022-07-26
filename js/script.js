var app = new Vue (
    {
        el: '#root',
        data: {
            albums: []
        },
        mounted() {
            axios.get('http://localhost:8888/php-ajax-dischi/api.php').then((response) => {
                this.albums = response.data;
            })
        }
    }
)