<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Exam;
use App\Models\Question;

class ExamController extends Controller
{
    public function index (
        $exam_id,
        Exam $exam,
        Question $question
    ) {
        $questions = $question->where('exam_id', '=', $exam_id)->get();
        if (!count($questions)) {
            abort(404);
        }

        $response = (object) [
            'questions' => $questions
        ];
        return $response;
    }
}
