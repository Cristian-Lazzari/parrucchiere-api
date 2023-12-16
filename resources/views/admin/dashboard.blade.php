@extends('layouts.base')

@section('contents')
<div class="d-flex flex-column gap-3 m-5 align-items-center">
   

    <a class="bs ts mybtn bg-primary" href="{{ route('admin.services.index') }}">Servizi</a>
    <a class="bs ts mybtn bg-primary" href="{{ route('admin.reservations.index') }}">Prenotazioni</a>

    <a class="bs ts mybtn-1 bg-success" href="{{ route('admin.posts.index') }}">Gallery</a>
    <a class="bs ts mybtn-1 bg-success" href="{{ route('admin.hashtags.index') }}">has'htag</a>
    <a class="bs ts mybtn-1 bg-secondary" href="{{ route('admin.setting') }}">Setting</a>
</div>


@endsection
