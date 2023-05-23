<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Tourism Guide</title>
</head>
<body>
    <main id="header">
        <nav>
            <h1>TOURISM</h1>
            <div class="nav-links">
                <ul>
                    <li><a href="#header">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#skill">Tourist Spot</a></li>
                    <li><a href="#contact">Contacts</a></li>
                </ul>
            </div>
        </nav>
    </main>
    <main>
    </div>
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="img/slides.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/bg.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
                <div class="carousel-item">
                <img src="img/planet.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
                </div>
        </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>        
    </div>
    <div class="position-absolute top-100 start-50 translate-middle">
    <form class="search_bar" method="GET">
        <input type="text" id="search" name="search" placeholder="Boac..">
        <button type="submit" name="submit">Search</button>
    </form>
    </div>
    </main>

    <!-- about -->
    <section class="about" id="about">
            <div class="max-width">
            <h2 class="title">About</h2>
                <div class="about-content">
                    <div class="column left">
                        <img src="img/planet.jpg">
                    </div>
                    <div class="column right">
                    <div class="text">BUENAVISTA</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi autem enim vel velit dicta omnis quisquam, consequuntur consectetur voluptates sequi officia quidem dignissimos assumenda ullam earum iste, est quae dolorum illo repellat. Deleniti, officiis inventore? Aspernatur perferendis dolorum sed vel ea assumenda, consequuntur omnis. Distinctio quisquam rem, optio delectus quam consequatur dicta omnis inventore vero unde nostrum ad in possimus.</p>
                        <a href="#">See more</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="tour" id="tour">
            <h2 class="title">Top Tourist</h2>
            <div class="tour-container">
                <div class="box">
                    <img src="img/planet.jpg" alt="">
                    <h3>Boac</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid tempore quod asperiores exercitationem magni laborum nihil non! Suscipit, eius aspernatur.</p>
                    <a href="#" class="btn">Read More</a>
                </div>

                <div class="box">
                    <img src="img/planet.jpg" alt="">
                    <h3>Gasan</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid tempore quod asperiores exercitationem magni laborum nihil non! Suscipit, eius aspernatur.</p>
                    <a href="#" class="btn">Read More</a>
                </div>

                <div class="box">
                    <img src="img/planet.jpg" alt="">
                    <h3>Mogpog</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid tempore quod asperiores exercitationem magni laborum nihil non! Suscipit, eius aspernatur.</p>
                    <a href="#" class="btn">Read More</a>
                </div>
            </div>
        </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>

