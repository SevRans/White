@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{route('subjects.index')}}"  class="btn btn-primary btn-lg btn-block" > Subjects List</a>
    <form action="{{route('subjects.store')}}" method="post" >
        @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group">
        <label for="type">Subject type</label>
        <select class="custom-select" id="type" name="type">
            <option selected>Subject type</option>
            <option value="exact sciences">Exact</option>
            <option value="lingvistic sciences">Lingvistic</option>
        </select>
    </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>


@endsection
