@extends('layouts.app')

@section('content-back')
    <div class="container">
        <h4>Equipes random</h4>
    </div>

    <div class="table table-responsive container">
        <table class="table table-lg rounded-2 ">
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
                @php
                    $count = 0;
                @endphp
                @foreach ($equipes->shuffle() as $equipe)
                    @if ($equipe->joueurs->count() ===
                        $equipe->attaquant + $equipe->central + $equipe->defenseur + $equipe->remplacant && $count < 2)
                        <tr>
                            <td style="font-weight: 900">{{ $equipe->id }}</td>
                            <td>{{ $equipe->nom }}</td>
                            <td>{{ $equipe->pays }}</td>
                            <td>{{ $equipe->continent }}</td>
                            <td>{{ $equipe->joueurs->where('role_id', 1)->count() }} / {{ $equipe->attaquant }}</td>
                            <td>{{ $equipe->joueurs->where('role_id', 2)->count() }} / {{ $equipe->central }}</td>
                            <td>{{ $equipe->joueurs->where('role_id', 3)->count() }} / {{ $equipe->defenseur }}</td>
                            <td>{{ $equipe->joueurs->where('role_id', 4)->count() }} / {{ $equipe->remplacant }}</td>
                            <td>{{ count($equipe->joueurs) }} /
                                {{ $equipe->attaquant + $equipe->central + $equipe->defenseur + $equipe->remplacant }}
                            </td>
                        </tr>
                        @php
                            $count++;
                        @endphp
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>



<div class="container">
    <h4>Joueurs sans équipe random</h4>
</div>
    <div class="table table-responsive container">
        <table class="table table-lg rounded-2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOM</th>
                    <th>PRENOM</th>
                    <th>PAYS</th>
                    <th>ROLE</th>
                    <th>EQUIPE</th>
                    <th>PHOTO</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($joueurs->shuffle()->where('equipe_id', 1)->take(4) as $joueur)
                    <tr>
                        <td style="font-weight: 900">{{ $joueur->id }}</td>
                        <td>{{ $joueur->nom }}</td>
                        <td>{{ $joueur->prenom }}</td>
                        <td style="width: 10%">{{ $joueur->pays }}</td>
                        <td>{{ $joueur->role->nom }}</td>
                        <td>{{ $joueur->equipe->nom }}</td>

                        @if (File::exists('img/' . $joueur->photo->img))
                            <td><img style="width: 50px" src="{{ asset('img/' . $joueur->photo->img) }}" alt="">
                            </td>
                        @else
                            <td><img style="width: 50px" src="{{ $joueur->photo->img }}" alt=""></td>
                            </td>
                        @endif

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>


<div class="container">
    <h4>Joueurs sans équipe random</h4>
</div>
    <div class="table table-responsive container">
        <table class="table table-lg rounded-2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOM</th>
                    <th>PRENOM</th>
                    <th>PAYS</th>
                    <th>ROLE</th>
                    <th>EQUIPE</th>
                    <th>PHOTO</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($joueurs->shuffle()->where('equipe_id', '!=', 1)->take(4) as $joueur)
                    <tr>
                        <td style="font-weight: 900">{{ $joueur->id }}</td>
                        <td>{{ $joueur->nom }}</td>
                        <td>{{ $joueur->prenom }}</td>
                        <td style="width: 10%">{{ $joueur->pays }}</td>
                        <td>{{ $joueur->role->nom }}</td>
                        <td>{{ $joueur->equipe->nom }}</td>

                        @if (File::exists('img/' . $joueur->photo->img))
                            <td><img style="width: 50px" src="{{ asset('img/' . $joueur->photo->img) }}" alt="">
                            </td>
                        @else
                            <td><img style="width: 50px" src="{{ $joueur->photo->img }}" alt=""></td>
                            </td>
                        @endif

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    {{-- 2 équipes non remplies au hasard --}}
<div class="container">
    <h4>Equipes vide random</h4>
</div>
    <div class="table table-responsive container">
        <table class="table table-lg rounded-2">
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
                @php
                    $count = 0;
                @endphp
                @foreach ($equipes->shuffle() as $equipe)
                    @if ($equipe->joueurs->count() <
                        $equipe->attaquant + $equipe->central + $equipe->defenseur + $equipe->remplacant && $count < 2)
                        <tr>
                            <td style="font-weight: 900">{{ $equipe->id }}</td>
                            <td>{{ $equipe->nom }}</td>
                            <td>{{ $equipe->pays }}</td>
                            <td>{{ $equipe->continent }}</td>
                            <td>{{ $equipe->joueurs->where('role_id', 1)->count() }} / {{ $equipe->attaquant }}</td>
                            <td>{{ $equipe->joueurs->where('role_id', 2)->count() }} / {{ $equipe->central }}</td>
                            <td>{{ $equipe->joueurs->where('role_id', 3)->count() }} / {{ $equipe->defenseur }}</td>
                            <td>{{ $equipe->joueurs->where('role_id', 4)->count() }} / {{ $equipe->remplacant }}</td>
                            <td>{{ count($equipe->joueurs) }} /
                                {{ $equipe->attaquant + $equipe->central + $equipe->defenseur + $equipe->remplacant }}
                            </td>
                        </tr>
                        @php
                            $count++;
                        @endphp
                    @endif
                @endforeach

            </tbody>
        </table>
    </div>


    {{-- Equipes européenes --}}
<div class="container">
    <h4>Equipes EUR</h4>
</div>

    <div class="table table-responsive container">
        <table class="table table-lg rounded-2">
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
                @foreach ($equipes->shuffle()->where('continent', 'EU') as $equipe)
                    <tr>
                        <td style="font-weight: 900">{{ $equipe->id }}</td>
                        <td>{{ $equipe->nom }}</td>
                        <td>{{ $equipe->pays }}</td>
                        <td>{{ $equipe->continent }}</td>
                        <td>{{ $equipe->joueurs->where('role_id', 1)->count() }} / {{ $equipe->attaquant }}</td>
                        <td>{{ $equipe->joueurs->where('role_id', 2)->count() }} / {{ $equipe->central }}</td>
                        <td>{{ $equipe->joueurs->where('role_id', 3)->count() }} / {{ $equipe->defenseur }}</td>
                        <td>{{ $equipe->joueurs->where('role_id', 4)->count() }} / {{ $equipe->remplacant }}</td>
                        <td>{{ count($equipe->joueurs) }} /
                            {{ $equipe->attaquant + $equipe->central + $equipe->defenseur + $equipe->remplacant }}
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    {{-- Equipes hors europe --}}
    <div class="container">
        <h4>Equipes NON EUR</h4>
    </div>

    <div class="table table-responsive container">
        <table class="table table-lg rounded-2">
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
                @foreach ($equipes->shuffle()->where('continent', 'HEU') as $equipe)
                    <tr>
                        <td style="font-weight: 900">{{ $equipe->id }}</td>
                        <td>{{ $equipe->nom }}</td>
                        <td>{{ $equipe->pays }}</td>
                        <td>{{ $equipe->continent }}</td>
                        <td>{{ $equipe->joueurs->where('role_id', 1)->count() }} / {{ $equipe->attaquant }}</td>
                        <td>{{ $equipe->joueurs->where('role_id', 2)->count() }} / {{ $equipe->central }}</td>
                        <td>{{ $equipe->joueurs->where('role_id', 3)->count() }} / {{ $equipe->defenseur }}</td>
                        <td>{{ $equipe->joueurs->where('role_id', 4)->count() }} / {{ $equipe->remplacant }}</td>
                        <td>{{ count($equipe->joueurs) }} /
                            {{ $equipe->attaquant + $equipe->central + $equipe->defenseur + $equipe->remplacant }}
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>


    <div class="container">
        <h4>Pays joueur = Pays équipe</h4>
    </div>

    <div class="table table-responsive container">
        <table class="table table-lg rounded-2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOM</th>
                    <th>PRENOM</th>
                    <th>PAYS</th>
                    <th>ROLE</th>
                    <th>EQUIPE</th>
                    <th>PHOTO</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($joueurs as $joueur)
                    @if ($joueur->pays === $joueur->equipe->pays)
                        <tr>
                            <td style="font-weight: 900">{{ $joueur->id }}</td>
                            <td>{{ $joueur->nom }}</td>
                            <td>{{ $joueur->prenom }}</td>
                            <td style="width: 10%">{{ $joueur->pays }}</td>
                            <td>{{ $joueur->role->nom }}</td>
                            <td>{{ $joueur->equipe->nom }}</td>

                            @if (File::exists('img/' . $joueur->photo->img))
                                <td><img style="width: 50px" src="{{ asset('img/' . $joueur->photo->img) }}"
                                        alt="">
                                </td>
                            @else
                                <td><img style="width: 50px" src="{{ $joueur->photo->img }}" alt=""></td>
                                </td>
                            @endif

                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>

  <div class="container">
    <h4>Joueuses random</h4>
  </div>

    <div class="table table-responsive container">
        <table class="table table-lg rounded-2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOM</th>
                    <th>PRENOM</th>
                    <th>PAYS</th>
                    <th>ROLE</th>
                    <th>EQUIPE</th>
                    <th>PHOTO</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($joueurs->shuffle()->where('genre', 'F')->where('equipe_id', '!=', 1)->take(5) as $joueur)
                    <tr>
                        <td style="font-weight: 900">{{ $joueur->id }}</td>
                        <td>{{ $joueur->nom }}</td>
                        <td>{{ $joueur->prenom }}</td>
                        <td style="width: 10%">{{ $joueur->pays }}</td>
                        <td>{{ $joueur->role->nom }}</td>
                        <td>{{ $joueur->equipe->nom }}</td>

                        @if (File::exists('img/' . $joueur->photo->img))
                            <td><img style="width: 50px" src="{{ asset('img/' . $joueur->photo->img) }}" alt="">
                            </td>
                        @else
                            <td><img style="width: 50px" src="{{ $joueur->photo->img }}" alt=""></td>
                            </td>
                        @endif

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

  <div class="container">
    <h4>Joueurs avec équipe random</h4>
  </div>

    <div class="table table-responsive container">
        <table class="table table-lg rounded-2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOM</th>
                    <th>PRENOM</th>
                    <th>PAYS</th>
                    <th>ROLE</th>
                    <th>EQUIPE</th>
                    <th>PHOTO</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($joueurs->shuffle()->where('genre', 'H')->where('equipe_id', '!=', 1)->take(5) as $joueur)
                    <tr>
                        <td>{{ $joueur->id }}</td>
                        <td>{{ $joueur->nom }}</td>
                        <td>{{ $joueur->prenom }}</td>
                        <td>{{ $joueur->pays }}</td>
                        <td>{{ $joueur->role->nom }}</td>
                        <td>{{ $joueur->equipe->nom }}</td>

                        @if (File::exists('img/' . $joueur->photo->img))
                            <td><img style="width: 50px" src="{{ asset('img/' . $joueur->photo->img) }}" alt="">
                            </td>
                        @else
                            <td><img style="width: 50px" src="{{ $joueur->photo->img }}" alt=""></td>
                            </td>
                        @endif

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
