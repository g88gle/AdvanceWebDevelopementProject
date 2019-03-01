<nav class="navbar navbar-inverse ">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="#">AWD</a>
    </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="{{Request::is('/') ? 'active' : ''}}"> <a href="/">HOME</a></li>
          <li class="{{Request::is('leave') ? 'active' : ''}}"> <a href="/leave">LEAVE</a></li>
          <li class="{{Request::is('about') ? 'active' : ''}}"> <a href="/about">ABOUT</a></li>
          <li class="{{Request::is('contact') ? 'active' : ''}}"> <a href="/contact">CONTACT</a></li>
        </ul>
      </div>
    </div>
  </nav>
