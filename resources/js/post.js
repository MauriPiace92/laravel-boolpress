const { default: Axios } = require("axios");

var app = new Vue({
    el: '#root',

    data: {
        title: 'Lista Vue dei Post',
        posts: [],
    },
    mounted() {
        axios.get('http://127.0.0.1:8000/api/posts')
        .then(result => {

            this.posts=result.data.posts;
        });
    }
});