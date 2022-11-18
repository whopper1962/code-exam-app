<template>
  <div class="exam-memo-textarea-wrapper">
    <textarea
      :rows="rows"
      v-model="inputedText"
    />
  </div>
</template>

<script>
export default {
  props: {
    value: {
      type: String,
      defualt: ''
    },
    rows: {
      type: Number,
      default: 6
    }
  },
  computed: {
    inputedText: {
      get () {
        return this.value;
      },
      set (newVal) {
        this.$emit('input', newVal);
      }
    }
  },
  data () {
    return {};
  },
}
</script>

<style scoped>
.exam-memo-textarea-wrapper textarea{
  font-family : inherit;
  font-size   : inherit;
  color: #2c3e50;
  width: 100%;
}
.exam-memo-textarea-wrapper textarea {
  border: solid rgb(181, 181, 181);;
  border-radius: 8px;
  width:100%;
  margin:10px 0px 0px 0px;
  padding:1%;
  box-sizing: border-box;
  resize: none;
}
</style>