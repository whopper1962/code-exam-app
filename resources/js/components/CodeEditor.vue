<template>
  <PrismEditor
    class="my-editor height-400"
    v-model="inputedCode"
    :highlight="highlighter"
    line-numbers
  >
  </PrismEditor>
</template>

<script>
import { PrismEditor } from 'vue-prism-editor';
import 'vue-prism-editor/dist/prismeditor.min.css';
import { highlight, languages } from 'prismjs/components/prism-core';
import 'prismjs/components/prism-clike';
import 'prismjs/components/prism-javascript';
import 'prismjs/themes/prism-tomorrow.css';

export default {
  components: {
    PrismEditor
  },
  data () {
    return {
      code: 'console.log("Hello World")'
    };
  },
  props: {
    value: [String, Number]
  },
  computed: {
    inputedCode: {
      get () {
        return this.value;
      },
      set (code) {
        this.$emit('input', code);
      }
    }
  },
  methods: {
    highlighter(code) {
      return highlight(code, languages.js);
    }
  }
}
</script>

<style>
.height-400 {
  height: 40vh
}
.my-editor {
  width: inherit;
  border-radius: 8px;
  background: #2d2d2d;
  color: #ccc;
  font-family: Fira code, Fira Mono, Consolas, Menlo, Courier, monospace;
  font-size: 14px;
  line-height: 1.5;
  padding: 5px;
}
.prism-editor__textarea:focus {
  outline: none;
}
</style>