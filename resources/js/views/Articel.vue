<template>
  <div class="articel">
    <div class="articel-banner mt-2">
        <h2 class="text-center">Articel</h2>
    </div>
    <CardArticel/>
  </div>
</template>

<script>
import CardArticel from '../components/CardArticel.vue';

export default {
  name: "Articel",
  components: {
      CardArticel,
  }
};
</script>

<style>
</style>
