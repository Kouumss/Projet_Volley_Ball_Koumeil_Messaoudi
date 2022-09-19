@extends('layouts.app')

@section('content-back')
    <div class="container">
        <h4>Joueurs</h4>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success mb-0 mt-2">
            {{ session()->get('success') }}
        </div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-danger mb-0 mt-2">
            {{ session()->get('error') }}
        </div>
    @endif


    <div class="container">
        <table class="table table-lg">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOM</th>
                    <th>PRENOM</th>
                    <th>GENRE</th>
                    <th>PAYS</th>
                    <th>ROLE</th>
                    <th>EQUIPE</th>
                    <th>PHOTO</th>
           
                </tr>
            </thead>
            <tbody>
                @if (is_array($joueurs) || is_object($joueurs))
                <tr>
                    <td style="font-weight: 900">{{ $joueurs->id }}</td>
                    <td>{{ $joueurs->nom }}</td>
                    <td>{{ $joueurs->prenom }}</td>
                    <td>{{ $joueurs->genre }}</td>
                    <td style="width: 10%">{{ $joueurs->pays }}</td>
                    <td>{{ $joueurs->role->nom }}</td>
                    <td>{{ $joueurs->equipe->nom }}</td>
                    @if (File::exists('img/' . $joueurs->photo->img))
                        <td><img style="width: 50px" src="{{ asset('img/' . $joueurs->photo->img) }}" alt="">
                        </td>
                    @else
                        <td><img style="width: 50px" src="{{ $joueurs->photo->img }}" alt=""></td>
                        </td>
                    @endif
                </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection