@extends('layouts.app')

@section('title', 'Joshua Gallardo')

@section('content')

    @include('partials.preloader')

    @include('partials.navbar')

    @include('partials.hero')

    @include('partials.about')

    @include('partials.skills')

    @include('partials.projects')

    @include('partials.experience')

    @include('partials.contact')

    @include('partials.footer')

@endsection