@extends('admin.layouts.master')

@section('content')

<form action="{{ url('admin/jasa') }}" method="POST" enctype="multipart/form-data" class="form-jasa">
{{ csrf_field() }}
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="box">
			<div class="box-header">
				
			</div>
			<div class="box-body">
				<div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" name="title" class="form-control" value="{{ $judul->title }}">
                </div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-4">
		<div class="box">
			<div class="box-header">
				<center><h3>Jasa Tenda</h3></center>
			</div>
			<div class="box-body">
				<div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" name="namaTenda" class="form-control" value="{{ $tenda->nama }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Keterangan</label>
                  <textarea name="keteranganTenda" class="form-control" rows="10">{{ $tenda->keterangan }}</textarea>
                </div>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="box">
			<div class="box-header">
				<center><h3>Jasa Rias</h3></center>
			</div>
			<div class="box-body">
				<div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" name="namaRias" class="form-control" value="{{ $rias->nama }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Keterangan</label>
                  <textarea class="form-control" name="keteranganRias" rows="10">{{ $rias->keterangan }}</textarea>
                </div>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="box">
			<div class="box-header">
				<center><h3>Jasa Photo</h3></center>
			</div>
			<div class="box-body">
				<div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" name="namaPhoto" class="form-control" value="{{ $photo->nama }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Keterangan</label>
                  <textarea class="form-control" name="keteranganPhoto" rows="10">{{ $photo->keterangan }}</textarea>
                </div>
			</div>
		</div>
	</div>
	<div class="box-footer">
    	<button type="submit" class="btn btn-block btn-primary">Update</button>
  	</div>
</div>
</form>

<meta name="csrf-token" content="{{ csrf_token() }}">

@endsection

@section('scripts')

<script type="text/javascript">
	$(document).ready(function(){
		var flash = "{{ Session::has('pesan') }}";
		if(flash){
			var pesan = "{{ Session::get('pesan') }}";
			alert(pesan);
		}

		$("button[type='submit']").click(function(e){
			e.preventDefault();

			$.ajax({
				headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    },
		        type: "POST",
		        url: "{{ url('admin/jasa') }}",
		        data: $('.form-jasa').serialize(),
		        success: function(msg) {
		        	console.log(msg);
		        	alert('Data Berhasil di Update');
		        },
		        error:function(jqXHR, status, err){
		        	alert('Error');
		        }
		    });
		})
	})
</script>

@endsection