@extends('admin.layouts.master')
@section('title','team view page')
@section('style')

@endsection
@section('content')

  

    <div id="content-wrapper">
<!----insert form---->
      <div class="container-fluid">
		<div class="row">

			<div class="col-md-10">
				<div class="card">
					<div class="card-header">This is about {{$member->name}}</div>
					<div class="card-body">
									<table class="table table-bordered">
								
                  <tr>
                    <th>Image</th>
                    <th><img src="{{env('PUBLIC_PATH')}}/{{$member->image}}" style="width: 100px; height: 100px;"></th>
                  </tr>
                  <tr>
                    <th>Name</th>
                    <th><h4>{{$member->name}}</h4></th>
                  </tr>
                  <tr>
                    <th>Email</th>
                    <th>{{$member->email}}</th>
                  </tr>
                  <tr>
                    <th>Phone</th>
                    <th>{{$member->phone}}</th>
                  </tr>
                  <tr>
                    <th>Designation</th>
                    <th>{{$member->designation}}</th>
                  </tr>
                  <tr>
                    <th>Address</th>
                    <th>{{$member->address}}</th>
                  </tr>
                  <tr>
                    <th>Expertise</th>
                    <th>{{$member->expertise}}</th>
                  </tr>
                  <tr>
                    <th>Details</th>
                    <th>{{$member->details}}</th>
                  </tr>
                
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
