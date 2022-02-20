 @extends('backend.layouts.main')

@section('content')

<div class="col-sm-6">
            
            <a href="{{route('category.create')}}" type="button" class="btn btn-block btn-success">Add New category</a>
  </div>
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List of Posts</h3>

              
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>S.N</th>
                      <th>Category_Name</th>
                     
                    </tr>
                  </thead>
                   @foreach($categories as $category)
                  <tbody>
                   
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$category->name}}</td>
                    
                    
                      <td>
                         <a href="{{route('category.edit',$category->id)}}"><input type="submit" value="Edit"> </a>
                           <form method="POST" action="{{route('category.destroy', $category->id)}}">
                             @csrf
                             @method('DELETE')
                             <input type="submit" value="Delete">
                           </form>
                        </td>
                   
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        



@endsection















