@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Senarai Item</div>

                <div class="card-body">
                    <a href="{{ route('item') }}" class="btn btn-primary" style="margin-bottom: 10px;">Tambah</a>
                	<table class="table table-bordered">
                		<tr>
                			<td>No</td>
                			<td>Nama</td>
                			<td>Description</td>
                			<td>Status</td>
                			<td>Harga</td>
                			<td>Tindakan</td>
                		</tr>
                		<?php foreach ($items as $keyItem => $valueItem): ?>
                		<tr>
                			<td>{{ $keyItem+1 }}</td>
                			<td>{{ $valueItem->name }}</td>
                			<td>{!! nl2br($valueItem->description) !!}</td>
                			<td>{{ $valueItem->status }}</td>
                			<td>{{ $valueItem->price }}</td>
                			<td>
                				<a class="btn btn-success btn-primary btn-xs" href="{{ route('item.form',$valueItem->item_id) }}" style="margin-bottom:10px;">KEMASKINI</a>
                				<br>
                				<a class="btn btn-success btn-danger btn-xs" href="javascript:;">PADAM</a>
                			</td>
                		</tr>
                		<?php endforeach ?>
                	</table>

            	</div>
        	</div>
    	</div>
	</div>
</div>

@endsection