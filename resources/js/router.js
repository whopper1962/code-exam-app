import VueRouter from "vue-router";
import WelcomeView from './views/WelcomeView';
import ExamView from './views/ExamView';
import ExamListView from './views/ExamListView';
import TextbookRegistrationView from './views/TextbookRegistrationView'

const routes = [
  {
    path: '/',
    name: 'WELCOME_VIEW',
    component: WelcomeView
  },
  {
    path: '/exams',
    name: 'EXAM_LIST_VIEW',
    component: ExamListView
  },
  {
    path: '/exams/:exam_id',
    name: 'EXAM_VIEW',
    component: ExamView
  },
  {
    path: '/textbook_registration',
    name: 'TEXTBOOK_REGISTRATION',
    component: TextbookRegistrationView
  },
  {
    path: '*',
    redirect: {
      name: 'WELCOME_VIEW'
    }
  }
];

const router = new VueRouter({
  mode: "history",
  routes,
});

export default router;
