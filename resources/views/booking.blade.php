<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book an Appointment | Glow & Grace Salon</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #fff8fb;
            color: #333;
        }

        header {
            background: #ffffff;
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        .logo {
            font-size: 26px;
            font-weight: bold;
            color: #b76e79;
        }

        .logo span {
            display: block;
            font-size: 12px;
            color: #777;
            letter-spacing: 2px;
            margin-top: 3px;
        }

        nav a {
            margin-left: 25px;
            text-decoration: none;
            color: #444;
            font-weight: 500;
        }

        nav a:hover {
            color: #b76e79;
        }

        .booking-section {
            max-width: 800px;
            margin: 60px auto;
            padding: 0 25px;
        }

        .booking-section h1 {
            text-align: center;
            color: #b76e79;
            font-size: 40px;
            margin-bottom: 10px;
        }

        .booking-section p {
            text-align: center;
            color: #777;
            margin-bottom: 40px;
        }

        .booking-form {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.08);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 13px;
            margin-bottom: 22px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            box-sizing: border-box;
        }

        textarea {
            height: 120px;
            resize: vertical;
        }

        button {
            width: 100%;
            padding: 15px;
            background: #b76e79;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 17px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background: #9f5965;
        }

        footer {
            text-align: center;
            padding: 30px;
            background: #333;
            color: white;
            margin-top: 60px;
        }

        @media (max-width: 700px) {
            header {
                flex-direction: column;
                gap: 15px;
            }

            nav a {
                margin: 0 8px;
            }

            .booking-form {
                padding: 25px;
            }

            .booking-section h1 {
                font-size: 32px;
            }
        }
    </style>
</head>

<body>

<header>
    <div class="logo">
        Glow & Grace
        <span>SALON & BEAUTY</span>
    </div>

    <nav>
        <a href="/">Home</a>
        <a href="/#services">Services</a>
        <a href="/#about">About</a>
        <a href="/#gallery">Gallery</a>
        <a href="/#contact">Contact</a>
    </nav>
</header>

<section class="booking-section">

    <h1>Book Your Appointment</h1>

    <p>
        Fill out the form below and our team will contact you to confirm your appointment.
    </p>

    <form class="booking-form" method="POST" action="/booking">
    @csrf

        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your full name">

        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="Enter your email">

        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number">

        <label for="service">Select a Service</label>
        <select id="service" name="service">
            <option value="">Choose a service</option>
            <option value="Hair Styling">Hair Styling</option>
            <option value="Hair Coloring">Hair Coloring</option>
            <option value="Facial">Facial</option>
            <option value="Manicure & Pedicure">Manicure & Pedicure</option>
            <option value="Bridal Beauty">Bridal Beauty</option>
            <option value="Makeup">Makeup</option>
        </select>

        <label for="date">Preferred Date</label>
        <input type="date" id="date" name="date">

        <label for="time">Preferred Time</label>
        <input type="time" id="time" name="time">

        <label for="message">Additional Message</label>
        <textarea id="message" name="message" placeholder="Anything you'd like us to know?"></textarea>

        <button type="submit">Request Appointment</button>

    </form>

</section>

<footer>
    © 2026 Glow & Grace Salon. All rights reserved.
</footer>

</body>
</html>