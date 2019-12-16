@extends('admin.layouts.master')
@section('title','Course_Subject')
@section('style')

@endsection
@section('content')
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
  

    <div id="content-wrapper">
<!----insert form---->
      <div class="container-fluid">
		<div class="row">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif  
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">Create A Page:<!-- Button trigger modal -->
			</div>
					<div class="card-body">
  {{Form::open(['url'=>'/page','files'=>true,'class'=>'forms-sample'])}}
  <div class="form-group">
    {{Form::label('title','Title')}}
	{{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
  </div>
 <div class="form-group">
 	{{Form::label('description','Description')}}
    {{Form::textarea('description','',['class'=>'form-control','placeholder'=>'Description'])}}
  </div>
  <button type="submit" class="btn btn-success mx-3">Create</button><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
 <script>
                        CKEDITOR.replace( 'description' );
                        
                </script>
@endsection
