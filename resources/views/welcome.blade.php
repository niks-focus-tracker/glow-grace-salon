<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Glow & Grace Salon | Beauty & Hair Salon</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            color: #333;
            background: #fffaf8;
            line-height: 1.6;
        }

        /* NAVIGATION */

        header {
            background: rgba(255, 255, 255, 0.97);
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #eee;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .logo {
            font-size: 28px;
            font-weight: bold;
            color: #9b5964;
        }

        .logo span {
            display: block;
            font-size: 12px;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: #777;
            font-weight: normal;
        }

        nav a {
            text-decoration: none;
            color: #444;
            margin-left: 25px;
            font-weight: 500;
            transition: 0.3s;
        }

        nav a:hover {
            color: #b76e79;
        }

        /* HERO */

        .hero {
            min-height: 680px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 80px 20px;
            background:
                linear-gradient(rgba(248, 232, 232, 0.82), rgba(255, 250, 248, 0.92)),
                url('https://images.unsplash.com/photo-1560066984-138dadb4c035?auto=format&fit=crop&w=1600&q=80');
            background-size: cover;
            background-position: center;
        }

        .hero-content {
            max-width: 850px;
        }

        .hero small {
            text-transform: uppercase;
            letter-spacing: 4px;
            color: #8f4f5b;
            font-weight: bold;
        }

        .hero h1 {
            font-size: 64px;
            color: #7f4551;
            margin: 15px 0 20px;
            line-height: 1.1;
        }

        .hero p {
            font-size: 21px;
            margin: 0 auto 35px;
            max-width: 650px;
            color: #555;
        }

        .button {
            display: inline-block;
            background: #b76e79;
            color: white;
            padding: 15px 32px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .button:hover {
            background: #8f4f5b;
            transform: translateY(-2px);
        }

        /* GENERAL SECTIONS */

        .section-title {
            text-align: center;
            max-width: 750px;
            margin: 0 auto 50px;
        }

        .section-title h2 {
            font-size: 42px;
            color: #8f4f5b;
            margin-bottom: 15px;
        }

        .section-title p {
            font-size: 18px;
            color: #666;
        }

        /* SERVICES */

        .services {
            padding: 100px 8%;
            background: white;
        }

        .service-container {
            display: flex;
            justify-content: center;
            gap: 25px;
            flex-wrap: wrap;
        }

        .service {
            background: #fffaf8;
            padding: 40px 30px;
            width: 290px;
            border-radius: 18px;
            text-align: center;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.07);
            transition: 0.3s;
        }

        .service:hover {
            transform: translateY(-7px);
        }

        .service-icon {
            font-size: 38px;
            margin-bottom: 20px;
        }

        .service h3 {
            color: #b76e79;
            margin-bottom: 15px;
            font-size: 23px;
        }

        .service p {
            color: #666;
        }

        /* ABOUT */

        .about {
            padding: 100px 8%;
            background: #f8eeee;
        }

        .about-content {
            max-width: 850px;
            margin: auto;
            text-align: center;
        }

        .about-content p {
            font-size: 18px;
            margin-bottom: 18px;
            color: #555;
        }

        /* GALLERY */

        .gallery {
            padding: 100px 8%;
            background: white;
        }

        .gallery-container {
            max-width: 1100px;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
        }

        .gallery-item {
            height: 280px;
            border-radius: 18px;
            overflow: hidden;
            position: relative;
            background: #ead4d6;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: 0.4s;
        }

        .gallery-item:hover img {
            transform: scale(1.07);
        }

        .gallery-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 18px;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
            color: white;
            font-weight: bold;
            font-size: 17px;
        }

        /* CONTACT */

        .contact {
            padding: 100px 8%;
            background: #f8eeee;
        }

        .contact-container {
            max-width: 900px;
            margin: auto;
            display: flex;
            justify-content: center;
            gap: 60px;
            flex-wrap: wrap;
            text-align: center;
        }

        .contact-box {
            min-width: 220px;
        }

        .contact-box h3 {
            color: #8f4f5b;
            margin-bottom: 10px;
        }

        .contact-box p {
            color: #555;
        }

        .booking-button {
            margin-top: 35px;
            text-align: center;
        }

        /* FOOTER */

        footer {
            background: #8f4f5b;
            color: white;
            text-align: center;
            padding: 35px 20px;
        }

        footer p {
            margin: 5px;
        }

        /* MOBILE */

        @media (max-width: 800px) {

            header {
                flex-direction: column;
                gap: 15px;
            }

            nav {
                text-align: center;
            }

            nav a {
                margin: 5px 8px;
                display: inline-block;
            }

            .hero {
                min-height: 600px;
            }

            .hero h1 {
                font-size: 45px;
            }

            .hero p {
                font-size: 18px;
            }

            .gallery-container {
                grid-template-columns: 1fr;
            }

            .gallery-item {
                height: 300px;
            }
        }
    </style>
</head>

<body>

<!-- NAVIGATION -->

<header>

    <div class="logo">
        Glow & Grace
        <span>Salon & Beauty</span>
    </div>

    <nav>
        <a href="#home">Home</a>
        <a href="#services">Services</a>
        <a href="#about">About</a>
        <a href="#gallery">Gallery</a>
        <a href="#contact">Contact</a>
    </nav>

</header>


<!-- HERO -->

<section class="hero" id="home">

    <div class="hero-content">

        <small>Welcome to Glow & Grace</small>

        <h1>Beauty That Makes You Glow</h1>

        <p>
            Professional hair and beauty services in a warm,
            relaxing environment where you can feel confident
            and beautiful.
        </p>

        <a href="#contact" class="button">
            Book an Appointment
        </a>

    </div>

</section>


<!-- SERVICES -->

<section class="services" id="services">

    <div class="section-title">

        <h2>Our Services</h2>

        <p>
            Discover personalized beauty services designed
            to help you look and feel your absolute best.
        </p>

    </div>


    <div class="service-container">

        <div class="service">

            <div class="service-icon">✂</div>

            <h3>Hair Styling</h3>

            <p>
                Professional cuts, styling and treatments
                created to suit your personal style.
            </p>

        </div>


        <div class="service">

            <div class="service-icon">✦</div>

            <h3>Hair Coloring</h3>

            <p>
                Beautiful colors and professional treatments
                for a fresh and confident look.
            </p>

        </div>


        <div class="service">

            <div class="service-icon">♡</div>

            <h3>Beauty Care</h3>

            <p>
                Relaxing beauty treatments designed to help
                you feel refreshed and confident.
            </p>

        </div>

    </div>

</section>


<!-- ABOUT -->

<section class="about" id="about">

    <div class="about-content">

        <div class="section-title">

            <h2>About Glow & Grace</h2>

        </div>

        <p>
            At Glow & Grace Salon, we believe beauty is about
            feeling confident, comfortable and completely yourself.
        </p>

        <p>
            Our professional team is dedicated to providing
            personalized salon services in a warm and welcoming
            environment.
        </p>

        <p>
            From a fresh hairstyle to a beautiful new color,
            our goal is to make every visit relaxing,
            enjoyable and special.
        </p>

    </div>

</section>


<!-- GALLERY -->

<section class="gallery" id="gallery">

    <div class="section-title">

        <h2>Our Gallery</h2>

        <p>
            A glimpse of the beautiful work and relaxing
            atmosphere at Glow & Grace.
        </p>

    </div>


    <div class="gallery-container">


        <div class="gallery-item">

            <img
                src="https://images.unsplash.com/photo-1521590832167-7bcbfaa6381f?auto=format&fit=crop&w=800&q=80"
                alt="Salon interior"
            >

            <div class="gallery-caption">
                Salon Experience
            </div>

        </div>


        <div class="gallery-item">

            <img
                src="https://images.unsplash.com/photo-1562322140-8baeececf3df?auto=format&fit=crop&w=800&q=80"
                alt="Hair styling"
            >

            <div class="gallery-caption">
                Hair Styling
            </div>

        </div>


        <div class="gallery-item">

            <img
                src="https://images.unsplash.com/photo-1519699047748-de8e457a634e?auto=format&fit=crop&w=800&q=80"
                alt="Hair salon"
            >

            <div class="gallery-caption">
                Hair Care
            </div>

        </div>


        <div class="gallery-item">

            <img
                src="https://images.unsplash.com/photo-1595476108010-b4d1f102b1b1?auto=format&fit=crop&w=800&q=80"
                alt="Beauty salon"
            >

            <div class="gallery-caption">
                Beauty Care
            </div>

        </div>


        <div class="gallery-item">

            <img
                src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&w=800&q=80"
                alt="Beauty treatment"
            >

            <div class="gallery-caption">
                Beauty & Style
            </div>

        </div>


        <div class="gallery-item">

            <img
                src="https://images.unsplash.com/photo-1560066984-138dadb4c035?auto=format&fit=crop&w=800&q=80"
                alt="Professional salon"
            >

            <div class="gallery-caption">
                Our Salon
            </div>

        </div>

    </div>

</section>


<!-- CONTACT -->

<section class="contact" id="contact">

    <div class="section-title">

        <h2>Let's Get You Glowing</h2>

        <p>
            Ready for your next salon appointment?
            We'd love to hear from you.
        </p>

    </div>


    <div class="contact-container">


        <div class="contact-box">

            <h3>Phone</h3>

            <p>(604) 555-0123</p>

        </div>


        <div class="contact-box">

            <h3>Email</h3>

            <p>hello@glowandgracesalon.com</p>

        </div>


        <div class="contact-box">

            <h3>Location</h3>

            <p>Abbotsford, British Columbia</p>

        </div>

    </div>


    <div class="booking-button">

       <a href="/booking" class="btn">Book an Appointment</a>
            Book an Appointment
        </a>

    </div>

</section>


<!-- FOOTER -->

<footer>

    <p>
        © 2026 Glow & Grace Salon. All rights reserved.
    </p>

    <p>
        Beauty. Confidence. Grace.
    </p>

</footer>


</body>
</html>