const app = new Vue ({
    el: '#root',
    data: {
        collection: [],
        genreSelected: "",
        genres: []
    },
    created() {
        axios
            .get('http://localhost/21-10-21%20php-ajax-dischi/php-ajax-dischi/api/index.php', {
                params: {
                    action: "getGenres"
                }
            })
            .then((res) => {
                this.genres = res.data;
            })

            axios
            .get('http://localhost/21-10-21%20php-ajax-dischi/php-ajax-dischi/api/index.php', {
                params: {
                    action: "albums"
                }
            })
            .then((res) => {
                this.collection = res.data;
            })
    },
    methods: {
        CollectionOnChange: function() {
            axios
            .get('http://localhost/21-10-21%20php-ajax-dischi/php-ajax-dischi/api/index.php', {
                params: {
                    action: "filterGenre",
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