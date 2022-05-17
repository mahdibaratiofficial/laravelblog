@extends('layout.master')
@section('title','Test Page')
@includeIf('layout.header')
@section('ContentPage')
    @component('components.alert')
        @slot('class')
            alert-success
        @endslot

        @slot('title')
            Successfully
        @endslot

        @slot('type')
            Processing Successfully
        @endslot
        <a>Now You Can Go to Next Leve ;)</a>
    @endcomponent
    <h1>Test Page</h1>

    {{ $name }}
    <br>
    @isset($name)
        <p>Salam Family</p>
    @endisset

    @auth
        Salam man Autham
    @endauth

    @guest
        Salam man guestam
    @endguest
@endsection
