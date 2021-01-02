<template>
  <div class="articelIndex">
    <div>
    <router-link class="btn btn-primary" :to="{ name:'ArticelCreate' }">+ Articel</router-link>
      <table class="table mt-3">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(articel, index) in articels" :key="articel.id">
            <th scope="row">{{ index+1 }}</th>
            <td>{{ articel.title }}</td>
            <td>{{ articel.content }}</td>
            <td>@mdo</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
export default {
  name: "ArticelIndex",
  data(){
      return{
          articels: {},
      }
  },
  created(){
      let url = 'http://127.0.0.1:8000/api/articels';
      axios
      .get(url)
      .then(response => {
          this.articels = response.data;
      });
  },
  methods:{
      deleteArticel(id)
      {
          this.$swal.fire({
          title: 'Are you sure delete this articel?',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtontext: 'Yes',
          cancelButtonText: 'No'
      }).then((result) => {
          this.$swal.fre({
              title: 'Success',
              text: 'Articel deleted successfully',
              icon: 'success',
              timer: 1000
          });
          let url = '/http://127.0.0.1:8000/api/articels/delete/${id}';
          axios
          .delete(url)
          .then(response => {
              this.articels.splice(this.articels.indexOf(id), 1);
          });
          console.log("Deleted articel with id ..." +id);
      });
      }
  }

};
</script>

<style>
</style>
