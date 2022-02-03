@extends('layouts.base')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Gestion human ressources</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">doctors</li>
                    <li class="breadcrumb-item active">List doctors</li>
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
                    @if ($doctors->count() > 0)
                        <table class="table table-borderless datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Code</th>
                                    <th scope="col">First name</th>
                                    <th scope="col">Last name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Birthdate</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Experience</th>
                                    <th scope="col">Departement</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($doctors as $doctor)
                                    <tr>
                                        <th scope="row"><a href="#">#{{ $doctor->id }}</a></th>
                                        <th scope="row"><a href="#">#{{ $doctor->code }}</a></th>
                                        <td>{{ $doctor->user->first_name }}</td>
                                        <td>{{ $doctor->user->last_name }}</td>
                                        <td>{{ $doctor->user->phone }}</td>
                                        <td>{{ $doctor->user->bidthdate }}</td>
                                        <td>{{ $doctor->user->gender }}</td>
                                        <td>{{ $doctor->user->email }}</td>
                                        <td>{{ $doctor->experience_number }}</td>

                                        @if ($doctor->department)
                                            <td>{{ $doctor->department->name }}</td>
                                        @else
                                            <td>non affecte</td>
                                        @endif

                                        <td>
                                            <div class="btn-group" role="group">
                                                <form method="post"
                                                    action=""
                                                    onsubmit="return confirm('etes vous sûre de supprimer?')">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="badge bg-danger">Delete</button>
                                                </form>
                                                <a href="">
                                                    <button class="badge bg-warning">Edit</button>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <div>Aucun doctor</div>
                    @endif
                </div>

            </div>
        </div>
    </main>
@endsection
