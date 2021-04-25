<!DOCTYPE html>
<!-- saved from url=(0060)https://getbootstrap.com/docs/4.0/examples/starter-template/ -->
<html lang="en">
    <head>
        @include('app.css')
  </head>

  <body>

    {{-- tempat navbar --}}
    @include('app.navbar')

    <main role="main" class="container">

      {{-- tempat konten --}}
      @yield('content')

    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('assets/js/jquery-3.2.1.slim.min.js') }}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>


</body></html>
