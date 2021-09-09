@extends('layouts.app')

@section('content')


    <div class="container">

        <div class="card">
            <div class="card-header">
                Questions
            </div>

            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>question</th>
                </tr>
                @foreach($questions as $q)
                    <tr>
                        <td>{{ $q->id }}</td>
                        <td>{{ $q->question }}</td>

                    </tr>
                @endforeach
            </table>

        </div>
        <a href="{{route('questions.create')}}"  class="btn btn-primary btn-lg btn-block" > Question create</a>
    </div>

@endsection
