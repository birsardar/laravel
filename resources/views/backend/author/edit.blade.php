 @extends('backend.layouts.main')

@section('content')
<form method="POST" action="{{route('author.update',$authors->id)}}" enctype="multipart/form-data">
     @csrf          
              @method("PATCH")
     <div class="col-md-12">
            <!-- Form Element sizes -->
           <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">EDIT POST</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text"  name="name" class="form-control" value="{{$authors->name}}">
                      </div>
                    </div>
                   
                  </div>
                  

                       <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        
                        <input type="submit" value="submit" >
                      </div>
                    </div>
                  </div>
                 
                </form>
              </div>
@endsection





















