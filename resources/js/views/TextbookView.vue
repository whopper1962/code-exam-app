<template>
  <div></div>
</template>
<script>
export default {
  components: {},
  data () {
    return {
      textbookId: null
    };
  },
  created () {
    this.textbookId = this.$route.params.textbook_id;
    console.error(this.textbookId);
  },
  computed: {},
  methods: {}
}
</script>