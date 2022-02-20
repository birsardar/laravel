 @extends('backend.layouts.main')

@section('content')
<form method="POST" action="{{route('post.update',$posts->id)}}" enctype="multipart/form-data">
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
                        <label>Heading</label>
                        <input type="text"  name="heading" class="form-control" value="{{$posts->heading}}">
                      </div>
                    </div>
                   
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Description</label>
                          <textarea class="ckeditor form-control" rows="10" cols="20" name="description" >
                            {{$posts->description}} 
                        </textarea>
                        
                      </div>
                    </div>
                  </div>

                   <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Category</label>
                            <select name="category" type="text" class="form-control">
                              <option value="">-- Please select a category --</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}" {{$posts->category_id == $category->id ? 'selected' : '' }}>{{$category->name}}</option>
                            @endforeach
                            </select>
                      </div>
                    
                  </div>
                </div>
                   <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Image</label>
                        <div>
                           <img src="{{asset('images')}}/{{$posts->image}}" style="height: 50px;" >

                        <input type="file" name="image" class="form-control"  value="{{$posts->image}}">
                       </div>
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





















