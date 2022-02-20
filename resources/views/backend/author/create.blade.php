 @extends('backend.layouts.main')

@section('content')
<form method="POST" action="{{route('author.store')}}" enctype="multipart/form-data">
		 @csrf
     <div class="col-md-12">
            <!-- Form Element sizes -->
           <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">New Auther</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Name </label>
                        <input type="text"  name="name" class="form-control" placeholder="Enter Authers Name">
                      </div>
                    </div>
                   
                  </div>
                
                 

                       <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        
                        <input type="submit" value="submit" >
                      </div>
                    </div>
                  </div>

                 
                </form>
              </div>

@endsection





















