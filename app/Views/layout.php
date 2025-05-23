<!DOCTYPE html>
<html lang="en">
<head>
  <!-- AOS CSS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <meta charset="UTF-8">
  <title>Portofolio Cahya</title>
  <style>
    body { margin: 0; font-family: sans-serif; scroll-behavior: smooth; }
    .navbar {
      background: #2c3e50;
      color: white;
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: sticky;
      top: 0;
      z-index: 1000;
    }
    .navbar .logo {
      font-size: 1.5rem;
      font-weight: bold;
    }
    .navbar ul {
      list-style: none;
      display: flex;
      gap: 20px;
    }
    .navbar a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      padding: 6px 12px;
      border-radius: 6px;
    }
    .navbar a.active {
      background: black;
    }

    section {
      padding: 100px 20px;
      min-height: 100vh;
    }

    .hero img {
      width: 120px;
      border-radius: 50%;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>

  <div class="navbar">
    <div class=""></div>
    <ul>
      <li><a href="#portfolio" class="nav-link">PORTOFOLIO</a></li>
      <li><a href="#about" class="nav-link">ABOUT</a></li>
      <li><a href="#contact" class="nav-link">CONTACT</a></li>
    </ul>
  </div>

  <?= $this->renderSection('content') ?>

  <script>
    // ScrollSpy simple
    const sections = document.querySelectorAll("section");
    const navLinks = document.querySelectorAll(".nav-link");

    window.addEventListener("scroll", () => {
      let current = "";
      sections.forEach((section) => {
        const sectionTop = section.offsetTop - 100;
        if (pageYOffset >= sectionTop) {
          current = section.getAttribute("id");
        }
      });

      navLinks.forEach((link) => {
        link.classList.remove("active");
        if (link.getAttribute("href").includes(current)) {
          link.classList.add("active");
        }
      });
    });
  </script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</body>
</html>
