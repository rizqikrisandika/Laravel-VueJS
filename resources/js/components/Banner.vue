<template>
  <div class="banner">
    <div class="row mt-5 flex-column-reverse flex-lg-row flex-md-row">
      <div class="col-12 col-sm-12 col-md-6 col-lg-6">
        <div class="d-flex h-100">
          <div class="justify-content-center align-self-center">
            <h2><strong>Gadget News</strong>
                <br>
                Always Up to Date
            </h2>
            <router-link class="btn btn-primary" :to="{ name: 'Articel' }">Articel</router-link>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-6 col-lg-6">
        <img src="../assets/articel.svg" width="100%" alt="">
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Banner",
};
</script>

<style>
</style>
