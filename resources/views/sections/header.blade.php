
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<header class="banner">
  <a class="brand" href="{{ home_url('/') }}">
    {{-- {!! $siteName !!} --}}
  </a>

  <section class="navbar">
    <div class="container">
        <div class="top">
              <div class="logo">
                    <i class="fa-solid fa-couch"></i>
                    <h1>Meubels</h1>
              </div>
              <div class="searchbar">
                    <input type="text" placeholder="Wat zoek je?">
                    <i class="fa-solid fa-magnifying-glass"></i>
              </div>
              <div class="user">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <p>€0.00</p>
                    <i class="fa-regular fa-heart"></i>
                    <i class="fa-solid fa-user"></i>
              </div>

              <div class="circle-container">
                  <div class="circle">
                    <button id="close">
                      <i class="fas fa-times"></i>
                    </button>
                    <button id="open">
                      <i class="fas fa-bars"></i>
                    </button>
                  </div>
                  <div class="nav">
                        <ul>
                              <li><i class="fa-solid fa-house"></i><a href="#"> Home</a></li>
                              <li><i class="fa-solid fa-couch"></i><a href="#">Producten</a></li>
                              <li><i class="fa-solid fa-euro-sign"></i><a href="#"> Prijzen</a></li>
                              <li><i class="fa-solid fa-book"></i><a href="#"> Blog</a></li>
                              <li><i class="fa-solid fa-star"></i><a href="#"> Verkoop</a></li>
                              <li><i class="fa-solid fa-message"></i><a href="#"> Contact</a></li>

                        </ul>
                      </div>
                  
              </div>
        </div>

      <div class="bottom">
            <div class="card">
                  <i class="fa-solid fa-house"></i>
                  <p>HOME</p>
            </div>
            <div class="card">
                  <i class="fa-solid fa-couch"></i>
                  <p>PRODUCTEN</p>
            </div>
            <div class="card">
                  <i class="fa-solid fa-euro-sign"></i>
                  <p>PRIJZEN</p>
            </div>
            <div class="card">
                  <i class="fa-solid fa-book"></i>
                  <p>BLOG</p>
            </div>
            <div class="card">
                  <i class="fa-solid fa-star"></i>
                  <p>VERKOOP</p>
            </div>
            <div class="card">
                  <i class="fa-solid fa-message"></i>
                  <p>CONTACT</p>
            </div>
      </div>
    </div>
  </section>

  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
  @endif
</header>
