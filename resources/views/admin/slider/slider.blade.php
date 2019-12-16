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
					<div class="card-header">All Slider (Those Object Are Sortable) :<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModalLong">
				Create A New Slider
			</button></div>
					<div class="card-body">
									<table class="table table-bordered">
								<thead>
                  <tr>
                    <th>image</th>
                    <th>title</th>
                    <th>status </th>
                    <th>action</th>
                  </tr>
                </thead>
                <tbody id="sortable_list">
                	@foreach($slider as $value)
                  <tr id='{{$value->slider_id}}'>
                    <td><img src="{{env('PUBLIC_PATH')}}/{{ $value->image }}" style="width: 50px; height:50px;"></td>
                    <td>{{$value->title}}</td>
                    <td>@if($value->status == 1 )
                    	<a type="button" href="{{route('admin.slider.status',$value->slider_id)}}" class="btn btn-info">Active</a>
                    	@else
                    	<a type="button" href="{{route('admin.slider.status',$value->slider_id)}}" class="btn btn-warning">Unactive</a>
						@endif</td>
                      <td class="button-td">
                        <div class="row"> <div class="ml-2" >
                                            {{Form::open(['url'=>"/slider/$value->slider_id",'method'=>'DELETE'])}}
                                            <button onclick="return confirm('Are you sure?')" class="button btn btn-danger"><i class="far fa-trash-alt"></i></button>
                                            {{Form::close()}}
                                          </div>
                                          <div class="ml-2">
                                            {{Form::open(['url'=>"/slider/$value->slider_id/edit",'method'=>'GET'])}}
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
					<div class="card-footer"><button type="button"  id="count" class="btn btn-success">
				Count Position
			</button></div>
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





<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Create A New Slider</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <!--::::::::validation msg:::::::-->
  {{Form::open(['url'=>'/slider','files'=>true,'class'=>'forms-sample'])}}
  <div class="form-group">
    {{Form::label('title','Title')}}
	{{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
  </div>
  <div class="form-group">
    {{Form::label('subtitle','Subtitle')}}
	{{Form::text('subtitle','',['class'=>'form-control','placeholder'=>'Subtitle...'])}}
  </div>
  <div class="form-group">
        {{Form::label('image','Member Image')}}
		{{Form::file('image',['class'=>'form-control','id'=>'profile-img'])}}
  </div>
  <button type="submit" class="btn btn-success mx-3">Submit</button><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
 {{Form::close()}}
      </div>
      <div class="modal-footer">
        
        
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
	 $(document).ready(function() {
	 	
$('#sortable_list').sortable();

     $('#count').on('click',function() {


   
var itemOrder = $('#sortable_list').sortable("toArray");

   
                for (var i = 0; i < itemOrder.length; i++) {
                    // alert("Position: " + i + " ID: " + itemOrder[i]);
                    const URL = baseURL + '/sliderposition';
                    $.ajax({
                        url: URL,
                        type: 'POST',
                        data:{
                            "_token": "{{csrf_token()}}",
                            "id": itemOrder[i],
                            "position":  i,
                        }
                    });
                }

            })


        });
</script>
@endsection
