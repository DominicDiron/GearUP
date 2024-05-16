<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{asset('../css/style.css')}}" rel="stylesheet">
    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand bg-black">
      <div class="container-fluid">
        <a href="/" class="navbar-brand text-light">Gear UP</a>
      </div>
    </nav>
    <div class="container mt-5">
      <div class="row">
        @if($message=Session::get('success'))
          <div class="alert alert-success alert-dismissable fade show">
            <strong>Success </strong>{{$message}}
            <button class="btn-close" data-bs-dismiss="alert" area_label="close"></button>
          </div>
        @endif
        @yield('main')
      </div>
    </div>
    @yield('scripts')
  </body>
</html>