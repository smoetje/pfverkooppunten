<template>
  <div>
    <div class="form-group">
      <router-link :to="{ name: 'indexVerkooppunt' }" class="btn btn-primary">Back</router-link>
    </div>

    <div class="card">
      <div class="card-header">Creëer nieuw verkooppunt</div>
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
            <button class="btn btn-success">Create</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    data: function () {
      return {
        verkooppunt: {
          naam: '',
          adres: '',
          postcode: '',
          stad: '',
          country: 'Belgium',
          tel: '',
          email: '',
          aanbrenger: ''
        }
      }
    },
    methods: {
      saveForm() {
        let app = this;
        let newVerkooppunt = app.verkooppunt;
        console.log("posting:");
        console.log(newVerkooppunt);
        axios.post('/verkooppunten', newVerkooppunt)
          .then(function (resp) {
            console.log("Record saved, redirecting...")
            app.$router.replace({ name: 'indexVerkooppunt' }); // Navigates without pushing a new history entry (anders zelfde als push)
            // app.$router.push({ path: '/' });
          })
          .catch(function (resp) {
            console.log(resp);
            alert("Could not create your verkooppunt");
          });
      }
    }
  }
</script>
<style scoped>

</style>