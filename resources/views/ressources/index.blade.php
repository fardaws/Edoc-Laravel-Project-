@extends('layouts.base')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Gestion ressources</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Ressources</li>
                    <li class="breadcrumb-item active">List ressources</li>
                </ol>
            </nav>
        </div>
        <div class="container">
            @if (Session::has('success'))
                <div class="alert alert-success">
                    <p class="mb-0">{{ Session::get('success') }}</p>
                </div>
            @endif
        </div>
        @if ($ressources->count() > 0)
            <div class="table100 ver5 m-b-110">
                <div class="table100-head">
                    <table>
                        <thead>
                            <tr class="row100 head">
                                <th class="cell100 column1 ps-5">Name</th>
                                <th class="cell100 column2">Reference</th>
                                <th class="cell100 column4 text-center">Departement</th>
                                <th class="cell100 column5 text-center">Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="table100-body js-pscroll">
                    <table>
                        <tbody>
                            @foreach ($ressources as $ressource)
                                <tr class="row100 body">
                                    <td class="cell100 column1 ps-5">{{ $ressource->name }}</td>
                                    <td class="cell100 column2">{{ $ressource->reference }}</td>
                                    <td class="cell100 column4 text-center">
                                        {{ $ressource->department->name }}
                                    </td>
                                    <td class="cell100 column5 text-center">
                                        <div class="btn-group" role="group">
                                            <form method="post" action="{{ route('ressources.destroy', $ressource->id) }}"
                                                onsubmit="return confirm('vous etes sûre de supprimer!')">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                            <a href="{{ route('ressources.edit', $ressource->id) }}">
                                                <button class="btn btn-warning">Edit</button>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <div>Aucun ressource</div>
        @endif

    </main>

@endsection
