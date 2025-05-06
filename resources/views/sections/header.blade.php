
<script src="https://kit.fontawesome.com/ed508f75e6.js" crossorigin="anonymous"></script>

<header class="banner">
  <a class="brand" href="{{ home_url('/') }}">
    {{-- {!! $siteName !!} --}}
  </a>

  <section class="navbar">
    <div class="top">
      <div class="logo">
        <i class="fa-solid fa-couch"></i>
        <span>Meubels</span>
      </div>
      <div class="search-bar">
        <input type="text" placeholder="Wat zoek je?">
        <i class="fa-solid fa-magnifying-glass"></i>
      </div>
      <div class="user">
        <i class="fa-solid fa-cart-shopping"></i>
        <span>€0.00</span>
        <i class="fa-regular fa-heart"></i>
        <i class="fa-solid fa-user"></i>
      </div>
      <div class="list">
        <div>
          <i class="fa-solid fa-house"></i>
          <span>Home</span>
        </div>
        <div>
          <i class="fa-solid fa-couch"></i>
          <span>Producten</span>
        </div>
        <div>
          <i class="fa-solid fa-euro-sign"></i>
          <span>Prijzen</span>
        </div>
        <div>
          <i class="fa-solid fa-book"></i>
          <span>Blog</span>
        </div>
        <div>
          <i class="fa-solid fa-star"></i>
          <span>Verkoop</span>
        </div>
        <div>
          <i class="fa-solid fa-message"></i>
          <span>Contact</span>
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
