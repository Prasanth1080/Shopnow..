<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Homepage</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
    />
  </head>
  <body>
    <header>
      <nav class="navbar">
        <a href="#">Shop Now...</a>
        <ul class="menu-links">
          <li><a href="shop.php">Buy a Products</a></li>
        </ul>
        <span id="hamburger-btn" class="material-symbols-outlined">menu</span>
      </nav>
    </header>

    <section class="hero-section">
      <div class="content">
        <h1>Find the quickest way of Search</h1>
        <form action="#" class="search-form">
          <input type="text" placeholder="Search for any service..." required />
          <button class="material-symbols-outlined" type="sumbit">
            search
          </button>
        </form>
        <div class="popular-tags">
          Popular:
          <ul class="tags">
            <li><a href="#">Mobile</a></li>
            <li><a href="#">Laptops</a></li>
            <li><a href="#">Earphones</a></li>
            <li><a href="#">Home Products</a></li>
          </ul>
        </div>
      </div>
    </section>

    <script>
      const header = document.querySelector("header");
      const hamburgerBtn = document.querySelector("#hamburger-btn");
      const closeMenuBtn = document.querySelector("#close-menu-btn");
      hamburgerBtn.addEventListener("click", () =>
        header.classList.toggle("show-mobile-menu")
      );
      closeMenuBtn.addEventListener("click", () => hamburgerBtn.click());
    </script>
  </body>
</html>
