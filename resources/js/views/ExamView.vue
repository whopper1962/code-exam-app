<template>
  <div>
    <template v-if="!isLoading">
      <ExamProgressBreadcrumbs
        v-model="selectedExamIndex"
        :exams="questions"
      />
    </template>
    <template v-for="(exam, index) in questions">
      <div
        class="exam-main-content"
        v-show="selectedExamIndex === index"
        :key="`exam_${index}`"
      >
        <h2 class="exam-title">{{ exam.title }}</h2>
        <div
          class="exam-explanation-box"
          v-html="markdownToHtml(exam.explanation)"
        />
        <template v-if="inputed[index]">
          <CodeEditor
            v-model="inputed[index].code"
          />
        </template>
        <template v-if="inputed[index]">
          <AppTextarea
            :rows="6"
            v-model="inputed[index].memo"
          />
        </template>
      </div>
    </template>
    <template v-if="!isLoading">
      <SubmitExamView
        v-show="selectedExamIndex === questions.length"
        @submit="submitExam()"
      />
    </template>
  </div>
</template>

<script>
import CodeEditor from '../components/CodeEditor';
import ExamProgressBreadcrumbs from '../components/ExamProgressBreadcrumbs';
import SubmitExamView from '../components/SubmitExamView';
import AppTextarea from '../components/AppTextarea';
import { marked } from 'marked';

export default {
  components: {
    CodeEditor,
    ExamProgressBreadcrumbs,
    SubmitExamView,
    AppTextarea
  },
  data () {
    return {
      questions: [],
      inputed: [],
      selectedExamIndex: 0,
      examId: null,
      isLoading: false
    };
  },
  created () {
    this.examId = this.$route.params.exam_id;
    this.getExams();
  },
  methods: {
    getExams () {
      this.isLoading = true;
      axios.get(`/api/exams/${this.examId}`)
      .then((response) => {
        this.setQuestions(response.data.questions);
      }).catch((error) => {
        console.error(error);
        this.$router.push({
          name: 'WELCOME_VIEW'
        });
      }).finally(() => {
        this.isLoading = false;
      });
    },
    setQuestions (questions) {
      for (const [index, question] of questions.entries()) {
        this.$set(this.questions, index, {
          title: question.title,
          explanation: question.content
        });
        this.inputed.push({
          memo: '',
          code: question.default_code
        });
      }
    },
    markdownToHtml (markdown) {
      return marked(markdown);
    },
    submitExam () {
      console.error('Submitted!');
    }
  }
}
</script>

<style scoped>
.exam-main-content {
  border: solid rgb(181, 181, 181);
  border-radius: 8px;
  padding: 10px;
  margin-top: 10px;
}
.exam-title {
  margin: 0px 0px 10px 10px;
  text-align: left;
}
.exam-explanation-box {
  border: solid rgb(181, 181, 181);
  border-radius: 8px;
  margin: 0px 0px 10px 0px;
  padding: 10px;
  text-align: left;
}
</style>