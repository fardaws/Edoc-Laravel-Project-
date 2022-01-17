@extends('layouts.base')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Gestion department</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Department</li>
                    <li class="breadcrumb-item active">Edit department</li>
                </ol>
            </nav>
        </div>
        <div class="container form-div mb-5">
            <form action="{{ route('ressources.update', $ressource->id) }}" method="POST">
                @method('put')
                @csrf
                <div class="row mt-3">
                    <div class="input-group input-group-icon">
                        <input type="text" name="name" id="name" value="{{ $ressource->name }}" placeholder="Ressource name" required />
                        <div class="input-icon"><i class="fas fa-ambulance"></i></div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <div class="input-group input-group-icon">
                                <input type="number" name="reference" id="reference" value="{{ $ressource->reference }}" placeholder="Reference" required />
                                <div class="input-icon"><i class="fas fa-hashtag"></i></div>
                            </div>
                        </div>
                        <div class="input-group input-group-icon col">
                            <select style="width: 100%" name="department_id" id="department_id" required>
                                <option disabled selected class="text-muted">Department name</option>
                                @foreach ($departments as $department)
                                    <option value="{{ $department->id }}">
                                        {{ $department->name }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="input-icon"><i class="fas fa-hospital-user"></i></div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-2">
                    <button type="submit" class="button">save</button>
                </div>
            </form>
        </div>
    </main>
@endsection
