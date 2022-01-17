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
        @if ($agentsService->count() > 0)
            <div class="table100 ver5 m-b-110">
                <div class="table100-head">
                    <table>
                        <thead>
                            <tr class="row100 head">
                                <th class="cell100 column2 fw-bold ps-2">Code</th>
                                <th class="cell100 column2 fw-bold">First name</th>
                                <th class="cell100 column2 fw-bold">Last name</th>
                                <th class="cell100 column2 fw-bold ps-4">Phone</th>
                                <th class="cell100 column2 fw-bold ps-4">Birthdate</th>
                                <th class="cell100 column2 fw-bold">Gender</th>
                                <th class="cell100 column2 fw-bold ">Email</th>
                                <th class="cell100 column1 fw-bold text-center">Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>

                <div class="table100-body js-pscroll">
                    <table>
                        <tbody>
                            @foreach ($agentsService as $agentService)
                                <tr class="row100 body p-5">
                                    <td class="cell100 column2 ps-2">{{ $agentService->code }}</td>
                                    <td class="cell100 column2">{{ $agentService->user->first_name }}</td>
                                    <td class="cell100 column2">{{ $agentService->user->last_name }}</td>
                                    <td class="cell100 column2">{{ $agentService->user->phone }}</td>
                                    <td class="cell100 column2">{{ $agentService->user->bidthdate }}</td>
                                    <td class="cell100 column2 ps-5">{{ $agentService->user->gender }}</td>
                                    <td class="cell100 column2 ">{{ $agentService->user->email }}</td>
                                    <td class="cell100 column1 text-center">
                                        <div class="btn-group" role="group">
                                            <form action="" method="post">
                                                @csrf
                                                <button class="btn btn-danger">Delete</button>
                                            </form>
                                            <button class="btn btn-warning">Edit</button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <div>Aucun doctor</div>
        @endif

    </main>
@endsection
