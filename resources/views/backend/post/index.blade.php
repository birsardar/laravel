 @extends('backend.layouts.main')

@section('content')

<div class="col-sm-6">
            
            <a href="{{route('post.create')}}" type="button" class="btn btn-block btn-success">Add New Post</a>
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
                      <th>Heading</th>
                      <th>Description</th>
                      <th>Image</th>
                      <th>Category</th>
                      <th>Authors</th>
                      <th>Date of Created</th>
                    </tr>
                  </thead>
                   @foreach($posts as $post)
                  <tbody>
                   
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$post->heading}}</td>
                      <td>{!!strlen($post->description) > 200 ? substr($post->description,0,50) : $post->description!!}</td>
                      <td><img src="{{asset('images')}}/{{$post->image}}" style="height: 80px;"></td>
                      <td>{{$post->author->name}}</td>
                      <td>{{$post->category->name}}</td>
                      <td>{{$post->created_at}}</td>
                      <td>
                         <a href="{{route('post.edit',$post->id)}}"><input type="submit" value="Edit"> </a>
                           <form method="POST" action="{{route('post.destroy', $post->id)}}">
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















