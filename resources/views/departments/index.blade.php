@extends('layouts.base')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Gestion department</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Department</li>
                    <li class="breadcrumb-item active">List departments</li>
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
        @if ($departments->count() > 0)
            <div class="table100 ver5 m-b-110">
                <div class="table100-head">
                    <table>
                        <thead>
                            <tr class="row100 head">
                                <th class="cell100 column1">Departement name</th>
                                <th class="cell100 column2">Bloc</th>
                                <th class="cell100 column3">Room number</th>
                                <th class="cell100 column4">Departement chef</th>
                                <th class="cell100 column4">department material manager</th>
                                <th class="cell100 column5">Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="table100-body js-pscroll">
                    <table>
                        <tbody>
                            @foreach ($departments as $department)
                                <tr class="row100 body">
                                    <td class="cell100 column1">{{ $department->name }}</td>
                                    <td class="cell100 column2">{{ $department->bloc }}</td>
                                    <td class="cell100 column3">{{ $department->rooms_number }}</td>
                                    @if ($department->departmentChef)
                                        <td class="cell100 column4">
                                            {{ $department->departmentChef->user->first_name }}
                                            {{ $department->departmentChef->user->last_name }}
                                        </td>
                                    @else
                                        <td class="cell100 column4">
                                            Pas encore affecté
                                        </td>
                                    @endif
                                    @if ($department->materielResponsable)
                                        <td class="cell100 column4">
                                            {{ $department->materielResponsable->user->first_name }}
                                            {{ $department->materielResponsable->user->last_name }}
                                        </td>
                                    @else
                                        <td class="cell100 column4">
                                            Pas encore affecté
                                        </td>
                                    @endif
                                    <td class="cell100 column5">
                                        <div class="btn-group" role="group">
                                            <form method="post"
                                                action="{{ route('department.destroy', $department->id) }}"
                                                onsubmit="return confirm('etes vous sûre de supprimer?')">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger">Delete</button>
                                            </form>
                                            <a href="{{ route('department.edit', $department->id) }}">
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
            <div>Aucun department</div>
        @endif
    </main>
@endsection
