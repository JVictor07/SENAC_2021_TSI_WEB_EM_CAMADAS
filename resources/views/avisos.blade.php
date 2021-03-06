@extends('layouts.externo')
@section('title', 'Quadro de Avisos da Empresa')
@section('sidebar')
    @parent
    <p>^ ^ Barra superior adicionada do layout pai/m&atilde;e ^ ^ </p>
@endsection
@section('content')
    <p>Quadro de Avisos da Empresa</p>
    <br><br>
    <p>Olá, {{$nome}}! Seu nome foi passado através da rota</p>

    @if($mostrar)

        @foreach($avisos as $aviso)
            <p>Aviso #{{$aviso['id']}}: {{$aviso['texto']}}</p>
        @endforeach

        <?php
            $var_example = 'Exemplo';

            foreach($avisos as $aviso) {
                echo "<p>Aviso #{$aviso['id']}: {$aviso['texto']}</p>";
            }
        ?>

    @else
        O aviso não será exibido!
    @endif

    Var de exemplo: {{$var_example}}

@endsection
