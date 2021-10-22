const app = new Vue ({
    el: '#root',
    data: {
        collection: []
    },
    created() {
        axios
            .get('http://localhost/21-10-21%20php-ajax-dischi/php-ajax-dischi/api/index.php')
            .then((res) => {
                this.collection = res.data;
            })
    }
})