<!doctype html>
<html lang="en">

<head>
  <title>@yield('title') - IMS</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body>
  <div class="container-fluid">
    <div class="row">
      @include('layout.sidebar')
      <div class="col-10">
        <div class="content">
          <div class="header">
            @include('layout.navbar')
          <div class="main">
              <h1 class="text-left" style="font-size: 18px; padding-top: 20px; font-wight: bold">@yield('title')</h1>
              <p class="text-left" style="font-size: 13px; padding-top: 3px; padding-bottom:5px; font-wight: normal">&emsp;Home / @yield('title')</p>
              <hr style="color:#a5a5a5">
              @yield('content')
          </div>
            <div class="footer">
              @include('layout.footer')
            </div>
        </div>
      </div>
    </div>
  </div>

  </div>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
  </main>
</body>
</html>

<style>
  body {
    background-color: #ededed;
  }
  .main {
    background-color: #ffffff;
    border-radius: 10px;
    padding: 0 20px;
    min-height: 80vh;
  }

  .footer{
    padding-top: 30px;
  }

  .content{
    margin: 30px;
  }
</style>