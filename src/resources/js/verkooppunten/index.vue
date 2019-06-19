<template>
    <div>
        <div class="form-group">
            <router-link :to="{name: 'createVerkooppunt'}" class="btn btn-success">Creer nieuwe verkooppunt</router-link>
        </div>

        <div class="card">
            <div class="card-header">Verkooppunten overzicht</div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-responsive">
                    <thead>
                    <tr>
                        <th width="60">ID</th>
                        <th>Naam</th>
                        <th>Adres</th>
                        <th width="100">Postcode</th>
                        <th width="150">Stad</th>
                        <th width="150">Tel</th>
                        <th>E-mail</th>
                        <th>Aanbrenger</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="verkooppunt, index in verkooppunten">
                        <td>{{ verkooppunt.id }}</td>
                        <td>{{ verkooppunt.naam }}</td>
                        <td>{{ verkooppunt.adres }}</td>
                        <td>{{ verkooppunt.postcode }}</td>
                        <td>{{ verkooppunt.stad }}</td>
                        <td>{{ verkooppunt.tel }}</td>
                        <td>{{ verkooppunt.email }}</td>
                        <td>{{ verkooppunt.aanbrenger }}</td>
                        <td>
                            <router-link :to="{name: 'editVerkooppunt', params: {id: verkooppunt.id}}" class="btn btn-xs btn-primary">
                                Edit
                            </router-link>
                            <a href="#"
                               class="btn btn-xs btn-danger"
                               v-on:click="deleteEntry(verkooppunt.id, index)">
                                Delete
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                verkooppunten: []
            }
        },
        mounted() {
            var app = this;
            axios.get('/verkooppunten')
                .then(function (resp) {
                    app.verkooppunten = resp.data;
                })
                .catch(function (resp) {
                    console.log(resp);
                    alert("Could not load verkooppunt");
                });
        },
        methods: {
            deleteEntry(id, index) {
                if (confirm("Do you really want to delete it?")) {
                    var app = this;
                    axios.delete('/verkooppunten/' + id)
                        .then(function (resp) {
                            app.verkooppunten.splice(index, 1);
                          app.$router.push({ path: '/' });
                        })
                        .catch(function (resp) {
                            alert("Could not delete verkooppunt");
                        });
                }
            }
        }
    }
</script>
<style>
    table {
        table-layout: fixed;
    }

    td {
        word-wrap:break-word;
    }


</style>