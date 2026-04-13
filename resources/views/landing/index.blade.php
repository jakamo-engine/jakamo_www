@extends('layouts.app')

@section('content')
<x-nav :stats="$stats" />
<main class="pt-24">
    <x-hero />
    <x-problem />
    <x-modules />
    <x-process />
    <x-trust :stats="$stats" />
    <x-contact-form />
</main>
<x-footer />
@endsection
