<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="" class="logo p-1">
                <ul class=" list-unstyled d-flex align-items-center my-0 mx-5">
                    <li class="px-3"><a
                            class=" text-decoration-none nav-link {{ Route::currentRouteName() === 'home' ? 'active' : '' }}"
                            href="{{ route('home') }}">
                            characters
                        </a>
                    </li>
                    <li class="px-3"><a
                            class=" text-decoration-none  nav-link {{ Route::currentRouteName() === 'comics.index' ? 'active' : '' }}"
                            href="{{ route('comics.index') }}">
                            comics
                        </a>
                    </li>
                    <li class="px-3"><a class=" text-decoration-none nav-link" href="">
                            movies
                        </a>
                    </li>
                    <li class="px-3"><a class=" text-decoration-none nav-link" href="">
                            tv
                        </a>
                    </li>
                    <li class="px-3"><a class=" text-decoration-none nav-link" href="">
                            games
                        </a>
                    </li>
                    <li class="px-3"><a class=" text-decoration-none nav-link" href="">
                            collectibles
                        </a>
                    </li>
                    <li class="px-3"><a class=" text-decoration-none nav-link" href="">
                            videos
                        </a>
                    </li>
                    <li class="px-3"><a class=" text-decoration-none nav-link" href="">
                            fans
                        </a>
                    </li>
                    <li class="px-3"><a class=" text-decoration-none nav-link" href="">
                            news
                        </a>
                    </li>
                    <li class="px-3">
                        <div class="dropdown">
                            <a class="dropdown-toggle text-decoration-none nav-link" href="#" role="button"
                                id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                Shop
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div class="searchBar">
                    <input type="text" placeholder="Search" class=" text-end border-0">
                    <button class="btn p-0">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
