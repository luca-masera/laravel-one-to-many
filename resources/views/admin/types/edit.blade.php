@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Edit {{ $type->name }}</h1>
        <form action="{{ route('admin.types.update', $type->slug) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name">Title</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                    required maxlength="200" value="{{ old('name', $type->name) }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <button type="submit" class="btn btn-success">Invia</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </section>
@endsection
