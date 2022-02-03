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
        <div class="container">
            <div class="card recent-sales">
                <div class="card-body">
                    @if ($ressources->count() > 0)
                        <table class="table table-borderless datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Reference</th>
                                    <th scope="col">Departement</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ressources as $ressource)
                                    @if ($ressource->department)
                                        <tr>
                                            <th scope="row"><a href="#">#{{ $ressource->id }}</a></th>
                                            <td>{{ $ressource->name }}</td>
                                            <td>{{ $ressource->reference }}</td>
                                            <td>{{ $ressource->department->name }}</td>
                                            <td class="cell100 column5 text-center">
                                                <div class="btn-group" role="group">
                                                    <form method="post"
                                                        action="{{ route('ressources.destroy', $ressource->id) }}"
                                                        onsubmit="return confirm('vous etes sûre de supprimer!')">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="badge bg-danger">Delete</button>
                                                    </form>
                                                    <a href="{{ route('ressources.edit', $ressource->id) }}">
                                                        <button class="badge bg-warning">Edit</button>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif

                                @endforeach
                                </tr>
                            </tbody>
                        </table>
                    @else
                        <div>Aucun ressource</div>
                    @endif
                </div>

            </div>
        </div>
    </main>
@endsection
