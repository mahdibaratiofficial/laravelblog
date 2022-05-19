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

    <hr>
    @isset($name)
        @if(!isset($name->body))
            @foreach($name as $value)
                {{"salam"}}<br>
            @endforeach
        @else
            {{$name->body}}
        @endif
    @endisset
@endsection
