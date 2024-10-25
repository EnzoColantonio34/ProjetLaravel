@extends('layouts.front')

@section('title')
    B3Info
@endsection

@section('content')
    <?php $test = "<strong>Coucou</strong>"; ?>
    <p>Bonjour {!! $test !!}  vous êtes le numéro {{ $numero }}</p>
@endsection
