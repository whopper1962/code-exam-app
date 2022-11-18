<template>
  <div class="submit-page-area">
    <AppButton
      :buttonText="'Submit!!'"
      :clicked="btnClicked"
    />
  </div>
</template>

<script>
import AppButton from '../components/AppButton';

export default {
  components: {
    AppButton
  },
  data () {
    return {};
  },
  props: {},
  computed: {},
  methods: {
    btnClicked () {
      this.$emit('submit');
    }
  }
}
</script>

<style scoped>
.submit-page-area {
  border: solid rgb(181, 181, 181);
  border-radius: 8px;
  padding: 10px;
  margin-top: 10px;
}
</style>