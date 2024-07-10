<header>

    {{-- <nav class="navbare row">
        <div class="col-md-6 d-flex mb-2">
            <img class="mainLogo" src="{{asset('assets/thumb-816x460-logo-6659f6148571a.png')}}" alt="">
            <a href="">
                <img class="flag" src="{{asset('assets/img/ci.png')}}" alt="">
            </a>
        </div>
        <div class="col-md-6">
            <ul style="font-weight: bolder; justify-content: center;">
                <li>efneinffuefn</li>
                <li>efneinffuefn</li>
                <li>efneinffuefn</li>
            </ul>
        </div>
    </nav> --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-4">
        <a class="navbar-brand" href="/">
            <img class="mainLogo" src="{{asset('assets/thumb-816x460-logo-6659f6148571a.png')}}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link disabled" href="#">Petites annonces</a>
            </li>
            {{-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Tarif</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="/registerLivreur">Inscrire un société</a>
            </li>
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="/login">Se connecter</a>
              </li>
            @else
                <li class="nav-item">
                    <a class="nav-link " href="/dashboard">Tableau de bord</a>
                </li>
            @endguest
          </ul>
          {{-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form> --}}
        </div>
      </nav>
    <div>
        {{-- <section id="hero"> --}}
            <div class="container" data-aos="zoom-in" data-aos-duration="1000">
                <div class="searchwrapper">
                <div class="searchbox">
                    <div class="row">
                    <div class="col-md-5 aBorder">
                        <select class="form-control category">
                            <option>Toute les categories</option>
                            <option>Hotels</option>
                            <option>Cafes</option>
                            <option>Nightlife</option>
                            <option>Restauarants</option>
                        </select>
                    </div>
                    <div class="col-md-3 aBorder">
                        <input type="text" class="form-control" placeholder="Quoi ?">
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" placeholder="Où ?">
                    </div>
                    <div class="col-md-1"><input type="button" class="btn btn-warning" class="form-control" value="Search"></div>
                    </div>
                </div>
                </div>
            </div>
            {{-- </section> --}}
    </div>
</header>
