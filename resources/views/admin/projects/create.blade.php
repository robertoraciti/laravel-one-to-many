@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-4">
        <h1>Aggiungi progetto</h1>
        <a href="{{ route('admin.projects.index')}}" class="btn btn-primary">Torna indietro</a>
    </div>
    <form action="{{ route('admin.projects.store') }}" method="post" class="row g-3">
        @csrf
        <div class="col-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">

            @error('nome')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="col-3">
            <label for="repo" class="form-label">Repo</label>
            <input type="url" name="repo" id="repo" class="form-control @error('repo') is-invalid @enderror" value="{{old('repo')}}">
            @error('repo')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="col-3">
            <label for="collaborators" class="form-label">Colaboratori</label>
            <input type="number" name="collaborators" id="collaborators" class="form-control @error('collaborators') is-invalid @enderror" value="{{old('collaborators')}}">
            @error('collaborators')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="col-3">
            <label for="publishing_date" class="form-label">Data di pubblicazione</label>
            <input type="date" name="publishing_date" id="publishing_date" class="form-control @error('publishing_date') is-invalid @enderror" value="{{old('publishing_date')}}">
            @error('publishing_date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="col-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror" value="{{old('type')}}">
            {{-- <select name="type" id="type" class="form-select @error('type') is-invalid @enderror">
                <option value="public" @if(old('type') == "public") selected @endif>Pubblica</option>
                <option value="private" @if(old('type') == "private") selected @endif>Private</option>
            </select> --}}
        </div>
        <div class="col-3 mt-4">
            <button class="btn btn-success">Salva</button>
        </div>
    </form>
</div>
@endsection