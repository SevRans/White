@extends('layouts.app-vue')

@section('content')
{{--{{Auth::user()->name}}--}}
<card-component></card-component>
<hr>
    <posts-component ></posts-component>
{{--    <posts-component :us2="'y7gtyg'"></posts-component>--}}

@endsection
