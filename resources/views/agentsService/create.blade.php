@extends('layouts.base')

@section('content')
    <main id="main" class="main mb-5">
        <div class="pagetitle">
            <h1>create service agent</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">service agent</li>
                    <li class="breadcrumb-item active">Create service agent</li>
                </ol>
            </nav>
        </div>
        <div class="container form-div mb-5">
            <form action="{{ route('agentService.store') }}" method="POST">
                @csrf
                <div class="row mt-3">
                    <div class="input-group input-group-icon">
                        <input type="text" name="code" id="code" placeholder="code" required />
                        <div class="input-icon"><i class="fas fa-hospital-alt"></i></div>
                    </div>
                    <input type="hidden" value="{{ $last->id }}" id="user_id" name="user_id">
                    <div class="text-center mt-2">
                        <button type="submit" class="button">Save</button>
                    </div>
            </form>
        </div>
    </main>
@endsection
