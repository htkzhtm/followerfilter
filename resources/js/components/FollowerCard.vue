<template >
<div>
    <label for="Followers">Followers</label>
    <input type="text" class="form-control" id="Followers" v-model="followerNumber" placeholder="Enter number">
    <div class="row">
        <div class="col-md-4" v-for="follower in followerFilter" :key="follower.id">
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
</div>
</template>

<script>
    export default {
        props: {
            followers: Array
        },
        data () {
            return {
                followerNumber: 0
            }
        },
        computed: {
            followerFilter () {
                return this.followers.filter((follower) => follower.followers_count >= this.followerNumber)
            },
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style>
#Followers {
    margin-bottom: 20px;
}
</style>
