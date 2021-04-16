@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Ajouter un animal') }}</div>

                <div class="card-body">
                    <form method="POST" action="/create">
                    @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

                            <div class="col-md-6">
                                <input id="age" type="text" class="form-control" name="age" required autocomplete="age" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="species" class="col-md-4 col-form-label text-md-right" >{{ __('Espèce') }}</label>

                            <div class="col-md-6">
                                <input id="species" type="text" class="form-control" name="species">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="categorie" class="col-md-4 col-form-label text-md-right">{{ __('Catégorie') }}</label>

                            <div class="col-md-6">

                                <select class="form-select" aria-label="Default select example" id="categorie" name="categorie">
                                    <option value="Herbivore">Herbivore</option>
                                    <option value="Carnivore">Carnivore</option>
                                    <option value="Marin">Marin</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sexe" class="col-md-4 col-form-label text-md-right">{{ __('Sexe') }}</label>

                            <div class="col-md-6">
                                <select class="form-select" aria-label="Default select example" id="sexe" name="sexe">
                                    <option value="Mâle">Mâle</option>
                                    <option value="Femelle">Femelle</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="picture" class="col-md-4 col-form-label text-md-right">{{ __('Photo') }}</label>

                            <div class="col-md-6 no-border">
                                <input id="picture" type="file" class="form-control" name="picture">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Valider') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
