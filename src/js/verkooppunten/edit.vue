<template>
  <div>
    <div class="form-group">
      <router-link :to="{ name: 'indexVerkooppunt' }" class="btn btn-primary">Back</router-link>
    </div>

    <div class="card">
      <div class="card-header">Aanpassen verkooppunt</div>
      <div class="card-body">
        <form v-on:submit="saveForm()">
          <div class="form-group">
            <label for="naam">Naam</label>
            <input type="text" id="naam" v-model="verkooppunt.naam" class="form-control">
          </div>
          <div class="form-group">
            <label for="adres">adres</label>
            <input type="text" id="adres" v-model="verkooppunt.adres" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="postcode">Postcode</label>
            <input type="text" id="postcode" v-model="verkooppunt.postcode" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="stad">stad</label>
            <input type="text" id="stad" v-model="verkooppunt.stad" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="tel">Telefoon nr</label>
            <input type="text" id="tel" v-model="verkooppunt.tel" class="form-control">
          </div>
          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" id="email" v-model="verkooppunt.email" class="form-control">
          </div>
          <div class="form-group">
            <label for="aanbrenger">Aanbrenger</label>
            <input type="text" id="aanbrenger" v-model="verkooppunt.aanbrenger" class="form-control">
          </div>
          <div class="form-group">
            <button class="btn btn-success">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    mounted() {
      let app = this;
      let id = app.$route.params.id;
      app.id = id;
      axios.get('/verkooppunten/' + id)
        .then(function (resp) {
          app.verkooppunt = resp.data;
        })
        .catch(function () {
          alert("Could not load your verkooppunt")
        });
    },
    data: function () {
      return {
        id: null,
        verkooppunt: {
          naam: '',
          adres: '',
          postcode: '',
          stad: '',
          country: 'Belgium',
          tel: '',
          email: '',
          aanbrenger: '',
          coord: null
        }
      }
    },
    methods: {
      saveForm() {
        let app = this;
        let newVerkooppunt = app.verkooppunt;
        newVerkooppunt.coord = null; // Reset coordinates
        axios.patch('/verkooppunten/' + app.id, newVerkooppunt)
          .then(function (resp) {
            app.$router.replace('/admin/verkooppunten');
          })
          .catch(function (resp) {
            console.log(resp);
            alert("Could not create your verkooppunt");
          });
      }
    }
  }
</script>