@extends('template.app')

@section('content')

<div class="container text-center opciones">
    <div class="row text-center">
        <div class="col contenido">
            <h6 class="titulo">Qué necesitas?</h6>
            <form action="{{action('App\Http\Controllers\PetitionController@store')}}" method="POST">
                {{method_field('POST')}}
                {{ csrf_field() }}
                <input type="checkbox" name="servicio0" value="Web corporativa">Web corporativa</br>
                <input type="checkbox" name="servicio1" value="Web catálogo">Web catálogo</br>
                <input type="checkbox" name="servicio2" value="Tienda online">Tienda online</br>
                <input type="checkbox" name="servicio3" value="Web con motor de reservas">Web con motor de reservas</br>
                <input type="checkbox" name="servicio4" value="Web restaurante + delivery">Web restaurante + delivery</br>
                <input type="checkbox" name="servicio5" value="Alojamiento web y/o dominios">Alojamiento web y/o dominios</br>
                <input type="checkbox" name="servicio6" value="Otros">Otros</br>

                <h6 class="inputform">Como te llamas?</h6>
                <input class="input" type="text" name="nombre" id="nombre" placeholder="Introduce tu nombre">

                <button type="submit">Siguiente</button>
            </form>
        </div>
    </div>
</div>

@endsection