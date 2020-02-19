@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Senarai Item</div>

                <div class="card-body">

                    <a href="{{ route('item') }}" class="btn btn-primary">Tambah</a>
                    <br><br>

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
                			<td>
                                <?php if ($valueItem->status): ?>
                                    Aktif
                                <?php else: ?>
                                    Tidak Aktif
                                <?php endif ?>
                                <!-- {{ $valueItem->status }} -->
                            </td>
                			<td>{{ $valueItem->price }}</td>
                			<td>
                				<a class="btn btn-success btn-primary btn-xs" href="{{ route('item.form',$valueItem->item_id) }}" style="margin-bottom:10px">KEMASKINI</a>
                				<br>
<a class="btn btn-success btn-danger btn-xs" href="javascript:;" onclick="remove({{ $valueItem->item_id }})">PADAM</a>
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

@push('js')
<script type="text/javascript">
    
    function remove(id) {

    swal({
        title: "Padam Data",
        text: "Data yang telah dipadam tidak boleh dikembalikan. Teruskan?",
        icon: "warning",
        buttons: ["Batal", { text: "Padam", closeModal: false }],
        dangerMode: true,
    })
    .then((confirm) => {
        if (confirm) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('item') }}/form/"+id,
                method: 'delete',
                dataType: 'json',
                async: true,
                contentType: false,
                processData: false,
                success: function(data) {
                    swal(data.title, data.message, data.status);
                    // table.api().ajax.reload(null, false);
                    location.reload();
                }
            });
        }
    });

}


</script>

@endpush