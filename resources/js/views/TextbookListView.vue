<template>
  <div>
    <template v-for="(textbook, index) in textbooks">
      <p :key="`textbook_${index}`">
        {{ textbook.title }}
        <router-link
          :to="{
            name: 'TEXTBOOK_VIEW',
            params: {
              textbook_id: textbook.id
            }
          }"
        >
          To details
        </router-link>
      </p>
    </template>
  </div>
</template>
<script>
export default {
  components: {},
  data () {
    return {
      textbooks: []
    };
  },
  created () {
    this.getTextbooks();
  },
  computed: {},
  methods: {
    getTextbooks () {
      axios.get(`/api/textbooks`).then((response) => {
        // console.log(response.data);
        this.textbooks = response.data;
      }).catch((error) => {
        console.error(error);
      });
    }
  }
}
</script>