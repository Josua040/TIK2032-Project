<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Sederhana</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <nav id="navbar">
        <a href="#home">Home</a>
        <a href="#gallery">Gallery</a>
        <a href="#blog">Blog</a>
        <a href="#contact">Contact</a>
    </nav>

    <section id="home">
        <h1>Hi, I'm NANDO</h1>
        <h3>Informatics Engineering Student</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </section>
    
    

    <section id="gallery">
        <h1>Gallery</h1>
        <p>Kumpulan game yang saya mainkan:</p>
        <div class="gallery-container">
            <img src="images/Minecraft1.jpeg" alt="Foto 1" width="200">
            <img src="images/Minecraft2.jpeg" alt="Foto 2" width="200">
            <img src="images/pubg3.jpeg" alt="Foto 3" width="200">
            <img src="images/pubg2.jpeg" alt="Foto 3" width="200">
        </div>
    </section>

    <section id="blog">
        <h1>Blog E-Sport</h1>
        <div class="blog-container">
            <?php
            $result = $conn->query("SELECT * FROM blog_posts ORDER BY id DESC");
            while ($row = $result->fetch_assoc()):
            ?>
            <article class="blog-card">
                <h2><?= htmlspecialchars($row['title']) ?></h2>
                <p><?= htmlspecialchars($row['content']) ?></p>
                <a href="<?= htmlspecialchars($row['link']) ?>" target="_blank">Baca Selengkapnya →</a>
            </article>
            <?php endwhile; ?>
        </div>
    </section>
        
    <section id="contact">
        <h1>Contact Me</h1>
        <form id="contactForm" class="contact-form">
          <div class="input-group">
            <input type="text" id="name" required placeholder=" ">
            <label for="name">Your Name</label>
          </div>
          <div class="input-group">
            <input type="email" id="email" required placeholder=" ">
            <label for="email">Your Email</label>
          </div>
          <div class="input-group">
            <textarea id="message" rows="5" required placeholder=" "></textarea>
            <label for="message">Your Message</label>
          </div>
          <button type="submit">Send Message</button>
          <p id="confirmation"></p>
        </form>
      </section>      
</html>
