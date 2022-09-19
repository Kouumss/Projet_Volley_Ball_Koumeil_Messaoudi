@extends('layouts.app')

@section('content-back')
    @if (session()->has('success'))
        <div class="alert alert-success mb-2 mt-2">
            {{ session()->get('success') }}
        </div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-danger mb-2 mt-2">
            {{ session()->get('error') }}
        </div>
    @endif
    <section class="section m-5">

        <div >
            <h4>Equipes</h3>
        </div>


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
                    <th>ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($equipes as $equipe)
                    <tr>
                        <td style="font-weight: 900">{{ $equipe->id - 1 }}</td>
                        <td>{{ $equipe->nom }}</td>
                        <td>{{ $equipe->pays }}</td>
                        <td>{{ $equipe->continent }}</td>
                        <td>{{ $equipe->joueurs->where('role_id', 1)->count() }} /
                            {{ $equipe->attaquant }}</td>
                        <td>{{ $equipe->joueurs->where('role_id', 2)->count() }} /
                            {{ $equipe->central }}</td>
                        <td>{{ $equipe->joueurs->where('role_id', 3)->count() }} /
                            {{ $equipe->defenseur }}</td>
                        <td>{{ $equipe->joueurs->where('role_id', 4)->count() }} /
                            {{ $equipe->remplacant }}</td>
                        <td>{{ count($equipe->joueurs) }} /
                            {{ $equipe->attaquant + $equipe->central + $equipe->defenseur + $equipe->remplacant }}
                        </td>

                        <td>
                            <div class="d-flex">
                                <a href="{{ route('equipe.show', $equipe->id) }}" class="btn btn-warning ms-2">Read</a>
                                <a href="{{ route('equipe.edit', $equipe->id) }}" class="btn btn-primary mx-2">Edit</a>
                                <form action="{{ route('equipe.destroy', $equipe->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
