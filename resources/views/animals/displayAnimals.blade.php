@extends('layouts.app')

@section('content')

    <div class="container">
        <h2 class="text-center">Nos Animaux</h2>
        <h6 class="container text-center mb-3 mt-3 ">
            <a href="{{ url('/addAnimals') }}">
                Ajouter un animal
            </a>
        </h6>
        <table class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nom</th>
                    <th>Espèce</th>
                    <th>Catégorie</th>
                    <th>Fiche</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($animals as $animal)
                <tr>
                    <td>{{ $animal->id }}</td>
                    <td>{{ $animal->name }}</td>
                    <td>{{ $animal->species }}</td>
                    <td>{{ $animal->categorie }}</td>
                    <td> <a href="{{ url('/addAnimals') }}">fiche complète</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
