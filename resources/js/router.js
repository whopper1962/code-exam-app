import VueRouter from "vue-router";
import WelcomeView from './views/WelcomeView';
import ExamView from './views/ExamView';
import TextbookRegistrationView from './views/TextbookRegistrationView'

const routes = [
  {
    path: '/',
    name: 'WELCOME_VIEW',
    component: WelcomeView
  },
  {
    path: '/exams',
    name: 'EXAM_VIEW',
    component: ExamView
  },
  {
    path: '/textbook_registration',
    name: 'TEXTBOOK_REGISTRATION',
    component: TextbookRegistrationView
  }
];

const router = new VueRouter({
  mode: "history",
  routes,
});

export default router;
