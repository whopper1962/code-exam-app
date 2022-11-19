<template>
  <div>
    <ExamProgressBreadcrumbs
      v-model="selectedExamIndex"
      :exams="exams"
    />
    <template v-for="(exam, index) in exams">
      <div
        class="exam-main-content"
        v-show="selectedExamIndex === index"
        :key="`exam_${index}`"
      >
        <h2 class="exam-title">{{ exam.title }}</h2>
        <div class="exam-explanation-box">
          {{ exam.explanation }}
        </div>
        <CodeEditor
          v-model="inputed[index].code"
        />
        <AppTextarea
          :rows="6"
          v-model="inputed[index].memo"
        />
      </div>
    </template>
    <SubmitExamView
      v-show="selectedExamIndex === exams.length"
      @submit="submitExam()"
    />
  </div>
</template>

<script>
import CodeEditor from '../components/CodeEditor';
import ExamProgressBreadcrumbs from '../components/ExamProgressBreadcrumbs';
import SubmitExamView from '../components/SubmitExamView';
import AppTextarea from '../components/AppTextarea';

export default {
  components: {
    CodeEditor,
    ExamProgressBreadcrumbs,
    SubmitExamView,
    AppTextarea
  },
  data () {
    return {
      exams: [
        {
          title: 'Variable',
          explanation: 'As in above comment - false alarm. Somewhere between Docker image caching and npm, the sass-loader and node-sass modules were reported as being installed, while not actually being installed. The usual rm node_modules and rebuilding with no cache trick fixed it. As in above comment - false alarm. Somewhere between Docker image caching and npm, the sass-loader and node-sass modules were reported as being installed, while not actually being installed. The usual rm node_modules and rebuilding with no cache trick fixed it. As in above comment - false alarm. Somewhere between Docker image caching and npm, the sass-loader and node-sass modules were reported as being installed, while not actually being installed. The usual rm node_modules and rebuilding with no cache trick fixed it.'
        },
        {
          title: 'Function',
          explanation: 'Solve this quiz.'
        },
        {
          title: 'Class',
          explanation: 'Solve this quiz.'
        },
        {
          title: 'Title3',
          explanation: 'Solve this quiz.'
        },
        {
          title: 'Title4',
          explanation: 'Solve this quiz.'
        },
        {
          title: 'Title5',
          explanation: 'Solve this quiz.'
        }
      ],
      inputed: [],
      selectedExamIndex: 0
    };
  },
  created () {
    this.getExams();
  },
  methods: {
    getExams () {
      for (let i = 0, len = this.exams.length; i < len; i++) {
        this.inputed.push({
          memo: '',
          code: 'console.log("Hello Code-Exam!");'
        });
      }
      axios.get('/api/exams').then((response) => {
        console.log(response.data);
      }).catch((error) => {
        console.error(error);
      });
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