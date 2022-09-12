<template>
  <v-container>
    <v-card>
      <v-card-title>
        <v-text-field
          v-model="search"
          append-icon="mdi-magnify"
          label="Search"
          single-line
          hide-details
        ></v-text-field>
      </v-card-title>
      <v-data-table
        :headers="headers"
        :items="desserts"
        :search="search"
      ></v-data-table>
    </v-card>
  </v-container>
</template>

<script>
  export default {
    data () {
      return {
        search: '',
        headers: [
          {
            text: 'Cliente',
            align: 'start',
            value: 'cliente.nombre',
          },
          { text: 'Codigo', value: 'codigo', filterable: false},
          { text: 'Tipo', value: 'tipo_ua',filterable: false, },
          { text: 'Marca', value: 'marca',filterable: false, },
          { text: 'Procesador', value: 'procesador',filterable: false, },
          { text: 'Generacion', value: 'generacion',filterable: false, },
        ],
        desserts: [],
      }
    },
    created(){ 
      fetch('/all')
        .then(response => response.json())
        .then(response => this.desserts= response);
    },
  }
</script>