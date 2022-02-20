 @extends('backend.layouts.main')

@section('content')
<div class="col-sm-6">
            
            <a href="{{route('author.create')}}" type="button" class="btn btn-block btn-success">Add New Author</a>
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
                      <th>Author_Name</th>
                     
                    </tr>
                  </thead>
                   @foreach($authors as $author)
                  <tbody>
                   
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$author->name}}</td>
                               
                      <td>
                         <a href="{{route('author.edit',$author->id)}}"><input type="submit" value="Edit"> </a>
                           <form method="POST" action="{{route('author.destroy', $author->id)}}">
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















