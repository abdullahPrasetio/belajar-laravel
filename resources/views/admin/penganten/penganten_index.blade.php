@extends('admin.layouts.master')

@section('content')

<div class="row">

	<div class="col-md-12">
		<div class="box">
			<div class="box-body">

              	<form role="form" action="{{ url('admin/penganten') }}" method="post" enctype="multipart/form-data">
              	{{ csrf_field() }}
	              <div class="box-body">

	                <div class="row">
	                	<div class="col-md-4 col-md-offset-4">
	                		<div class="form-group">
			                  <label for="exampleInputFile">Salam</label>
			                  <input type="text" class="form-control" name="salam" value="{{ $data->salam }}">

			                  <!-- <p class="help-block">Example block-level help text here.</p> -->
			                </div>
	                	</div>
	                </div>

	                <div class="row">
	                	<div class="col-md-6 col-md-offset-3">
	                		<div class="form-group">
			                  <label for="exampleInputFile">Tanggal Acara</label>
			                  <input type="text" class="form-control" name="tanggal" value="{{ $data->tanggal }}">

			                  <!-- <p class="help-block">Example block-level help text here.</p> -->
			                </div>
	                	</div>
	                </div>

	                <div class="row">
	                	<div class="col-md-4 col-md-offset-4">
	                		<div class="form-group">
			                  <label for="exampleInputFile">Title</label>
			                  <input type="text" class="form-control" name="title" value="{{ $data->title }}">

			                  <!-- <p class="help-block">Example block-level help text here.</p> -->
			                </div>
	                	</div>
	                </div>

	                <div class="row">

	                	<div class="col-md-6">
	                		<center>
	                			<img style="width: 150px;" class="img-responsive pad" src="{{asset('uploads/'.$data->gambar1)}}" alt="Photo">
	                		</center>

	                		<div class="form-group">
			                  <label for="exampleInputFile">Nama Penganten 1</label>
			                  <input type="text" class="form-control" name="nama1" value="{{ $data->nama1 }}">

			                  <!-- <p class="help-block">Example block-level help text here.</p> -->
			                </div>

			                <div class="form-group">
			                  <label for="exampleInputFile">Keterangan</label>
			                  <textarea name="keterangan1" class="form-control" rows="10">{{ $data->keterangan1 }}</textarea>

			                  <!-- <p class="help-block">Example block-level help text here.</p> -->
			                </div>

			                <div class="form-group">
			                  <label for="exampleInputFile">Ganti Gambar Penganten</label>
			                  <input type="file" name="gambar1" id="exampleInputFile">

			                  <!-- <p class="help-block">Example block-level help text here.</p> -->
			                </div>
	                	</div>

	                	<div class="col-md-6">
	                		<center>
	                			<img style="width: 150px;" class="img-responsive pad" src="{{asset('uploads/'.$data->gambar2)}}" alt="Photo">
	                		</center>

	                		<div class="form-group">
			                  <label for="exampleInputFile">Nama Penganten 2</label>
			                  <input type="text" class="form-control" name="nama2" value="{{ $data->nama2 }}">

			                  <!-- <p class="help-block">Example block-level help text here.</p> -->
			                </div>

			                <div class="form-group">
			                  <label for="exampleInputFile">Keterangan</label>
			                  <textarea name="keterangan2" class="form-control" rows="10">{{ $data->keterangan2 }}</textarea>

			                  <!-- <p class="help-block">Example block-level help text here.</p> -->
			                </div>

			                <div class="form-group">
			                  <label for="exampleInputFile">Ganti Gambar Penganten</label>
			                  <input type="file" name="gambar2" id="exampleInputFile">

			                  <!-- <p class="help-block">Example block-level help text here.</p> -->
			                </div>
	                	</div>

	                </div>

	              </div>
	              <!-- /.box-body -->

	              <div class="box-footer">
	                <button type="submit" class="btn btn-block btn-primary">Upload</button>
	              </div>
	            </form>
            </div>
		</div>
	</div>

</div>

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