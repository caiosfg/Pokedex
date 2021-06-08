<template>
  <div id="app">
    <img alt="Vue logo" src="./assets/logo.png">
    <HelloWorld msg="Welcome to Your Vue.js App"/>

    <ul>
      <li v-for="(todo, i ) in todos" :key="i">{{ todo }}</li>
    </ul>

    <ul>
      <li v-for="(value, chave) in insigna" :key="chave">{{ value }}</li>
    </ul>

    <template v-if="pokebola.length">
      <ul>
        <li v-for="(poke, index) in filterPoke" :key="index">{{ poke }}</li>
      </ul>
    </template>

  </div>
</template>

<script>
import HelloWorld from './components/HelloWorld.vue'

export default {
  name: 'App',
  components: {
    HelloWorld
  },
  data () {
    return {
      todos : [
        'Pikachu',
        'Squirtle',
        'Charizard'
      ],
      pokebola:[
        { poke: 'pokeball', have : true},
        { poke: 'greatball', have : false},
        { poke: 'megaball', have : true}
      ],
      insigna: {
        medal1 : 'Jotoh',
        medal2  : 'RockLeague'
      }
    }
  },
  computed:{
    filterPoke (){
      return this.pokebola.filter(poke => !poke.have)
    }
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
