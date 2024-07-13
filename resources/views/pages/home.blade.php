@extends('templates.layout1')
@include('component.header')
@section('container')
    @include('partials.navbar')
    @include('component.banner')
    @include('component.service')
    @include('component.about')
    @include('component.menuslider')
    {{-- @include('component.download') --}}
    {{-- @include('component.batch') --}}
    @include('component.thanks')
    @include('component.buttonscroll')
@endsection
