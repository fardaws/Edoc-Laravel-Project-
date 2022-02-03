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
        <div class="container">
            <div class="card recent-sales">
                <div class="card-body">
                    @if ($departments->count() > 0)
                        <table class="table table-borderless datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Departement name</th>
                                    <th scope="col">Bloc</th>
                                    <th scope="col">Room number</th>
                                    <th scope="col">Departement chef</th>
                                    <th scope="col">department material manager</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($departments as $department)
                                    <tr>
                                        <th scope="row"><a href="#">#{{ $department->id }}</a></th>
                                        <td>{{ $department->name }}</td>
                                        <td>{{ $department->bloc }}</td>
                                        <td>{{ $department->rooms_number }}</td>
                                        @if ($department->departmentChef)
                                            <td>
                                                {{ $department->departmentChef->user->first_name }}
                                                {{ $department->departmentChef->user->last_name }}
                                            </td>

                                        @else
                                            <td>
                                                Pas encore affecté
                                            </td>
                                        @endif
                                        {{-- {{ dd($department->materielResponsable->toArray()) }} --}}
                                        @if ($department->materielResponsable)
                                            <td>
                                                {{ $department->materielResponsable->user->first_name }}
                                                {{ $department->materielResponsable->user->last_name }}
                                            </td>
                                        @else
                                            <td>
                                                Pas encore affecté
                                            </td>
                                        @endif
                                        <td>
                                            <div class="btn-group" role="group">
                                                <form method="post"
                                                    action="{{ route('department.destroy', $department->id) }}"
                                                    onsubmit="return confirm('etes vous sûre de supprimer?')">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="badge bg-danger">Delete</button>
                                                </form>
                                                <a href="{{ route('department.edit', $department->id) }}">
                                                    <button class="badge bg-warning">Edit</button>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <div>Aucun department</div>
                    @endif
                </div>

            </div>
        </div>
    </main>
@endsection
