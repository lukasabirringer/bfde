<template>
    <span>
        <a href="#" v-if="isFavorited" @click.prevent="unFavorite(beachcourt)">
            <i class="fa fa-heart"></i>
        </a>
        <a href="#" v-else @click.prevent="favorite(beachcourt)">
            <i class="fa fa-heart-o"></i>
        </a>
    </span>
</template>

<script>
    export default {
        props: ['beachcourt', 'favorited'],

        data: function() {
            return {
                isFavorited: '',
            }
        },

        mounted() {
            this.isFavorited = this.isFavorite ? true : false;
        },

        computed: {
            isFavorite() {
                return this.favorited;
            },
        },

        methods: {
            favorite(beachcourt) {
                axios.post('/favorite/'+beachcourt)
                    .then(response => this.isFavorited = true)
                    .catch(response => console.log(response.data));
            },

            unFavorite(beachcourt) {
                axios.post('/unfavorite/'+beachcourt)
                    .then(response => this.isFavorited = false)
                    .catch(response => console.log(response.data));
            }
        }
    }
</script>