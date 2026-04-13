@extends('layouts.app')

@section('content')
<x-nav />
<main class="pt-24">
    <x-hero />
    <x-problem />
    <x-modules />
    <x-process />
    <x-trust />
    <x-contact-form />
</main>
<x-footer />
@endsection
