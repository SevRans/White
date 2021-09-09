<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use Illuminate\Http\Request;
use Symfony\Component\Console\Question\Question;
use App\Models\Answers;
class QuestionsController extends Controller
{
    public function indexApi()
    {
        return Questions::with(['answers'])->get();
    }

    public function store(Request $request)
    {   $reqSum= 0;
        $validated = $request->validate([
            'question' => 'required|min:3',
            'answers' => 'required',
            'answers.*.text'=>'required',
            'answers.*.variant'=>'required',
            'answers.*.value' => 'required|min:0|max:1',
        ]);

        foreach ($validated ['answers'] as $answer) {

            $vo = $answer['value'];
            $reqSum= $reqSum + $vo;
            //return ['status'=>0, 'errer'=>'ty durak'];
        }

        if($reqSum == 0){
            return 0;
        }

        $newQuestions = new questions();
        $newQuestions->question = $validated ['question'];
        $newQuestions->save();

 $variant=1;


        foreach ($validated ['answers'] as $answer) {
            $newAnswers = new answers();
            $newAnswers->question_id = $newQuestions->id;
            $newAnswers->variant = $variant;
            $newAnswers->text = $answer['text'];
            $newAnswers->value = $answer['value'];
            $newAnswers->save();
            $variant++;
        }


        //return redirect()->route('AnswersController.create')
        //    ->with('success','question created.');
        return route('testVue');

    }

    public function checkAnswer(Request $request)
    {
        $validated = $request->validate([
            'question_id' => 'required',
            'answers_id' => 'required'
        ]);

        //$an = AnswersController::find($validated['answer_id']);
        //$an = $question->answer->where('id', '=', $validated['answer_id'])->first();
        $ans = Answers::whereIn('id', $validated['answers_id'])->get();

        $ball = 0;

        foreach ($ans as $an) {
            if ($an->value == 0) {
                return 0;
            }
            $ball = $ball + $an->value;
        }

        return $ball;

    }
}

