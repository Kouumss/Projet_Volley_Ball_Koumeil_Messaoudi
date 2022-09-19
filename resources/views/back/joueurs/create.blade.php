@extends('layouts.app')

@section('content-back')


    <div class="container">
        <h4>Créer un joueur</h4>
    </div>


    <section class="section container ">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="form form-vertical formStyle" action="{{ route('joueur.store') }}" method="post" enctype="multipart/form-data">
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
                            <label class="mb-2">Prénom</label>
                            <input type="text" class="form-control " name="prenom">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="mb-2">Age</label>
                            <input type="number" class="form-control" name="age">
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label class="mb-2">Num GSM</label>
                            <input type="number" class="form-control" name="tel">
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label class="mb-2">Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label class="mb-2">Pays</label>
                            <input type="text" class="form-control" name="pays">
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label class="mb-2">Photo</label>
                            <input type="file" class="form-control" name="img">
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label class="mb-2">Genre</label>
                            <select name="genre" id="" class="form-control">
                                <option value="H">Homme</option>
                                <option value="F">Femme</option>
                                <option value="X">Non binaire</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label class="mb-2">Role</label>
                            <select name="role_id" class="form-control" id="">
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->nom }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label class="mb-2">Role</label>
                            <select name="equipe_id" class="form-control" id="">
                                @foreach ($equipes as $equipe)
                                    @if ($equipe->id !== 1)
                                        <option value="{{ $equipe->id }}">{{ $equipe->nom }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-1 mt-2 mx-auto">
                        <button class="btn btn-primary">Ajouter</button>
                    </div>
                </div>
            </div>
        </form>
        @if (session()->has('error'))
            <div class="alert alert-danger mb-0 mt-2">
                {{ session()->get('error') }}
            </div>
        @endif

    </section>
@endsection
