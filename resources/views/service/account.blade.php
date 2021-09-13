@extends('layouts.app')

@section('content')
<div class="container">
<div><table class="table table-bordered">
       <tr> <td >User:{{Auth::user()->name}}</td></tr>
        <tr> <td>User email:{{Auth::user()->email}}</td></tr>

    </table>
</div>

    <img src="/770826-200.png" class="rounded float-left" alt="...">

</div>
<hr>
<div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
        <button type="submit">Log out from account</button>
        @csrf
    </form>

    </div>
@endsection
