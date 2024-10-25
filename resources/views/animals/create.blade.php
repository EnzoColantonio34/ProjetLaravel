@extends('layouts/front')

@section('content')

    <div class="container">

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session()->has('animal'))
                <p>Animal enregistré sous : {{ session('animal') }}</p>
        @endif



        <form action="{{route('animals.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control  @error('name') is-invalid @enderror" value="{{ old('name') }}">

                @error('name')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="name">Couleur</label>
                <input type="text" name="color" id="name" class="form-control  @error('color') is-invalid @enderror" value="{{ old('color') }}">

                @error('color')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="name">Date de naissance</label>
                <input type="text" name="birthday" id="birthday" class="form-control  @error('birthday') is-invalid @enderror" value="{{ old('birthday') }}">

                @error('birthday')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Ajouter une image</label>
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
                @error('image')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div>
                <input type="submit" class="btn btn-primary" value="Ajouter !">
            </div>

        </form>

    </div>

@endsection
