@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{route('Question.example')}}"  class="btn btn-primary btn-lg btn-block" > Questions List</a>
        <form action="{{route('questions.store')}}" method="post" >
            @csrf
            <div class="form-group">
                <label for="question">Name</label>
                <input type="text" class="form-control" id="question" name="question">
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>


@endsection
