<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Computer Parts Hub | Your PC Components Store</title>

  <style>
    :root {
      --primary-color: #2c3e50;
      --secondary-color: #27ae60;
      --accent-color: #e74c3c;
      --text-light: #ecf0f1;
      --text-dark: #2c3e50;
      --bg-dark: #34495e;
      --bg-light: #ffffff;
      --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      --transition-speed: 0.3s;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      background-color: var(--bg-light);
      color: var(--text-dark);
      line-height: 1.6;
      padding: 20px;
    }

    header {
      background-color: var(--bg-dark);
      color: var(--text-light);
      text-align: center;
      padding: 40px 20px;
      border-radius: 10px;
      margin-bottom: 40px;
    }

    header h1 {
      font-size: 3rem;
      letter-spacing: 2px;
      margin-bottom: 10px;
    }

    header p {
      font-size: 1.2rem;
      opacity: 0.8;
    }

    section {
      margin-bottom: 60px;
    }

    h2 {
      text-align: center;
      color: var(--primary-color);
      font-size: 2.5rem;
      margin-bottom: 30px;
      letter-spacing: 1.2px;
    }

    .about-text {
      max-width: 700px;
      margin: 0 auto;
      font-size: 1.1rem;
      text-align: center;
      color: var(--text-dark);
      line-height: 1.7;
    }

    .parts-grid {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      max-width: 900px;
      margin: 0 auto;
    }

    .part-card {
      background-color: var(--bg-dark);
      color: var(--text-light);
      width: 220px;
      border-radius: 8px;
      box-shadow: var(--shadow);
      padding: 15px;
      text-align: center;
      transition: transform var(--transition-speed);
    }

    .part-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
    }

    .part-card img {
      width: 100%;
      height: 140px;
      object-fit: contain;
      border-radius: 6px;
      background: white;
      padding: 8px;
      margin-bottom: 12px;
    }

    .part-card h3 {
      color: var(--secondary-color);
      margin-bottom: 8px;
      font-size: 1.2rem;
    }

    .part-card p {
      font-size: 0.9rem;
      opacity: 0.85;
      min-height: 55px;
    }

    footer {
      text-align: center;
      color: var(--text-dark);
      font-size: 0.9rem;
      margin-top: 40px;
      border-top: 1px solid #ccc;
      padding-top: 15px;
      max-width: 900px;
      margin-left: auto;
      margin-right: auto;
    }

    /* Responsive */
    @media (max-width: 600px) {
      .parts-grid {
        flex-direction: column;
        align-items: center;
      }
      .part-card {
        width: 90%;
      }
    }
  </style>
</head>
<body>

  <header>
    <h1>Computer Parts Hub</h1>
    <p>Your trusted source for quality PC components and accessories.</p>
  </header>

  <section id="about">
    <h2>About Us</h2>
    <p class="about-text">
      We provide high-quality computer parts including processors, graphics cards, RAM, storage, and more.
      Our mission is to help you build and upgrade your perfect PC with trusted products.
    </p>
  </section>

  <section id="parts">
    <h2>Available Computer Parts</h2>
    <div class="parts-grid">
      <div class="part-card">
        <img src="https://th.bing.com/th/id/OIP.AHfFXUGxHHB9fTp762bn3wHaE8?w=261&h=180&c=7&r=0&o=7&cb=12&pid=1.7&rm=3" alt="CPU Processor" />
        <h3>Intel Core i9 Processor</h3>
        <p>High-performance CPU with multiple cores for gaming and productivity.</p>
      </div>
      <div class="part-card">
        <img src="https://th.bing.com/th/id/OIP.gSwq2xfYTwAWXi2YWfZr_gHaEK?w=293&h=180&c=7&r=0&o=7&cb=12&pid=1.7&rm=3" alt="Graphics Card" />
        <h3>NVIDIA RTX 4090 GPU</h3>
        <p>Powerful graphics card delivering ultra-realistic visuals.</p>
      </div>
      <div class="part-card">
        <img src="https://th.bing.com/th/id/OIP.Zl_4IwxSg6anfktZW9dnZgHaDy?w=348&h=178&c=7&r=0&o=7&cb=12&pid=1.7&rm=3.jpg" alt="RAM Modules" />
        <h3>Corsair 32GB DDR4 RAM</h3>
        <p>Fast and reliable memory for smooth multitasking and gaming.</p>
      </div>
      <div class="part-card">
        <img src="https://th.bing.com/th/id/OIP.g5zhBLC_Z2FDd5V8taMSugHaE8?w=268&h=180&c=7&r=0&o=7&cb=12&pid=1.7&rm=3" alt="SSD Storage" />
        <h3>Samsung 1TB NVMe SSD</h3>
        <p>Blazing fast storage for quick boot times and data transfer.</p>
      </div>
    </div>
  </section>

  <footer>
    &copy; 2025 Computer Parts Hub. All rights reserved.
  </footer>

</body>
</html>
