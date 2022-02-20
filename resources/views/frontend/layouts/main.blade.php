<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>KAMS NEWS</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" media="screen,projection" type="text/css" href="{{asset('frontend/css/main.css')}}" />
<link rel="stylesheet" media="screen,projection" type="text/css" href="{{asset('frontend/css/skin.css')}}" />
<link rel="stylesheet" media="screen,projection" type="text/css" href="{{asset('frontend/css1/cat.css')}}" />
<script type="text/javascript" src="{{asset('frontend/javascript/cufon-yui.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/javascript/font.font.js')}}"></script>
<script type="text/javascript">
Cufon.replace('h1, h2, h3, h4, h5, h6', {
    hover: true
});
</script>
</head>
<body>
<!-- START PAGE SOURCE -->
<div class="main">
@include('frontend.layouts.header')
  <div id="section" class="box">
    <div id="content">
      <ul class="articles box">
        
        
         @yield('content')
     
    
      </ul>
   
    </div>
   @include('frontend.layouts.sidebar')
  </div>
</div>
@include('frontend.layouts.footer')
<script type="text/javascript">Cufon.now();</script>
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<!-- END PAGE SOURCE -->
</body>
</html>