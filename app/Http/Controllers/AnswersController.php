<?php

namespace App\Http\Controllers;

use App\Models\answers;
use Illuminate\Http\Request;

class AnswersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $answers = Answers::all();
        return view('test/index',[
            'answers' => $answers
        ]);
    }
    public function indexApi()
    {
        return answers::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('test/create' ,[
            'answers' => answers::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
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

    /**
     * Display the specified resource.
     *
     * @param \App\Models\answers $answers
     * @return \Illuminate\Http\Response
     */
    public function show(answers $answers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\answers $answers
     * @return \Illuminate\Http\Response
     */
    public function edit(answers $answers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\answers $answers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, answers $answers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\answers $answers
     * @return \Illuminate\Http\Response
     */
    public function destroy(answers $answers)
    {
        //
    }
}

