<template >
    <div class="row">
        <div class="col-md-4" v-for="follower in followers" :key="follower.id">
            <div class="card">
                <img class="card-img-top vuejs" :src="follower.profile_image_url" alt="Card image cap">
                <div class="card-block p-3">
                    <h4 class="card-title"><i class="fab fa-twitter"></i> {{ follower.name }}</h4>
                    <h6 class="card-subtitle mb-2"><span class="text-muted nickname">{{ follower.screen_name }}</span></h6>
                    <p class="card-text">{{ follower.description }}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            followers: Array
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
