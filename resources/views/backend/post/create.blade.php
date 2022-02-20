 @extends('backend.layouts.main')

@section('content')
<form method="POST" action="{{route('post.store')}}" enctype="multipart/form-data">
		 @csrf
     <div class="col-md-12">
            <!-- Form Element sizes -->
           <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">New Post</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Heading</label>
                        <input type="text"  name="heading" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                   
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Description</label>
                          
                            <textarea class="ckeditor form-control" rows="10" cols="20" name="description" placeholder="Enter Details....."></textarea>
                      </div>
                        
                      </div>
                    </div>
                  </div>

                   <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Category</label>
                       
                      <select name="category" type="text" class="form-control">
                        <option value="">-- Please select a category --</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                      </select>
                      </div>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Author</label>
                       
                      <select name="author" type="text" class="form-control">
                        <option value="">-- Please select a author --</option>
                        @foreach($authors as $author)
                        <option value="{{$author->id}}">{{$author->name}}</option>
                        @endforeach
                      </select>
                      </div>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" placeholder="select image">
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





















