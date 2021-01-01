<template>
    <div class="home">
        <Banner/>
        <div class="text-center mt-4">
            <h2>Hot <strong>Articel</strong></h2>
        <CardArticel/>
        </div>
    </div>
</template>

<script>
import Banner from '../components/Banner.vue'
import CardArticel from '../components/CardArticel.vue'

export default {
    name: "Home",
    components: {
        Banner,
        CardArticel,
    }
}
</script>

<style>

</style>
