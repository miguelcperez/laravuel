new Vue({
  el: '#app',
  data() {
    return {skills: []}
  },
  mounted() {
    axios.get('/skills').then(response => this.skills = response.data);
  }
});
