@extends('admin.layouts.master')

@section('content')

<form action="{{ url('admin/acara') }}" method="post">
{{ csrf_field() }}
{{ method_field('put') }}
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="box">
			<div class="box-body">
				<div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" name="title" value="{{ $tc->title }}" class="form-control" id="exampleInputEmail1">
                </div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<div class="box">
			<div class="box-header">
				<center><h3>Jadwal Akad</h3></center>
			</div>
			<div class="box-body">
				<div class="form-group">
                  <center><label for="exampleInputEmail1">Nama Acara</label></center>
                  <input type="text" name="nama" value="{{ $akad->nama }}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>

                <div class="row">
                	<div class="col-md-6">
                		<div class="form-group">
		                  <center><label for="exampleInputEmail1">Jam Mulai</label></center>
		                  <input type="text" name="jam1" value="{{ $akad->jam1 }}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
		                </div>
		                <div class="form-group">
		                  <center><label for="exampleInputEmail1">Jam Akhir</label></center>
		                  <input type="text" name="jam2" value="{{ $akad->jam2 }}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
		                </div>
                	</div>
                	<div class="col-md-6">
                		<div class="form-group">
		                  <center><label for="exampleInputEmail1">Tanggal - Hari</label></center>
		                  <input type="text" name="tanggal1" value="{{ $akad->tanggal1 }}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
		                </div>
		                <div class="form-group">
		                  <center><label for="exampleInputEmail1">Bulan - Tahun</label></center>
		                  <input type="text" name="tanggal2" value="{{ $akad->tanggal2 }}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
		                </div>
                	</div>
                </div>

                <div class="form-group">
                  <center><label for="exampleInputEmail1">Keterangan</label></center>
                  <textarea class="form-control" name="keterangan" rows="10">{{ $akad->keterangan }}</textarea>
                </div>

			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="box">
			<div class="box-header">
				<center><h3>Jadwal Respsi</h3></center>
			</div>
			<div class="box-body">
				<div class="form-group">
                  <center><label for="exampleInputEmail1">Nama Acara</label></center>
                  <input type="text" name="namaa" value="{{ $resepsi->nama }}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>

                <div class="row">
                	<div class="col-md-6">
                		<div class="form-group">
		                  <center><label for="exampleInputEmail1">Jam Mulai</label></center>
		                  <input type="text" name="jam11" value="{{ $resepsi->jam1 }}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
		                </div>
		                <div class="form-group">
		                  <center><label for="exampleInputEmail1">Jam Akhir</label></center>
		                  <input type="text" name="jam22" value="{{ $resepsi->jam2 }}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
		                </div>
                	</div>
                	<div class="col-md-6">
                		<div class="form-group">
		                  <center><label for="exampleInputEmail1">Tanggal - Hari</label></center>
		                  <input type="text" name="tanggal11" value="{{ $resepsi->tanggal1 }}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
		                </div>
		                <div class="form-group">
		                  <center><label for="exampleInputEmail1">Bulan - Tahun</label></center>
		                  <input type="text" name="tanggal22" value="{{ $resepsi->tanggal2 }}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
		                </div>
                	</div>
                </div>

                <div class="form-group">
                  <center><label for="exampleInputEmail1">Keterangan</label></center>
                  <textarea class="form-control" name="keterangann" rows="10">{{ $resepsi->keterangan }}</textarea>
                </div>

			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="box">
		<div class="box-body">
			
		</div>
		<div class="box-footer">
        	<button type="submit" class="btn btn-block btn-info pull-right">Update</button>
    	</div>
	</div>
</div>
</form>

@endsection

@section('scripts')

<script type="text/javascript">
	$(document).ready(function(){
		var flash = "{{ Session::has('pesan') }}";
		if(flash){
			var pesan = "{{ Session::get('pesan') }}";
			alert(pesan);
		}
	})
</script>

@endsection