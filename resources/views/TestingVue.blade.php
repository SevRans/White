@extends('layouts.app')

@section('script2')
        body{
            background-image: url(/AdobeStock.jpg);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            width:100%;
            height: 100%;
            /*background-image: url(https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.cjr.org%2Fopinion%2Ftech-journalism-on-background.php&psig=AOvVaw0RIX38lMeVzqaNDhPZ2lll&ust=1631334160997000&source=images&cd=vfe&ved=0CAYQjRxqFwoTCNjg0MDH8_ICFQAAAAAdAAAAABAL);*/
        }
@endsection
@section('content')
    <questions-list></questions-list>
@endsection
