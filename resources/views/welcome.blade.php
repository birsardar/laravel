
 @extends('frontend.layouts.main')

@section('content')
<ul id="nav">  
  <div id="section" class="box">
    <div id="content">
      <ul class="articles box">
        @foreach($posts as $post)
        <li>
          <h2><a href="{{route('detail', $post->id)}}">{{$post->heading}}</a></h2>
         <div class="article-info box">
            
            <p class="f-left">{{$post->created_at}}| Posted by {{$post->author->name}} | {{$post->category->name}} </p>
          </div>
          <p>
          	{!!strlen($post->description) > 200 ? substr($post->description,0,500) : $post->description!!}
              </p>
          <a href="{{route('detail', $post->id)}}" class="btn btn-info btn-sm">Read More</a>
      
</li>
@endforeach
</ul>
</div>
</div>

</ul>


@endsection