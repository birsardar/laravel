
  <div id="header" class="box">
    <h1 id="logo">simple<span>magazine</span> 01</h1>
    <ul id="nav">
      <li class="current"><a href="index.html">Homepage</a></li>
    
      <li><div class="dropdown">
    <button class="dropbtn">Category
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div></li>
      <li>@if (Route::has('login'))
               
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
               
            @endif</li>
    </ul>
  </div>



















