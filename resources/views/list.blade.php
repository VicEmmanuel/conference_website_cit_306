<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conference Attendees</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .card-list {

            display: flex;
            flex-wrap: wrap;
            justify-content: center;


            padding: 5px;
            box-sizing: border-box;
        }

        .card {

            flex: 1;

            max-width: 500px;

            background-color: #ffffff;
            border-radius: 10px;
            border: 2px solid #3498db;
            padding: 40px;
            margin: 10px;
            box-sizing: border-box;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
        }

        .card-padding {
            padding-top: 10px;
        }


        h2 {
            margin: 0;
            font-size: 18px;
            color: #333;
        }

        .header-2 {
            padding: 5px;
        }

        .para {
            padding: 5px;
        }



        p {
            margin: 5px 0;
            font-size: 14px;
            color: #666;
        }

        ul {
            list-style: none;
            /* Remove bullet points from unordered lists */
            padding: 0;
            /* Remove default padding from unordered lists */
        }

        @media screen and (max-width: 768px) {

            /* For screens with width up to 768px (typical mobile screens) */
            .card-list {
                padding: 10px;
                /* Reduce padding for better mobile layout */
            }
        }

        .site-footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .social-icons a {
            color: #fff;
            margin-right: 15px;
            font-size: 24px;
            transition: color 0.3s;
        }

        .social-icons a:hover {
            color: #00a0d1;
        }

        .contact-info {
            align-content: center;
            margin-top: 10px;
        }

        .copyright {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #fff;
        }
        .copyright p {

            color: #fff;
        }


        @media (max-width: 768px) {
            .footer-content {
                flex-direction: column;
                align-items: flex-start;
            }
        }


        /* navbar */

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            padding: 10px 20px;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .navbar-content {
            display: flex;
            align-items: center;
        }

        .logo {
            color: #fff;
            font-size: 24px;
            text-decoration: none;
            margin-right: 20px;
        }

        .back-button {
            display: inline-block;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .back-button:hover {
            background-color: #007bff;
        }

        .nice-text {
            margin: 0;
            font-size: 20px;
            color: #fff;
            text-align: center;
        }

        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                align-items: center;
                padding: 10px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                background-color: #333;
                /* padding: 10px 20px; */
                position: fixed;
                top: 0;
                left: 0;
                /* Add this line */
                right: 0;
                /* Add this line */
                width: 100%;
                z-index: 1000;
            }

            .navbar-content {
                width: 100%;
                justify-content: space-between;
            }

            .logo {
                margin-right: auto;
            }

            .back-button {
                margin-left: auto;
            }

            /* .navbar-center {
        margin-top: 10px;
    } */
        }


        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
                padding: 10px;
            }

            .back-button {
                /* margin-top: 10px; */
                margin-right: 10px;
            }

            .back-button-padding {
                padding-right: 10px
            }

            .logo {
                margin-right: 0;
                /* margin-bottom: 10px; */
            }
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="navbar-content">
            <a href="/" class="logo">IEEE R8</a>
            <div class="back-button-padding">
                <a href="/" class="back-button">Back to Home</a>
            </div>

        </div>
        {{-- <div class="navbar-center">
            <p class="nice-text">Nice</p>
        </div> --}}
    </nav>
    <h1>Form Data List</h1>
    <ul>
        @foreach ($formDataList as $formData)
            {{-- <li>{{ $formData->name }} - {{ $formData->email }}</li> --}}
            <li>
                <div class="card-padding">
                    <div class="card-list">

                        <!-- Repeat this card structure for 10 items -->

                        <div class="card">
                            <h2 class="header-2">Name: {{ $formData->name }}</h2>
                            <p class="para">Email: {{ $formData->email }}</p>
                            <p class="para">Date Registration:
                                {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $formData->created_at)->format('d F, Y') }}
                            </p>
                            <p class="para">Time:
                                {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $formData->created_at)->format('H:i A') }}
                            </p>
                            {{-- <p>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $formData->created_at)->format('d F, Y') }}</p>
                            <p></p> --}}
                        </div>

                        <!-- Repeat this card structure for 10 items -->

                    </div>
                </div>

            </li>
        @endforeach
    </ul>


    <footer class="site-footer">
        <div class="container">
            <div class="footer-content">
                {{-- <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div> --}}
                {{-- <div class="contact-info">
                    <p>Contact us: vic.obodoagwu@ieee.org</p>
                </div> --}}
            </div>
            <div class="copyright">
                <p>&copy; {{ date('Y') }} Created by Group 2 - S.I.C.T</p>
            </div>
        </div>
    </footer>

</body>

</html>
