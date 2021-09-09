@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="card">
            <div class="card-header">
                Answers
            </div>

            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Question</th>
                    <th>Variant</th>
                    <th>Text</th>
                    <th>Value</th>
                </tr>
                @foreach($answers as $a)
                    <tr>
                        <td>{{ $a->id }}</td>
                        <td>{{ $a->question->question}}</td>
                        <td>{{ $a->variant}}</td>
                        <td>{{ $a->text }}</td>
                        <td>{{ $a->value }}</td>
                    </tr>
    @endforeach
@endsection
