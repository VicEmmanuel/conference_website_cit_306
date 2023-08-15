<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conference Website</title>
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Line awesome -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <link rel="stylesheet" href="./assets/css/app.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <div class="container">
            <a href="#" class="brand">IEEE R8</a>
            <ul class="nav-links">
                <li class="active"><a href="#hero">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#speakers">Speakers</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="register"><button class="blink-button">Register Now</button></a></li>
            </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- //Nvbar -->

    <!-- Hero -->
    <div id="hero">
        <div class="container">
            <h1 class="heading-xl"><span id="hero-titles"></span></h1>

            <a href="#about" class="scroll-to-down"><i class="las la-arrow-down"></i></a>
        </div>
        <div class="hero-overlay">
            <iframe class="youtube" width="560" height="315" src="https://www.youtube.com/embed/3Xl4jQzuB9I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>djhgdhscd</iframe>
            <div class="countdown">
                <div class="days-left" >Conference Begins</div>
                <div class="days-left" >19 August 2023</div>
                <div class="count">
                    <div class="section">
                        <span class="time" id="days"></span>
                        <span class="title">Days</span>
                    </div>
                    <div class="section">
                        <span class="time" id="hours"></span>
                        <span class="title">hours</span>
                    </div>
                    <div class="section">
                        <span class="time" id="minutes"></span>
                        <span class="title">minutes</span>
                    </div>
                    <div class="section">
                        <span class="time" id="seconds"></span>
                        <span class="title">seconds</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Hero -->

    <!-- about -->
    <section id="about">
        <div class="container">
            <div class="section-intro" data-aos="fade-up">
                <h1 class="heading-2">About</h1>
                <p>
                    The technology we rely on today all started in the minds of creative innovators collaborating together; be it in a university laboratory, a company’s conference room, a café, or an unexpected location. IEEE Computer Society conferences aim to bring today’s creative minds together in one place to create tomorrow’s innovations.</p>
            </div>

            <div>

            </div>
            <div class="grid three-col-grid">
                <div class="service" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><i class="las la-tools"></i></div>
                    <h3 class="heading-3">Access to technical publications</h3>
                    <p>Presenting research at a conference is your chance of getting it in the right hands. Industry professionals from various fields attend our conferences in need of the latest methods and tools that can improve their organization.</p>
                </div>
                <div class="service" data-aos="fade-up" data-aos-delay="600">
                    <div class="icon"><i class="las la-feather"></i></div>
                    <h3 class="heading-3">Overview of uprisng technologies</h3>
                    <p>Practicing engineers, researchers, and technical experts will present and discuss current developments and future trends in technologies such as Computer Science, Robtics, Machine Learning, Artificial Intelligence, Quantum Computing and other tech related fields.</p>
                </div>
                <div class="service" data-aos="fade-up" data-aos-delay="900">
                    <div class="icon"><i class="las la-tv"></i></div>
                    <h3 class="heading-3">Discover exhibits</h3>
                    <p>Educational opportunities such as workshops and tutorials are led by top researchers, and give participants the opportunity to enrich their skill set. </p>
                </div>
                {{-- <div class="service" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><i class="las la-pencil-ruler"></i></div>
                    <h3 class="heading-3">Service Title</h3>
                    <p>We are passoniate web design quam placeat tempore, possimus natus nam, adipisci reprehenderit nostrum</p>
                </div>
                <div class="service" data-aos="fade-up" data-aos-delay="600">
                    <div class="icon"><i class="lab la-gg"></i></div>
                    <h3 class="heading-3">Service Title</h3>
                    <p>We are passoniate web design quam placeat tempore, possimus natus nam, adipisci reprehenderit nostrum</p>
                </div>
                <div class="service" data-aos="fade-up" data-aos-delay="900">
                    <div class="icon"><i class="las la-marker"></i></div>
                    <h3 class="heading-3">Service Title</h3>
                    <p>We are passoniate web design quam placeat tempore, possimus natus nam, adipisci reprehenderit nostrum</p>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- //about -->

    <!-- Speakers -->
    <section id="speakers">
        <div class="container">
            <div class="section-intro" data-aos="fade-up">
                <h1 class="heading-2">Speakers</h1>
            </div>
            <div class="grid three-col-grid">
                <div class="blog-post" data-aos="fade-up" data-aos-delay="600">
                    <img class="team-img" src="./assets/images/2nd Man.jpg" alt="">
                    <div class="team-text">
                        <h3><a href="#">Mr. Chris Davis</a></h3>
                    <p>Software Engineer</p>
                    <p>Topic: Edge and Quantum Computing </p>
                    </div>

                </div>
                <div class="blog-post" data-aos="fade-up" data-aos-delay="800">
                    <div class="team-img-box"><img class="team-img" src="./assets/images/Lady.jpg" alt=""></div>

                    <div class="team-text">
                        <h3><a href="#">Mrs. Helen Amanda</a></h3>
                    <p>Data Analyst</p>
                    <p>Topic: Blockchain and Cryptocurrencies</p>
                    </div>

                </div>
                <div class="blog-post" data-aos="fade-up" data-aos-delay="1000">
                    <div class="team-img-box"><img class="team-img" src="./assets/images/3rd Man.jpg" alt=""></div>

                    <div class="team-text">
                        <h3><a href="#">Mr.Eze Paul</a></h3>
                    <p>Software Engineering</p>
                    <p>Topic: Augmented and Virtual Reality</p>
                    </div>

                </div>

            </div>

        </div>
    </section>


    <!-- Team -->
    <section id="team">
        <div class="container">
            <div class="section-intro" data-aos="fade-up">
                <h1 class="heading-2">Team</h1>
            </div>
            <!--  -->
            <div class="grid three-col-grid">
                <div class="blog-post" data-aos="flip-left" data-aos-delay="900">
                    <img class="team-img" src="./assets/images/favour.jpeg" alt="">
                    <div class="team-text">
                        <h3><a href="#">Echezolam Favour</a></h3>
                    <p>Information Technology</p>
                    </div>

                </div>
                <div class="blog-post" data-aos="flip-left" data-aos-delay="900">
                    <div class="team-img-box"><img class="team-img" src="./assets/images/vic.jpg" alt=""></div>

                    <div class="team-text">
                        <h3><a href="#">Obodoagwu Victory</a></h3>
                    <p>Software Engineering</p>
                    </div>

                </div>
                <div class="blog-post" data-aos="flip-left" data-aos-delay="900">
                    <div class="team-img-box"><img class="team-img" src="./assets/images/chimenzie.jpeg" alt=""></div>

                    <div class="team-text">
                        <h3><a href="#">Owunma Chimere Davis</a></h3>
                    <p>Computer Science</p>
                    </div>

                </div>

            </div>
<!--  -->
            <div class="grid three-col-grid">
                <div class="blog-post" data-aos="flip-left" data-aos-delay="900">
                    <img class="team-img" src="./assets/images/emma.jpeg" alt="">
                    <div class="team-text">
                        <h3><a href="#">Nwachukwu Emmanuel .C. </a></h3>
                    <p>Software Engineering</p>
                    </div>

                </div>
                <div class="blog-post" data-aos="flip-left" data-aos-delay="900">
                    <div class="team-img-box"><img class="team-img" src="./assets/images/cherish.jpeg" alt=""></div>

                    <div class="team-text">
                        <h3><a href="#">Onuoha Cherish .A. </a></h3>
                    <p>Computer Science</p>
                    </div>

                </div>
                <div class="blog-post" data-aos="flip-left" data-aos-delay="900">
                    <div class="team-img-box"><img class="team-img" src="./assets/images/victoria.jpeg" alt=""></div>

                    <div class="team-text">
                        <h3><a href="#">Moses Victoria .I.</a></h3>
                    <p>Computer Science</p>
                    </div>

                </div>

            </div>

            <!--  -->
            <div class="grid three-col-grid">
                <div class="blog-post" data-aos="flip-left" data-aos-delay="900">
                    <img class="team-img" src="./assets/images/pius.jpeg" alt="">
                    <div class="team-text">
                        <h3><a href="#">Okwor Pius Inah</a></h3>
                    <p>Cyber Security</p>
                    </div>

                </div>
                <div class="blog-post" data-aos="flip-left" data-aos-delay="900">
                    <div class="team-img-box"><img class="team-img" src="./assets/images/cliffor.jpeg" alt=""></div>

                    <div class="team-text">
                        <h3><a href="#">Clifford Stanley .C. </a></h3>
                    <p>Cyber Security</p>
                    </div>

                </div>
                <div class="blog-post" data-aos="flip-left" data-aos-delay="900">
                    <div class="team-img-box"><img class="team-img" src="https://th.bing.com/th/id/OIP.l6nPLCiWuJkhte2Ru60fdQAAAA?w=166&h=180&c=7&r=0&o=5&pid=1.7" alt=""></div>

                    <div class="team-text">
                        <h3><a href="#">Uzochukwu Wisdom Aaron</a></h3>
                    <p>Information Technology</p>
                    </div>

                </div>

            </div>
<!--  -->
            <div class="grid three-col-grid">
                <div class="blog-post" data-aos="flip-left" data-aos-delay="900">
                    <img class="team-img" src="https://th.bing.com/th/id/OIP.shsc3LnjtfZF4kZbc1_ojwHaHa?w=166&h=180&c=7&r=0&o=5&pid=1.7" alt="">
                    <div class="team-text">
                        <h3><a href="#">Achulike Chidera</a></h3>
                    <p>Computer Science</p>
                    </div>

                </div>
                <div class="blog-post" data-aos="flip-left" data-aos-delay="900">
                    <div class="team-img-box"><img class="team-img" src="https://th.bing.com/th/id/OIP.lNOYtQPcMv7xEC_SCHmRogHaHa?w=176&h=180&c=7&r=0&o=5&pid=1.7" alt=""></div>

                    <div class="team-text">
                        <h3><a href="#">Agbo Chiemelie</a></h3>
                    <p>Computer Science</p>
                    </div>

                </div>
                <div class="blog-post" data-aos="flip-left" data-aos-delay="900">
                    <div class="team-img-box"><img class="team-img" src="https://th.bing.com/th/id/OIP.shsc3LnjtfZF4kZbc1_ojwHaHa?w=166&h=180&c=7&r=0&o=5&pid=1.7" alt=""></div>

                    <div class="team-text">
                        <h3><a href="#"></a></h3>
                    <p></p>
                    </div>

                </div>

            </div>
            <!--  -->
            {{-- <div class="grid three-col-grid">
                <div class="blog-post" data-aos="flip-left" data-aos-delay="900">
                    <img class="team-img" src="./assets/images/favour.jpeg" alt="">
                    <div class="team-text">
                        <h3><a href="#">Echezolam Favour</a></h3>
                    <p>Information Technology</p>
                    </div>

                </div>
                <div class="blog-post" data-aos="flip-left" data-aos-delay="900">
                    <div class="team-img-box"><img class="team-img" src="./assets/images/vic.jpg" alt=""></div>

                    <div class="team-text">
                        <h3><a href="#">Obodoagwu Victory</a></h3>
                    <p>Software Engineering</p>
                    </div>

                </div>
                <div class="blog-post" data-aos="flip-left" data-aos-delay="900">
                    <div class="team-img-box"><img class="team-img" src="./assets/images/chimenzie.jpeg" alt=""></div>

                    <div class="team-text">
                        <h3><a href="#">Obodoagwu Victory</a></h3>
                    <p>Software Engineering</p>
                    </div>

                </div>

            </div> --}}
        </div>
    </section>
    <!-- //Team -->



    <!-- Contact -->
    <section id="contact">
        <div class="container">
            <div class="grid">
                <div class="contact-info" data-aos="fade-up">
                    <div class="section-intro">
                        <h1 class="heading-2">Contact info</h1>
                    </div>
                    <div class="contact-widget">
                        <h3 class="heading-3">Email</h3>
                        <ul>
                            <li>vic.obodoagwu@ieee.org</li>
                            <li>vic.obodoagwu@ieee.org</li>
                        </ul>
                    </div>
                    <div class="contact-widget">
                        <h3 class="heading-3">Phone</h3>
                        <ul>
                            <li>08024391714</li>
                            <li>08024391714</li>
                        </ul>
                    </div>
                    <div class="contact-widget">
                        <h3 class="heading-3">Location</h3>
                        <ul>
                            <li>Federal University of Technology Owerri, Imo State</li>
                        </ul>
                    </div>
                </div>
                <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
                    <div class="section-intro">
                        <h1 class="heading-2">Drop us a line</h1>
                    </div>
                    <form  method="POST" action="/store-contact">
                        @csrf
                        <div class="form-group">
                            <input type="text" id="name" name="name" class="form-input" placeholder="John Doe"  required />
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" name="email" class="form-input" placeholder="Jon@example.com"  required />
                        </div>
                        <div class="form-group">
                            <textarea  id="message" name="message" rows="5" class="form-input" placeholder="Hi there..."  required></textarea>
                        </div>
                        <div class="form-group">
                            <button  type="submit" class="btn">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- //Contact -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>Created by Group 2 - S.I.C.T</p>
            <div class="social-icons">
                <a href="#"><i class="lab la-twitter"></i></a>
                <a href="#"><i class="lab la-facebook"></i></a>
                <a href="#"><i class="lab la-youtube"></i></a>
                <a href="#"><i class="lab la-telegram"></i></a>
            </div>
        </div>
    </footer>

    <!-- typed js -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <!-- AOS -->

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./assets/js/app.js"></script>
    <script src="./assets/js/countdown.js"></script>

    @if(Session::has('sent'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                title: 'Success!',
                text: '{{ Session::get('sent') }}',
                icon: 'success',
                showCancelButton: false, // Add this line to show the "View" button
                confirmButtonText: 'OK',
                // cancelButtonText: 'View attendees' // Set the text for the "View" button
            })
        });
    </script>


@endif
</body>
</html>
