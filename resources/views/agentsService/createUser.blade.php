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
            <form action="{{ route('agentService.storeUser') }}" method="POST">
                @csrf
                <div class="row mt-3">
                    <div class="row">
                        <div class="col">
                            <div class="input-group input-group-icon">
                                <input type="text" name="first_name" id="first_name" placeholder="First name" required />
                                <div class="input-icon"><i class="fas fa-hospital-alt"></i></div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group input-group-icon">
                                <input type="text" name="last_name" id="last_name" placeholder="Last name" required />
                                <div class="input-icon"><i class="fas fa-hospital-alt"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-group input-group-icon">
                                <input type="text" name="phone" id="phone" placeholder="Phone" required />
                                <div class="input-icon"><i class="fab fa-buysellads"></i></div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <p class="ps-3 pt-2">Gender</p>
                                </div>
                                <div class="col pt-1">
                                    F <input class="form-check-input" type="radio" name="gender" id="gender" value="F">
                                    M <input class="form-check-input" type="radio" name="gender" id="gender" value="M">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-group input-group-icon">
                                <input type="date" class="" name="bidthdate" id="bidthdate" required />
                                <div class="input-icon"><i class="fas fa-hospital-alt"></i></div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group input-group-icon">
                                <input type="file" class="" name="avatar" id="avatar" />
                                <div class="input-icon"><i class="fas fa-hospital-alt"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-group input-group-icon">
                                <input type="email" name="email" id="email" placeholder="Email" required />
                                <div class="input-icon"><i class="fas fa-hospital-alt"></i></div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group input-group-icon">
                                <input type="text" name="password" id="password" placeholder="Password" required />
                                <div class="input-icon"><i class="fas fa-hospital-alt"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-2 row">
                    <button type="submit" class="button">Continue</button>
                </div>
            </form>
        </div>
    </main>

@endsection
