
 @extends('frontend.layouts.main')

@section('content')
<ul id="nav">  
  <div id="section" class="box">
    <div id="content">
      <ul class="articles box">
        @foreach($posts as $post)
        <li>
          <h2>{{$post->heading}}</h2>
         <div class="article-info box">
            
            <p class="f-left">{{$post->created_at}}| Posted by {{$post->author->name}} | {{$post->category->name}} </p>
          </div>
          <p>
           {!! $post->description  !!}</p>
       <img src="{{asset('images')}}/{{$post->image}}" style="height: 80px;">
    
        
          
</li>
@endforeach
</ul>
</div>
</div>

</ul>


@endsection