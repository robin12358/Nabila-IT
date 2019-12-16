@extends('admin.layouts.master')
@section('title','Slider page')
@section('style')

@endsection
@section('content')

  

    <div id="content-wrapper">
<!----insert form---->
      <div class="container-fluid">
		<div class="row">
  {!! Toastr::message() !!}
			<div class="col-md-10">
				<div class="card">
					<div class="card-header">All Slider:<!-- Button trigger modal -->
			</div>
					<div class="card-body">
								 {{Form::open(['url'=>"/slider/$slider->slider_id",'method'=>'put','files'=>true,'class'=>'forms-sample'])}}
  <div class="form-group">
    {{Form::label('title','Title')}}
	{{Form::text('title',$slider->title,['class'=>'form-control','placeholder'=>'Title'])}}
  </div>
  <div class="form-group">
    {{Form::label('subtitle','Subtitle')}}
	{{Form::text('subtitle',$slider->subtitle,['class'=>'form-control','placeholder'=>'Subtitle...'])}}
  </div>
  <div class="form-group">
    {{Form::label('image','Image')}}
    {{Form::file('image',['class'=>'form-control','id'=>'image'])}}
    {{form::hidden('image',$slider->image)}}
  </div>
  <button type="submit" class="btn btn-success mx-3">Update</button>
 {{Form::close()}}

					</div>
					
				</div>
			</div>
		</div>	
		<!--end form---->	


      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer ">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->






@endsection

@section('script')

@endsection
