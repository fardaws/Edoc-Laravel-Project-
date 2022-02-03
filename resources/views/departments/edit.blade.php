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
            <form action="{{ route('department.update', $department->id) }}" method="POST">
                @method('put')
                @csrf
                <div class="row mt-3">
                    <div class="input-group input-group-icon">
                        <input type="text" name="name" id="name" value="{{ $department->name }}"
                            placeholder="Department name" required />
                        <div class="input-icon"><i class="fas fa-hospital-alt"></i></div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-group input-group-icon">
                                <input type="text" name="bloc" id="bloc" value="{{ $department->bloc }}" placeholder="Bloc" required />
                                <div class="input-icon"><i class="fab fa-buysellads"></i></div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group input-group-icon">
                                <input type="number" name="rooms_number" id="rooms_number" value="{{ $department->rooms_number }}" placeholder="Rooms numver"
                                    required />
                                <div class="input-icon"><i class="fas fa-list-ol"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="input-group input-group-icon">
                        <select style="width: 100%" name="department_chef_id" id="department_chef_id" required>
                            <option disabled selected class="text-muted">Department chef</option>
                            @if ($doctors)
                                @foreach ($doctors as $doctor)
                                    <option value="{{ $doctor->id}}">
                                        {{ $doctor->user->first_name }}
                                        {{ $doctor->user->last_name }}
                                    </option>
                                @endforeach
                            @endif
                        </select>
                        <div class="input-icon"><i class="fas fa-hospital-user"></i></div>
                    </div>

                    <div class="input-group input-group-icon">
                        <select style="width: 100%" name="materiel_Responsable_id" id="materiel_Responsable_id" required>
                            <option disabled selected class="text-muted">Department material manager</option>
                            @foreach ($agentServices as $agentService)
                                <option value="{{ $agentService->id }}">
                                    {{ $agentService->user->first_name }}
                                    {{ $agentService->user->last_name }}
                                </option>
                            @endforeach
                        </select>
                        <div class="input-icon"><i class="fas fa-person-booth"></i></div>
                    </div>
                </div>
                <div class="text-center mt-2">
                    <button type="submit" class="button">save</button>
                </div>
            </form>
        </div>
    </main>
@endsection
