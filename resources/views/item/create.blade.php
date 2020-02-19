@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Item</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('item') }}">
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
                        <!-- Keterangan -->
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Keterangan</label>

                            <div class="col-md-6">
                            	<textarea class="form-control" name="description"></textarea>
                        	</div>
                    	</div>
                    	<!-- Status -->
                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">Status</label>

                            <div class="col-md-6">
                            	<input type="radio" name="status" value=1> Aktif
                            	<input type="radio" name="status" value=0> Tidak Aktif
                        	</div>
                    	</div>
                    	<!-- Harga -->
                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">Harga</label>

                            <div class="col-md-6">
                            	<select class="form-control" name="price">
                            		<option value="10">10</option>
                            		<option value="20">20</option>
                            		<option value="30">30</option>
                            		<option value="40">40</option>
                            		<option value="50">50</option>
                            	</select>
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