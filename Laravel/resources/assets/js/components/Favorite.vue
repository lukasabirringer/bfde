<template>
    <span>
        <a href="#" v-if="isFavorited" @click.prevent="unFavorite(beachcourt)">
            <span class="beachcourt-summary__favorite icon icon--heart"></span>
        </a>
        <a href="#" v-else @click.prevent="favorite(beachcourt)">
            <span class="beachcourt-summary__favorite icon icon--heart-o"></span>
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