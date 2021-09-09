@extends('layouts.app')

@section('content')

    <div class="container">
        <a href="{{route('test.example')}}" class="btn btn-primary btn-lg btn-block"> Test-area List</a>
        <div action="{{route('Answers.store')}}" method="post">
            @csrf
{{--            <div class="form-group">--}}
{{--                <label for="question">Question</label>--}}
{{--                <input type="text" class="form-control" id="question" name="question">--}}
{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <label for="question_id">Question</label>--}}
{{--                <select class="form-select" aria-label="Default select example" id="question_id" name="question_id">--}}
{{--                    <option selected>Question</option>--}}
{{--                    @foreach($answers as $a)--}}
{{--                        <option value="{{$a->question->question}}">{{$a->question->question}}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
{{--            </div>--}}

            <div class="row align-items-start">
                <div class="form-group input-group mb-2 col-sm-4">
                    <label for="text">Answer</label>
                    <input type="text" class="form-control" id="text" name="text">
                </div>
                <div class="form-group input-group mb-2 col-sm-4 ">
                    <label for="variant">Variant</label>
                    <select class="custom-select" id="variant" name="variant">
                        <option selected>Answer variant</option>
                        <option value="1">First variant</option>
                        <option value="2">Second variant</option>
                        <option value="3">Third variant</option>
                    </select>
                </div>
                <div class="form-group input-group mb-3 col-sm-4">
                    <label for="value">Value</label>
                    <select class="custom-select" id="value" name="value">
                        <option selected>Answer value</option>
                        <option value="1">Right</option>
                        <option value="2">Wrong</option>
                    </select>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="form-group input-group mb-2 col-sm-4">
                    <label for="text">Answer</label>
                    <input type="text" class="form-control" id="text" name="text">
                </div>
                <div class="form-group input-group mb-2 col-sm-4">
                    <label for="variant">Variant</label>
                    <select class="custom-select" id="variant" name="variant">
                        <option selected>Answer variant</option>
                        <option value="1">First variant</option>
                        <option value="2">Second variant</option>
                        <option value="3">Third variant</option>
                    </select>
                </div>
                <div class="form-group input-group mb-2 col-sm-4">
                    <label for="value">Value</label>
                    <select class="custom-select" id="value" name="value">
                        <option selected>Answer value</option>
                        <option value="1">Right</option>
                        <option value="2">Wrong</option>
                    </select>
                </div>
            </div>

            <div class="row align-items-end">
                <div class="form-group input-group mb-2 col-sm-4">
                    <label for="text">Answer</label>
                    <input type="text" class="form-control" id="text" name="text">
                </div>
                <div class="form-group input-group mb-2 col-sm-4">
                    <label for="variant">Variant</label>
                    <select class="custom-select" id="variant" name="variant">
                        <option selected>Answer variant</option>
                        <option value="1">First variant</option>
                        <option value="2">Second variant</option>
                        <option value="3">Third variant</option>
                    </select>
                </div>
                <div class="form-group input-group mb-2 col-sm-4">
                    <label for="value">Value</label>
                    <select class="custom-select" id="value" name="value">
                        <option selected>Answer value</option>
                        <option value="1">Right</option>
                        <option value="2">Wrong</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
<div>
    <test-counter></test-counter>
</div>


@endsection
