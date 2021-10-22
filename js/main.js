const app = new Vue ({
    el: '#root',
    data: {
        collection: [],
        genreSelected: ""
    },
    created() {
        axios
            .get('http://localhost/21-10-21%20php-ajax-dischi/php-ajax-dischi/api/index.php')
            .then((res) => {
                this.collection = res.data;
            })
    },
    methods: {
        CollectionOnChange: function() {
            axios
            .get('http://localhost/21-10-21%20php-ajax-dischi/php-ajax-dischi/api/index.php', {
                params: {
                    "genre": this.genreSelected
                }
            })
            .then((res) => {
                this.collection = res.data;
            })         
            return this.collection    
        }
    }
})