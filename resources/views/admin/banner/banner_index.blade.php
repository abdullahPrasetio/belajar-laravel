@extends('admin.layouts.master')

@section('content')

<div class="row">

	<div class="col-md-4">
		<div class="box">
			<div class="box-body">
              <img class="img-responsive pad" src="{{asset('uploads/'.$data->gambar)}}" alt="Photo">

              	<form role="form" action="{{ url('admin/banner/upload/'.$data->banner_id) }}" method="post" enctype="multipart/form-data">
              	{{ csrf_field() }}
	              <div class="box-body">
	                <div class="form-group">
	                  <label for="exampleInputFile">Ganti Gambar Banner</label>
	                  <input type="file" name="image" id="exampleInputFile">

	                  <!-- <p class="help-block">Example block-level help text here.</p> -->
	                </div>
	              </div>
	              <!-- /.box-body -->

	              <div class="box-footer">
	                <button type="submit" class="btn btn-primary">Upload</button>
	              </div>
	            </form>
            </div>
		</div>
	</div>

	<div class="col-md-8">
		<div class="box">
			<div class="box-body">

              	<form role="form" action="{{ url('admin/banner') }}" method="post">
              	{{ csrf_field() }}
	              <div class="box-body">

	                <div class="row">
	                	<div class="col-md-6">
	                		<div class="form-group">
			                  <label for="exampleInputEmail1">Nama Pengantin 1</label>
			                  <input type="text" name="nama1" value="{{ $data->nama1 }}" class="form-control" placeholder="Nama Pengantin 1">
			                </div>
	                	</div>
	                	<div class="col-md-6">
	                		<div class="form-group">
			                  <label for="exampleInputEmail1">Nama Pengantin 2</label>
			                  <input type="text" name="nama2" value="{{ $data->nama2 }}" class="form-control" placeholder="Nama Pengantin 2">
			                </div>
	                	</div>
	                </div>

	                <div class="form-group">
	                  <label for="exampleInputPassword1">title</label>
	                  <input type="text" class="form-control" value="{{ $data->title }}" name="title" placeholder="Ex: We Are Getting Married">
	                </div>

	                <div class="form-group">
	                  <label for="exampleInputPassword1">Waktu Mundur / Tanggal Acara</label>
	                  <input type="text" class="form-control" value="{{ $data->waktu_mundur }}" name="waktu_mundur" placeholder="Ex: We Are Getting Married">
	                  <p class="help-block">Format : Feb 2, 2019 08:00:00</p>
	                </div>

	              </div>
	              <!-- /.box-body -->

	              <div class="box-footer">
	                <button type="submit" class="btn btn-primary">Update</button>
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