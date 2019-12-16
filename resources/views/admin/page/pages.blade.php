@extends('admin.layouts.master')
@section('title','Pages')
@section('style')

@endsection
@section('content')
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
  

    <div id="content-wrapper">
<!----insert form---->
      <div class="container-fluid">
		<div class="row">

			<div class="col-md-10">
				<div class="card">
		
					<div class="card-header">
									<div class="row">All Page:<!-- Button trigger modal -->
			     {{Form::open(['url'=>"/page/create",'method'=>'GET'])}}
                                            <button class="btn btn-info mx-3">Create A Page</button>
                                            {{Form::close()}}
                                        </div></div>
					<div class="card-body">
									<table class="table table-bordered">
								<thead>
                  <tr>
                    <th>title</th>
                    <th>status</th>
                    <th>action</th>
                  </tr>
                </thead>
                <tbody>
                 	@foreach($page as $value)
                  <tr id='{{$value->slider_id}}'>

                    <td>{{$value->title}}</td>
                    <td>@if($value->status == 1 )
                    	<a type="button"  class="btn btn-info">Active</a>
                    	@else
                    	<a type="button"  class="btn btn-warning">Unactive</a>
						@endif</td>
                      <td class="button-td">
                        <div class="row"> <div class="ml-2" >
                                            {{Form::open(['url'=>"/page/$value->page_id",'method'=>'DELETE'])}}
                                            <button onclick="return confirm('Are you sure?')" class="button btn btn-danger"><i class="far fa-trash-alt"></i></button>
                                            {{Form::close()}}
                                          </div>
                                          <div class="ml-2">
                                            {{Form::open(['url'=>"/page/$value->page_id/edit",'method'=>'GET'])}}
                                            <button class="button btn btn-info"><i class="far fa-edit"></i></button>
                                            {{Form::close()}}
                                          </div>
                        </div>
                                        </td>
                  </tr>
                  	@endforeach
                   
                 
                </tbody>
						</table>
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
