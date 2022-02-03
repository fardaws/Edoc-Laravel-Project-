@extends('layouts.base')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Gestion human ressources</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Service agent</li>
                    <li class="breadcrumb-item active">List service agent</li>
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
                    @if ($agentsService->count() > 0)
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
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($agentsService as $agentService)
                                    <tr>
                                        <th scope="row"><a href="#">#{{ $agentService->id }}</a></th>
                                        <th scope="row"><a href="#">#{{ $agentService->code }}</a></th>
                                        <td>{{ $agentService->user->first_name }}</td>
                                        <td>{{ $agentService->user->last_name }}</td>
                                        <td>{{ $agentService->user->phone }}</td>
                                        <td>{{ $agentService->user->bidthdate }}</td>
                                        <td>{{ $agentService->user->gender }}</td>
                                        <td>{{ $agentService->user->email }}</td>
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
                        <div>Aucun service agent</div>
                    @endif
                </div>

            </div>
        </div>

    </main>

@endsection
