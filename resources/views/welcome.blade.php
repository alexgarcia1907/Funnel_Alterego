@extends('template.app')

@section('content')

<div class="container text-center opciones">
    <div class="row text-center">
    <form action="{{ url('paso2') }}" method="POST">
            {{ csrf_field() }}
        <div class="col paso1 text-center">
            @include('pasos.paso1')  
        </div>
        <div class="col paso2 d-none">
            @include('pasos.paso2')  
        </div>
    </form>
    </div>
</div>

@endsection