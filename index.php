<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime To-do App</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <img src="images/anime-banner.jpg" alt="Anime Banner" class="banner">
        <div class="logo">Anime To-do</div>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="CreateBtn.php">Manage Tasks</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main id="home">
        <section class="hero">
            <div class="hero-content">
                <h1>Welcome to Anime To-do App</h1>
                <p>Organize your tasks with your favorite anime characters!</p>
            </div>
        </section>

        <section id="features">
            <h2>Features</h2>
            <div class="feature-list">
                <div class="feature-item" style="background-image: url('images/feature1.jpg');">
                    <div class="feature-item-content">
                        <h3>Create Tasks</h3>
                        <p>Easily add new tasks to stay on top of your to-do list.</p>
                        <a href="CreateBtn.php" class="cta-button">Manage Tasks</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="spacer-section">
            <!-- This section creates space between other sections -->
        </section>
    </main>

    <footer id="contact">
        <p>Contact us at <a href="mailto:info@animetodo.com">info@animetodo.com</a></p>
        <div class="social-media">
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">Instagram</a>
        </div>
    </footer>
</body>
</html>
