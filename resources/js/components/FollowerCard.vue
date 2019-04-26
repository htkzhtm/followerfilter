<template >
<div>
    <label for="Followers">Followers</label>
    <input type="text" class="form-control" id="Followers" v-model="followerNumber" placeholder="Enter number">  
    <transition-group name="fade" class="row" tag="div">
        <div class="col-md-4" v-for="follower in followerFilter" :key="follower.id">
            <div class="card">
                <img class="card-img-top vuejs" :src="follower.profile_image_url" alt="Card image cap">
                <div class="card-block p-3">
                    <h4 class="card-title"><i class="fab fa-twitter"></i> {{ follower.name }}</h4>
                    <h6 class="card-subtitle mb-2"><span class="text-muted nickname">@{{ follower.screen_name }}</span></h6>
                    <p class="card-text">{{ follower.description }}</p>
                    <h5 class="card-title"><i class="fab fa-twitter-square"></i>Tweets {{ follower.statuses_count }}</h5>
                    <h5 class="card-title"><i class="fas fa-user"></i>Follow {{ follower.friends_count }}</h5>
                    <h5 class="card-title"><i class="fas fa-users"></i>Followers {{ follower.followers_count }}</h5>
                </div>
            </div>
        </div>
    </transition-group>
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
.col-md-4 {
    margin-bottom: 20px;
    display: inline-block;
}

.fade-enter-active {
    transition: opacity .5s;
}

.fade-leave-active {
    transition: opacity .5s;
    position: absolute;
}

.fade-enter, .fade-leave-to {
  opacity: 0
}

.fade-move {
  transition: transform 1s;
}
</style>
