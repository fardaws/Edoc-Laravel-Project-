@extends('layouts.base')

@section('content')
    <main id="main" class="main mb-5">
        <div class="pagetitle">
            <h1>create doctor</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Doctor</li>
                    <li class="breadcrumb-item active">Create doctor</li>
                </ol>
            </nav>
        </div>

        <div class="container form-div mb-5">
            <form action="{{ route('doctors.store') }}" method="POST">
                @csrf
                <div class="row mt-3">
                    <div class="row">
                        <div class="col">
                            <div class="input-group input-group-icon">
                                <input type="text" name="code" id="code" placeholder="code" required />
                                <div class="input-icon"><i class="fas fa-hospital-alt"></i></div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group input-group-icon">
                                <input type="number" name="experience_number" id="experience_number"
                                    placeholder="Experience" required />
                                <div class="input-icon"><i class="fas fa-hospital-alt"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="input-group input-group-icon">
                        <select style="width: 100%" name="department_id" id="department_id">
                            <option disabled selected class="text-muted">Department name</option>
                            @foreach ($departments as $department)
                                <option value="{{ $department->id }}">
                                    {{ $department->name }}
                                </option>
                            @endforeach
                        </select>
                        <div class="input-icon"><i class="fas fa-hospital-user"></i></div>
                    </div>
                    <input type="hidden" value="{{ $last->id }}" id="user_id" name="user_id">
                    <div class="text-center mt-2">
                        <button type="submit" class="button">Save</button>
                    </div>
            </form>
        </div>
    </main>

@endsection
