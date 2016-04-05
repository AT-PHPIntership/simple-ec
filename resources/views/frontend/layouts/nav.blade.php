<div class="row" style="margin-bottom: 40px;">
        <div class="col-md-12" id="menu">
            <nav class="navbar navbar-default navbar-fixed-top">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="{{ url('/') }}"><span class="glyphicon glyphicon-home"></span></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ url('/') }}">Home<span class="sr-only">(current)</span></a></li>
                        <?php
                            $categories = DB::table('categories')->select('name')->get();
                        ?>
                        @foreach( $categories as $category )
                        <li><a href="#">{!! $category->name !!}</a></li>
                        @endforeach
                  </ul>
                  <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Go</button>
                  </form>
                  <ul class="nav navbar-nav">
                    <li><a href="{{ url('cart') }}"><span class="glyphicon glyphicon-shopping-cart"></span> 0 Sản Phẩm</a></li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"></a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Register</a></li>
                      </ul>
                    </li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
        </div>
    </div>