@extends('layouts.app')
@section('content')
    <section class="container">
        <img src="{{ asset('storage/' . $type->name) }}">
        <h1>{{ $type->name }}</h1>

        <a href="{{ route('admin.types.edit', $type->id) }}" class="btn btn-success ">Modifica</a>
    </section>
@endsection
