@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

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
                        <!-- Subject -->
                        <div class="form-group row">
                            <label for="subject" class="col-md-4 col-form-label text-md-right">Subject</label>

                            <div class="col-md-6">
                                <input id="subject" type="text" class="form-control @error('name') is-invalid @enderror" name="subject" value="{{ old('subject') }}" required autocomplete="subject" autofocus>
                            </div>
                        </div>
                        <!-- Subject -->
                        <div class="form-group row">
                            <label for="emel" class="col-md-4 col-form-label text-md-right">Emel</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="emel" value="{{ old('name') }}" required autocomplete="emel" autofocus>
                            </div>
                        </div>
                        <!-- mesej -->
                        <div class="form-group row">
                            <label for="mesej" class="col-md-4 col-form-label text-md-right">Mesej</label>

                            <div class="col-md-6">
                                <textarea class="form-control" name="message"></textarea>
                            </div>
                        </div>
                        <!-- Status -->
<!--                         <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">Status</label>

                            <div class="col-md-6">
                                <input type="radio" name="status" value=1> Aktif
                                <input type="radio" name="status" value=0> Tidak Aktif
                            </div>
                        </div> -->
                        
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
