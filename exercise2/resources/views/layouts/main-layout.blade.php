<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>{{$placeholder}}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}" charset="utf-8"></script>
  </head>
  <body>
    @include ('components.header')
  </body>
  <main>
    @yield('content')
  </main>
  @include('components.footer')
</html>
