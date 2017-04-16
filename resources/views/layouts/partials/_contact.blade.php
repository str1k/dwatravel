<!-- PRELOADER -->
  <div id="st-preloader">
    <div id="pre-status">
      <div class="preload-placeholder"></div>
    </div>
  </div>
  <!-- /PRELOADER -->

<!-- CONTACT -->
  <header id="header">
    <nav class="contact ct-navbar" style="padding-top: 80px;">
      <div class="container">
        <div class="navbar-header">
        <button type="button" id="contact-bar" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ct-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
              
          </button>
              <span style="margin-left: 10px; font-family: arial, helvetica, sans-serif ;"><a ></a>{{$contact_bar->autorize}} </span>
        </div>

        <div class="collapse navbar-collapse collapse show" id="ct-navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
              <li>
                <a style="font-weight: 1000;" href="tel:{{$contact_bar->telphone}}"><span class="glyphicon glyphicon-earphone"> </span> {{$contact_bar->telphone}} </a>
              </li>
              <li>
                <a style="font-weight: 1000;"><span  class="glyphicon glyphicon-envelope"> </span> {{$contact_bar->email}}</a>
              </li>
              <li>
                <a style="font-weight: 1000;"  target="_blank" href="{{$contact_bar->line_link}}"> LINE: {{$contact_bar->line}} <div class = "ct-inline_item"><img src="{{$contact_bar->line_url}}" alt=""></div></a> 
              </li>
        </div>

          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>
  </header>
<!-- /CONTACT -->   