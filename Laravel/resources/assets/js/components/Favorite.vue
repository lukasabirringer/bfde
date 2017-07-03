<template>
    <span>
        <a href="#" v-if="isFavorited" @click.prevent="unFavorite(beachcourt)">
            <span class="tooltip beachcourt-summary__favorite icon icon--heart"
            title="Dieses Feld befindet sich schon in deinen Favoriten" ></span>
        </a>
        <a href="#" v-else @click.prevent="favorite(beachcourt)">
            <span class="tooltip beachcourt-summary__favorite icon icon--heart-o" title="Füge dieses Feld zu deinen Favoriten hinzu"></span>
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