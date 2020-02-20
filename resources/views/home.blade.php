@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Feedback Form</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <br> Kindly fill in the form below to contact us

                    <br>

                    <form method="POST" action="{{ route('home') }}">
                        @csrf
                        <!-- Nama -->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nama</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- Emel -->
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Emel</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" required autofocus>
                            </div>
                        </div>
                        <!-- Subjek -->
                        <div class="form-group row">
                            <label for="subject" class="col-md-4 col-form-label text-md-right">Subjek</label>

                            <div class="col-md-6">
                                <input id="subject" type="text" class="form-control" name="subject" required autofocus>
                            </div>
                        </div>
                        <!-- Mesej -->
                        <div class="form-group row">
                            <label for="message" class="col-md-4 col-form-label text-md-right">Mesej</label>

                            <div class="col-md-6">
                                <textarea class="form-control" name="message"></textarea>
                            </div>
                        </div>
                        <!-- Submit Button -->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Hantar
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
