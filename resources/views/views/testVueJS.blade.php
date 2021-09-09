@extends('layouts.app')

@section('script2')
     const v1=[ 234, 266, 273]
@endsection

@section('content')

    <questions-list>

    </questions-list>
<question-lonely> </question-lonely>
    <hr>
{{--<test-counter ></test-counter>--}}
{{--<test-score v-bind:start="6" v-bind:inc="1" message="your work."></test-score>--}}
{{--<types-test :active="true" :name2="'lorum'" :id="2" :variants="[--}}
{{--name:'dim',man:true},--}}
{{-- {name:'fat',man:false},--}}
{{-- {name:'nurm',man:true}]" :variants2="{name:'dim',man:true,test2:[ '234', '266', '273']}"></types-test>--}}

{{--<test-create></test-create>--}}
@endsection
