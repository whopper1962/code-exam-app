<template>
  <div>
    <p>{{ textDetails }}</p>
  </div>
</template>
<script>
export default {
  components: {},
  data () {
    return {
      textbookId: null,
      textDetails: {}
    };
  },
  created () {
    this.textbookId = this.$route.params.textbook_id;
    this.getDetails();
  },
  computed: {},
  methods: {
    getDetails () {
      axios.get(`/api/textbooks/${this.textbookId}`)
      .then((response) => {
        this.textDetails = response.data;
        console.log(this.textDetails);
      }).catch((error) => {
        console.error(error);
        this.$router.push({
          name: 'TEXTBOOK_LIST_VIEW'
        });
      }).finally(() => {
        this.isLoading = false;
      });
    }
  }
}
</script>