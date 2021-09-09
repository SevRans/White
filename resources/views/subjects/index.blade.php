@extends('layouts.app')

@section('content')


    <div class="container">
        <a href="{{route('subjects.create')}}"  class="btn btn-primary btn-lg btn-block" >Create Subject</a>
        <div class="card">
            <div class="card-header">
                Subjects
            </div>

                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Subject type</th>
                    </tr>
                    @foreach($subject as $s)
                        <tr>
                            <td>{{ $s->id }}</td>
                            <td>{{ $s->name }}</td>
                            <td>{{ $s->type }}</td>
                        </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </div>

@endsection
