<!doctype html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/css/main.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Bachpan</a>
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <form action = {{ URL::route('viewEntries') }} class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control" name="q" placeholder="Search entries..." />
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </form>
              <li><a href="entry/new">Add Entry</a></li>
              <li><a href="#">Settings</a></li>
              <li><a href="logout">Logout</a></li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container" style="margin-top: 70px">
          @yield('content')
      </div>
    </body>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</html>
