@extends('layouts.app')

@section('content-back')

    <div class="container">
        <h4>Créer une équipe</h4>
    </div>
    <section class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="form form-vertical formStyle" action="{{ route('equipe.store') }}" method="post">
            @csrf
            <div class="form-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label class="mb-2">Nom</label>
                            <input type="text" class="form-control " name="nom">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="mb-2">Pays</label>
                            <input type="text" class="form-control" name="pays">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label class="mb-2">Continent</label>
                            <select name="continent" class="form-control" id="">
                                <option value="EU">Europe</option>
                                <option value="HEU">Hors Europe</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="form-group">
                            <label class="mb-2">Attaquants</label>
                            <input type="number" class="form-control" name="attaquant">
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="form-group">
                            <label class="mb-2">Centraux</label>
                            <input type="number" class="form-control" name="central">
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="form-group">
                            <label class="mb-2">Défenseurs</label>
                            <input type="number" class="form-control" name="defenseur">
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="form-group">
                            <label class="mb-2">Remplaçants</label>
                            <input type="number" class="form-control" name="remplacant">
                        </div>
                    </div>
                    <div class="col-1 mt-2 mx-auto">
                        <button class="btn btn-primary">Ajouter</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
