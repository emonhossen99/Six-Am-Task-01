
@extends('layout.frontend')
@section('title','User Dashboard')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="bg-info text-dark text-center">
                    <h1 class="py-5 px-3">Welcome To User Dashboard</h1>
                    <a class="btn btn-danger mb-5" onclick="document.getElementById('logout-form').submit()">Log out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
