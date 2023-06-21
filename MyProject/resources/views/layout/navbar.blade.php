<header class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container">
    <li><i class="bi bi-bell-fill icon"></i>Notice</li>
    <form class="d-flex me-auto">
      <input class="form-control me-2" type="search" placeholder="Search ..." aria-label="Search">
      <button class="btn btn-primary" type="submit">Search</button>
    </form>
    <div class="d-flex align-items-center">
      @if(Auth::check())
        <img src="{{url("/upload/".Auth::user()->photo)}}" alt="Avatar" style="max-width: 40px; height: auto">
        <a href="{{url("/users/".Auth::user()->id)}}"><span class="username ms-1 me-3" style="color: black">{{Auth::user()->name}}</span></a>
        <a href="/logout" class="btn btn-primary ms-3" style="background: #7266ee; font-size: 14px"><i class="bi bi-box-arrow-right"></i>&ensp;Logout</a>
      @endif
    </div>
  </div>
</header>

<style>
  header.navbar {
    border-radius: 10px;
    margin-block: 15px 25px;
    padding: 20px 15px;
  }

  .container {
    list-style: none;
  }

  .container li{
    font-size: 14px;
  }

  .container li .icon{
    font-size: 20px;
    padding-right: 4px;
    color: #7266ee;
  }

  .container form{
    margin: 0 60px;
  }

  .container form input{
    font-size: 14px;
    border-radius: 5px;
    border: 2px solid #d8d8d8;
    padding: 5px 10px;
  }

  .container button{
    font-size: 14px;
    background: #7266ee;
  }
</style>