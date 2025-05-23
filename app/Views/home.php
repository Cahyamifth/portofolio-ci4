<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<style>
  section {
    padding: 60px 20px;
    box-sizing: border-box;
  }

  .hero img {
    width: 120px;
    border-radius: 50%;
    margin-top: 20px;
  }

  .portfolio-cards {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    margin-top: 30px;
  }

  .portfolio-card {
    background: white;
    color: black;
    border-radius: 10px;
    padding: 20px;
    width: 300px;
    text-align: left;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
  }

  @media (max-width: 600px) {
    .portfolio-card {
      width: 90%;
    }
    .hero img {
      width: 80px;
    }
  }
</style>

<!-- HOME -->
<section id="home" class="hero" style="background: #1abc9c; color: white; text-align: center;">
  <img 
    src="https://cdn-icons-png.flaticon.com/512/219/219986.png" 
    alt="Avatar" 
    data-aos="flip-left"
    data-aos-duration="1200"
  >
  <h1>Cahya Miftahul Falah</h1>
  <p>Informatika</p>
</section>

<!-- PORTOFOLIO -->
<section id="portfolio" style="background: #f39c12; color: white; text-align: center;">
  <h1>PORTOFOLIO SAYA</h1>
  <p>Beberapa proyek yang pernah saya kerjakan:</p>

  <div class="portfolio-cards">
    <div class="portfolio-card" data-aos="fade-up">
      <h3>DibukaOlshop App</h3>
      <p>Aplikasi konter pulsa & penjualan online yang sedang saya kembangkan untuk pasar lokal Indonesia.</p>
      <a href="#" style="color: #1abc9c;">Lihat Detail</a>
    </div>

    <div class="portfolio-card" data-aos="fade-up" data-aos-delay="200">
      <h3>Website UNIBI Cyber Club</h3>
      <p>Website komunitas keamanan siber di kampus UNIBI, berbasis CodeIgniter 4.</p>
      <a href="#" style="color: #1abc9c;">Lihat Detail</a>
    </div>

    <div class="portfolio-card" data-aos="fade-up" data-aos-delay="400">
      <h3>Monitoring Jaringan Sederhana</h3>
      <p>Project praktikum menggunakan Python & Wireshark untuk pemantauan jaringan.</p>
      <a href="#" style="color: #1abc9c;">Lihat Detail</a>
    </div>
  </div>
</section>

<!-- ABOUT -->
<section id="about" style="background: #27ae60; color: white; text-align: center;">
  <h1>Tentang Saya</h1>
  <p>Halo, saya Cahya Miftahul, mahasiswa UNIBI jurusan Informatika spesialisasi Cyber Security.</p>
</section>

<!-- CONTACT -->
<section id="contact" style="background: #8e44ad; color: white; text-align: center;">
  <h1>Hubungi Saya</h1>
  <p>Email: cahya@example.com | WhatsApp: 08xxxxxxxx</p>
</section>

<?= $this->endSection() ?>
