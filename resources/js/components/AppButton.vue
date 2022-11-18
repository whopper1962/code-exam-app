<template>
  <button
    class="button-default"
    role="button"
    @click="clicked"
  >
    {{ buttonText }}
  </button>
</template>

<script>
export default {
  props: {
    clicked: {
      type: [
        Function,
        Object
      ]
    },
    buttonText: {
      type: String,
      default: ''
    },
    classes: {
      type: [
        String,
        Object
      ],
      default: 'button-default'
    }
  },
  computed: {},
  methods: {}
}
</script>

<style scoped>
/* CSS */
.button-default {
  appearance: button;
  background-color: #3a72ff;
  border: 1px solid #3a72ff;
  border-radius: 4px;
  box-sizing: border-box;
  color: #FFFFFF;
  cursor: pointer;
  font-family: Avenir, Helvetica, Arial, sans-serif;
  font-size: 17px;
  line-height: 1.15;
  overflow: visible;
  padding: 12px 16px;
  position: relative;
  text-align: center;
  text-transform: none;
  transition: all 80ms ease-in-out;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: fit-content;
}

.button-default:disabled {
  opacity: .5;
}

.button-default:focus {
  outline: 0;
}

.button-default:hover {
  background-color: #3b68d8;
  border-color: #3b68d8;
}

.button-default:active {
  background-color: #3b68d8;
  border-color: #3b68d8;
}
</style>
