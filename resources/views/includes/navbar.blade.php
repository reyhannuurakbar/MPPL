    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{url('/')}}"> <img src="img/logo.png" alt=""> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/')}}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/paket')}}">Pilih Paket</a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link" href="{{url('/about')}}">About</a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link" href="{{url('/blog')}}">Blog</a>
                                </li>
                            </ul>
                            
                        </div>
                        @guest
                            <div class="menu_btn">
                            <a class="btn_1 d-none d-sm-block" type="button" onclick="event.preventDefault();location.href='{{url('login')}}';">Masuk</a>  
                            </div>
                        @endguest
                            
                        @auth
                            <form action="{{ url('logout') }}" method="POST">
                               @csrf
                               <div class="menu_btn">
                                <!--<a class="btn_1 d-none d-sm-block" type="submit" >Logout</a>-->
                                <li class="nav-item dropdown no-arrow">
                                    <a class="btn_1 d-none d-sm-block" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <span class="mr-2 d-none d-lg-inline text-gray-1000 large">
                                        {{Auth::user()->name}}
                                      </span>
                                      <!--<img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">-->
                                    </a>
                                    <!-- Dropdown - User Information -->
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                      <div class="dropdown-divider"></div>
                                      <button class="btn_1 d-none d-sm-block" type="submit" >Logout</button>
                                    </div>
                                  </li>
                                </div>
                            </form>
                        @endauth
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->