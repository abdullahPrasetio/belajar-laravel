@extends('admin.layouts.master')

@section('content')

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="box">
			<div class="box-header">
				<center><h3>{{ $title }}</h3></center>
			</div>
			<div class="box-body">
				<center>
					<p>Terima Jasa Pembuatan System berbasis Web</p>
					<p>Info Lengkap, hubungi :</p>
					<p><b><i>WA : 0877-4146-5953 / 0882-196-82098</i></b></p>
					<p>Fadly Rifai | www.sangcahaya.com</p>
				</center>
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