<template>
  <div>
    <div class="exam-memo-textarea-wrapper">
      <AppTextarea
        :rows="6"
        v-model="testContent"
      />
    </div>
    <CodeEditor
      v-model="code"
    />
  </div>
</template>
<script>
import CodeEditor from '../components/CodeEditor';
import AppTextarea from '../components/AppTextarea';

export default {
  components: {
    CodeEditor,
    AppTextarea
  },
  data () {
    return {
      code: 'console.log("Hello Code-Exam!");',
      testContent: ''
    };
  }
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