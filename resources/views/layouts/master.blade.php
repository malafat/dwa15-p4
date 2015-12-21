<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Foobooks' --}}
        @yield('title','Rentals')
    </title>

    <meta charset='utf-8'>

    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' rel='stylesheet'>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/cosmo/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href="/css/p4.css" type='text/css' rel='stylesheet'>
    <script src="/js/sorttable.js"></script>
    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>

    <header>

    </header>

    <section class = 'container'>
      <div id="navcontainer">
        <ul id="navlist">
          <li id="active"><a href="/" id="current">Home</a></li>
          <li><a href="/properties">Properties</a></li>
          <li><a href="/renters">Tennants</a></li>
          <li><a href="/contracts">Leases</a></li>
        </ul>
      </div>
      {{-- Main page content will be yielded here --}}
      @yield('content')
      <footer>
        <a href='/logout'>Logout</a>
        <br>
        <a href='/'>Home</a>
        &copy; {{ date('Y') }}
      </footer>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>
