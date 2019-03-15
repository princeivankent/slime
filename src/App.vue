<template>
  <div>
    <ol>
      <li v-for="(item, index) in items" :key="index">
        {{ item.model }}
      </li>
    </ol>
  </div>
</template>

<script>
import axios from 'axios'

export default {
  name: 'app',
  data () {
    return {
      items: []
    }
  },
  mounted () {
    this.getUser()
  },
  methods: {
    getUser () {
      var form = new FormData();
      form.append('data', 'Sample');

      axios.get('app/Controllers/VehicleController.php?vehicles')
      .then(response => {
        this.items = response.data;
      })
    }
  }
}
</script>