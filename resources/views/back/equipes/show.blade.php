@extends('layouts.app')

@section('content-back')
    <div class="container">
        <h4>Equipes</h3>
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
        <section class="container">
            <table class="table table-lg">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOM</th>
                        <th>PAYS</th>
                        <th>CONTINENT</th>
                        <th>ATTAQUANTS</th>
                        <th>CENTRAUX</th>
                        <th>DEFENSEURS</th>
                        <th>REMPLACANTS</th>
                        <th>CAPACITE</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td style="font-weight: 900">{{ $equipes->id - 1 }}</td>
                            <td>{{ $equipes->nom }}</td>
                            <td>{{ $equipes->pays }}</td>
                            <td>{{ $equipes->continent }}</td>
                            <td>{{ $equipes->joueurs->where('role_id', 1)->count() }} /
                                {{ $equipes->attaquant }}</td>
                            <td>{{ $equipes->joueurs->where('role_id', 2)->count() }} /
                                {{ $equipes->central }}</td>
                            <td>{{ $equipes->joueurs->where('role_id', 3)->count() }} /
                                {{ $equipes->defenseur }}</td>
                            <td>{{ $equipes->joueurs->where('role_id', 4)->count() }} /
                                {{ $equipes->remplacant }}</td>
                            <td>{{ count($equipes->joueurs) }} /
                                {{ $equipes->attaquant + $equipes->central + $equipes->defenseur + $equipes->remplacant }}
                            </td>
                          
                            
                        </tr>
                </tbody>
            </table>
        </section>
    @endsection
