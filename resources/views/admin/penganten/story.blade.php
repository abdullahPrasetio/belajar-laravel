@extends('admin.layouts.master')

@section('content')

<div class="row">

	<div class="col-md-12">
		<div class="box">
			<div class="box-body">

              	<form role="form" action="{{ url('admin/penganten/story') }}" method="post" enctype="multipart/form-data">
              	{{ csrf_field() }}
	              <div class="box-body">

	                <div class="row">
	                	<div class="col-md-6 col-md-offset-3">
	                		<div class="form-group">
			                  <label for="exampleInputFile">Title 1</label>
			                  <input type="text" class="form-control" name="title1" value="{{ $judul->title1 }}">

			                  <!-- <p class="help-block">Example block-level help text here.</p> -->
			                </div>
	                	</div>
	                </div>

	                <div class="row">
	                	<div class="col-md-4 col-md-offset-4">
	                		<div class="form-group">
			                  <label for="exampleInputFile">Title 2</label>
			                  <input type="text" class="form-control" name="title2" value="{{ $judul->title2 }}">

			                  <!-- <p class="help-block">Example block-level help text here.</p> -->
			                </div>
	                	</div>
	                </div>

	                <div class="row">
	                	<div class="col-md-8 col-md-offset-2">
	                		<div class="form-group">
			                  <label for="exampleInputEmail1">Judul</label>
			                  <input type="text" name="judul" value="{{ old('judul') }}" class="form-control" placeholder="Judul">
			                </div>
			                <div class="form-group">
			                  <label for="exampleInputPassword1">Tanggal</label>
			                  <input type="text" name="tanggal" class="form-control" value="{{ old('tanggal') }}" placeholder="Ex: DECEMBER 25, 2015">
			                </div>
			                <div class="form-group">
			                  <label for="exampleInputPassword1">Keterangan</label>
			                  <textarea name="keterangan" class="form-control" rows="10">{{ old('keterangan') }}</textarea>
			                </div>
			                <div class="form-group">
			                  <label for="exampleInputFile">Gambar input</label>
			                  <input type="file" name="image" id="exampleInputFile">

			                  <!-- <p class="help-block">Example block-level help text here.</p> -->
			                </div>
	                	</div>
	                </div>

	              </div>
	              <!-- /.box-body -->

	              <div class="box-footer">
	                <button type="submit" class="btn btn-block btn-primary">Tambah Cerita</button>
	              </div>
	            </form>
            </div>
		</div>
	</div>

</div>

@foreach($data->chunk(3) as $dtChunk)
<div class="row">
	@foreach($dtChunk as $index=>$dt)
	<div class="col-md-4">
		<div class="box">
			<div class="box-header">
				<center><h3>Kisah ke-{{$index+1}}</h3></center>
			</div>
			<div class="box-body">
              <img class="img-responsive pad" src="{{ asset('uploads/'.$dt->gambar) }}" alt="Photo">

              	<form role="form" action="http://localhost/wedding/public/admin/banner/upload/1" method="post" enctype="multipart/form-data">
              	{{ csrf_field() }}
	              <div class="box-body">
	              	<div class="form-group">
	                  <label for="exampleInputEmail1">Judul</label>
	                  <input type="text" name="judul" value="{{ $dt->judul }}" class="form-control" placeholder="Judul">
	                </div>
	                <div class="form-group">
	                  <label for="exampleInputPassword1">Tanggal</label>
	                  <input type="text" name="tanggal" class="form-control" value="{{ $dt->tanggal }}" placeholder="Ex: DECEMBER 25, 2015">
	                </div>
	                <div class="form-group">
	                  <label for="exampleInputPassword1">Keterangan</label>
	                  <textarea name="keterangan" class="form-control" rows="5">{{ $dt->keterangan }}</textarea>
	                </div>
	                <div class="form-group">
	                  <label for="exampleInputFile">Ganti Gambar Banner</label>
	                  <input type="file" name="image" id="exampleInputFile">

	                  <!-- <p class="help-block">Example block-level help text here.</p> -->
	                </div>
	              </div>
	              <!-- /.box-body -->

	              <div class="box-footer">
	                <button type="submit" class="btn btn-primary">Edit</button>
	                <a href="{{ url('admin/penganten/story/delete/'.$dt->story_id) }}" class="btn btn-danger btn-hapus" style="float: right;">Hapus</a>
	              </div>
	            </form>
            </div>
		</div>
	</div>
	@endforeach
</div>
@endforeach

<div class="modal modal-danger fade" id="modal-hapus">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Hapus Story</h4>
      </div>
      <div class="modal-body">
        <p>Yakin Ingin Menghapus Story ini?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
        <a href="" class="btn btn-outline">Yakin</a>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

@endsection

@section('scripts')

<script type="text/javascript">
	$(document).ready(function(){
		var flash = "{{ Session::has('pesan') }}";
		if(flash){
			var pesan = "{{ Session::get('pesan') }}";
			alert(pesan);
		}

		$('.btn-hapus').click(function(e){
			e.preventDefault();
			var url = $(this).attr('href');
			$('#modal-hapus').find('a').attr('href',url);
			$('#modal-hapus').modal();
		});
	});
</script>

@endsection