@extends('layouts.app')
@section('content')
    <section class="container">
        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}">
        <h1>{{ $project->title }}</h1>
        <p>{{ $project->body }}</p>

        <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-success ">Modifica</a>
    </section>
@endsection
