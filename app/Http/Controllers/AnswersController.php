<?php

namespace App\Http\Controllers;

use App\Models\Answers;
use Illuminate\Http\Request;
use App\Models\Questions;
use Auth;
use App\Models\User;
class AnswersController extends Controller
{

    public function index()
    {
      return Answers::all();
    }


    public function create()
    {
        return view('test/create' ,[
            'answers' => answers::all()
        ]);
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'question_id' => 'required|int',
            'variant' => 'required|int',
            'text' => 'required|min:3',
            'question' => 'required|min:3',
            'value' => 'required|integer'
        ]);

        $newAnswers = new answers();
        $newAnswers->question_id = $validated ['question_id'];
        $newAnswers->variant = $validated ['variant'];
        $newAnswers->text = $validated ['text'];
        $newAnswers->value = $validated  ['value'];
        $newAnswers->save();

        return redirect()->route('test.example')
            ->with('success', 'answer created.');
    }


    public function show(answers $answers)
    {
        //
    }


    public function edit(answers $answers)
    {
        //
    }

    public function update(Request $request, answers $answers)
    {
        //
    }


    public function destroy(answers $answers)
    {
        //
    }
}

