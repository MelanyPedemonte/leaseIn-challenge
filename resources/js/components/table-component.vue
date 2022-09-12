<template>
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
            value: 'nombre',
          },
          { text: 'Codigo', value: 'codigo', filterable: false},
          { text: 'Tipo', value: 'tipo',filterable: false, },
          { text: 'Marca', value: 'marca',filterable: false, },
          { text: 'Procesador', value: 'procesador',filterable: false, },
          { text: 'Generacion', value: 'generacion',filterable: false, },
        ],
        desserts: [],
      }
    },
    created(){ 
      fetch('/all')
        .then(response => console.log(response))
        //.then(json => console.log(json.data));
        /*
        this.desserts = [{
            nombre: 'Cliente 1',
            codigo: 'djcdc',
            tipo: 'g',
            marca: 'HP',
            procesador: '8',
            generacion: '8'

          },
          {
            nombre: 'Cliente 2',
            codigo: 'djcdc',
            tipo: 'g',
            marca: 'HP',
            procesador: '8',
            generacion: '8'

          },{
            nombre: 'Cliente 3',
            codigo: 'djcdc',
            tipo: 'tipp',
            marca: 'HP',
            procesador: '8',
            generacion: '8'

          },
        ]*/
       
    },
  }
</script>