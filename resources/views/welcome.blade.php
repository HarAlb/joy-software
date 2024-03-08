<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="Description">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>JoySoft</title>
    <meta name="robots" content="noindex">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
<div class="wrapper">
    <div class="mobile-nav">
    </div>
    <header class="header">
        <div class="container">
            <div class="header__main">
                <div class="row">
                    <a href="#" class="logo"><img src="{{ asset('images/logo.svg') }}" width="148" height="40" alt="JoySoft"></a>
                    <nav class="main-nav header__nav">
                        <ul class="menu">
                            <li><a href="#target_1">About</a></li>
                            <li><a href="#target_2">Products</a></li>
                            <li><a href="#target_3">Team</a></li>
                        </ul>
                    </nav>
                    <a href="#contactSection" class="btn btn--primary">Contact Us</a>
                </div>
            </div>
        </div>
    </header>
    <main class="page-content">
        <section class="ideas-section">
            <div data-aos="fade-down" class="ideas-section__slider js-ideas-slider" id="target_1">
                <div class="idea num1" id="idea1">
                    <div class="container">
                        <div class="row">
                            <div class="idea__text">
                                <h2>Better Insights For
                                    Business <span class="highlight-second">Growth</span></h2>
                                <p><span class="highlight-second">Joy-Soft</span></p>
                                <a href="#contactSection" class="btn btn--primary">Contact Us</a>
                            </div>
                            <div class="idea__media">
                                <img src="{{ asset('images/banner/banner1.png') }}" alt="" class="idea__media__img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="idea num2">
                    <div class="container">
                        <div class="row">
                            <div class="idea__text">
                                <h2>Insights For
                                    Business <span class="highlight-second">Growth</span></h2>
                                <p><span class="highlight-second">Joy-Soft</span></p>
                                <a href="#contactSection" class="btn btn--primary">Contact Us</a>
                            </div>
                            <div class="idea__media">
                                <img src="{{ asset('images/banner/banner2.png') }}" alt="" class="idea__media__img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="top-reasons">
            <div class="container">
                <div class="top-reasons__head">
                    <h2>Top reasons <span class="highlight-second">why</span> you <br> should choose <span
                            class="highlight-primary">Joy Soft</span></h2>
                </div>
                <div class="top-reasons__body">
                    <div class="row reasons-list">
                        <div data-aos="fade-right" class="reasons-list__item">
                            <div class="reason reason--triangle">
                                <div class="reason__head">
                                    <div class="reason__layout">
                                        <svg class="icon-fill">
                                            <use xlink:href="{{ asset('images/sprite.svg#triangle-fill') }}"></use>
                                        </svg>
                                        <svg class="icon-outline">
                                            <use xlink:href="{{ asset('images/sprite.svg#triangle-outline') }}"></use>
                                        </svg>
                                    </div>
                                    <h4>Expertise & <br>Experience
                                        <svg class="icon">
                                            <use xlink:href="{{ asset('images/sprite.svg#arrow_outward') }}"></use>
                                        </svg>
                                    </h4>
                                </div>
                                <div class="reason__content">
                                    <p>Our company boasts a team of highly skilled and experienced IT professionals. We
                                        have a proven track record of successfully delivering a wide range of IT
                                        projects across various industries. Our expertise covers everything from
                                        software development and network management to cybersecurity and data analytics.
                                        Choosing us means leveraging our knowledge and experience to ensure your IT
                                        solutions are top-notch.</p>
                                    <button class="close">
                                        <svg class="icon">
                                            <use xlink:href="{{asset('images/sprite.svg#arrow_close')}}"></use>
                                        </svg>
                                    </button>
                                </div>
                                <button class="close close__mobile">
                                    <svg class="icon">
                                        <use xlink:href="{{ asset('images/sprite.svg#arrow_close') }}"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="200" class="reasons-list__item">
                            <div class="reason reason--circle">
                                <div class="reason__head">
                                    <div class="reason__layout">
                                        <svg class="icon-fill">
                                            <use xlink:href="{{ asset('images/sprite.svg#circle-fill') }}"></use>
                                        </svg>
                                        <svg class="icon-outline">
                                            <use xlink:href="{{asset('images/sprite.svg#circle-outline')}}"></use>
                                        </svg>
                                    </div>
                                    <h4>Client-Centric <br> Approach
                                        <svg class="icon">
                                            <use xlink:href="{{ asset('images/sprite.svg#arrow_outward') }}"></use>
                                        </svg>
                                    </h4>
                                </div>
                                <div class="reason__content">
                                    <p>We prioritize our clients' needs and goals above all else. Our client-centric
                                        approach means that we take the time to understand your specific requirements
                                        and challenges. We collaborate closely with you throughout the project
                                        lifecycle, from initial planning to post-implementation support. Your
                                        satisfaction is our ultimate goal, and we're dedicated to delivering tailored
                                        solutions that align with your business objectives.</p>
                                    <button class="close">
                                        <svg class="icon">
                                            <use xlink:href="{{ asset('images/sprite.svg#arrow_close') }}"></use>
                                        </svg>
                                    </button>
                                </div>
                                <button class="close close__mobile">
                                    <svg class="icon">
                                        <use xlink:href="{{ asset('images/sprite.svg#arrow_close') }}"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div data-aos="fade-left" data-aos-delay="400" class="reasons-list__item">
                            <div class="reason reason--square">
                                <div class="reason__head">
                                    <div class="reason__layout">
                                        <svg class="icon-fill">
                                            <use xlink:href="{{ asset('images/sprite.svg#square-fill') }}"></use>
                                        </svg>
                                        <svg class="icon-outline">
                                            <use xlink:href="{{ asset('images/sprite.svg#square-outline') }}"></use>
                                        </svg>
                                    </div>
                                    <h4>Innovation & <br> Adaptability
                                        <svg class="icon">
                                            <use xlink:href="{{ asset('images/sprite.svg#arrow_outward') }}"></use>
                                        </svg>
                                    </h4>
                                </div>
                                <div class="reason__content">
                                    <p>The IT landscape is constantly evolving, and we're committed to staying at the
                                        forefront of technology trends. We encourage innovation within our team and
                                        continuously seek out new tools, methodologies, and best practices. By choosing
                                        our company, you benefit from cutting-edge solutions that can help your business
                                        stay competitive and adapt to changing market dynamics.</p>
                                    <button class="close">
                                        <svg class="icon">
                                            <use xlink:href="{{ asset('images/sprite.svg#arrow_close') }}"></use>
                                        </svg>
                                    </button>
                                </div>
                                <button class="close close__mobile">
                                    <svg class="icon">
                                        <use xlink:href="{{ asset('images/sprite.svg#arrow_close') }}"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="steps-section">
            <div class="container">
                <div class="row">
                    <div class="steps-section__intro" data-aos="fade-down">
                        <h2>This is <span class="highlight-second">how</span> <br> we do it</h2>
                        <p>These development steps provide an overview of the development process. The specific details
                            and methodologies used may vary depending on the project's complexity and the development
                            team's approach.</p>
                        <a href="#contactSection" class="btn btn--primary">Contact Us</a>
                    </div>
                    <div class="steps-section__body">

                        <div class="step">
                            <div class="row">
                                <div data-aos="fade-right" class="step__img__block"><img src="{{ asset('images/undraw_meeting_re_i53h.svg') }}" alt="" class="step__img"></div>
                                <div class="step__body" data-aos="fade-left">
                                    <h3 class="step__title"><span>Requirements <br> Gathering</span></h3>
                                    <ul>
                                        <li>The first step is to understand and gather the project's requirements. This
                                            involves meeting with stakeholders, users, and clients to define what the
                                            software or IT solution needs to accomplish.
                                        </li>
                                        <li>Document these requirements in a clear and detailed manner, ensuring that
                                            they are well-defined and measurable.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="step">
                            <div class="row">
                                <div data-aos="fade-right" class="step__img__block"><img src="{{ asset('images/undraw_character_drawing_re_s2lj.svg') }}" alt="" class="step__img"></div>
                                <div class="step__body" data-aos="fade-left">
                                    <h3 class="step__title"><span>System Design</span></h3>
                                    <ul>
                                        <li>Once you have a clear understanding of the requirements, move on to
                                            designing the system. This involves creating a high-level architecture and
                                            defining the components and modules that will make up the system.
                                        </li>
                                        <li>Design the user interface (UI) and user experience (UX) if applicable.</li>
                                        <li>Define the database structure and data flow within the system.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="step">
                            <div class="row">
                                <div data-aos="fade-right" class="step__img__block"><img src="{{ asset('images/undraw_product_iteration_kjok.svg') }}" alt="" class="step__img"></div>
                                <div class="step__body" data-aos="fade-left">
                                    <h3 class="step__title"><span>Development</span></h3>
                                    <ul>
                                        <li>With the design in place, developers start coding and building the software
                                            or IT solution. This step involves writing the actual code, implementing
                                            features, and creating the necessary functionalities.
                                        </li>
                                        <li>Developers typically follow best coding practices and use version control
                                            systems to manage code changes.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="step">
                            <div class="row">
                                <div data-aos="fade-right" class="step__img__block"><img src="{{ asset('images/undraw_scientist_ft0o.svg') }}" alt="" class="step__img"></div>
                                <div class="step__body" data-aos="fade-left">
                                    <h3 class="step__title"><span>Testing and Quality Assurance</span></h3>
                                    <ul>
                                        <li>After development, thoroughly test the software to ensure it functions
                                            correctly and meets the defined requirements.
                                        </li>
                                        <li>Testing includes unit testing (testing individual components), integration
                                            testing (testing how different parts of the system work together), and
                                            system testing (testing the entire system).
                                        </li>
                                        <li>Identify and address any defects, bugs, or issues during this phase.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="step">
                            <div class="row">
                                <div data-aos="fade-right" class="step__img__block"><img src="{{ asset('images/banner/banner2.png') }}" alt="" class="step__img"></div>
                                <div class="step__body" data-aos="fade-left">
                                    <h3 class="step__title"><span>Deployment</span></h3>
                                    <ul>
                                        <li>Once the software is thoroughly tested and deemed ready for production use,
                                            it's time for deployment.
                                        </li>
                                        <li>Prepare the production environment, including servers and databases.</li>
                                        <li>Deploy the software to production servers and monitor the deployment process
                                            to address any unexpected issues.
                                        </li>
                                        <li>Ensure a smooth transition from development to production, and make the
                                            software accessible to users.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="works-section" id="target_2">
            <div class="container" data-aos="fade-down">
                <div class="works-section__head">
                    <h2><span class="highlight-second">What</span> we have done</h2>
                    <p>The portal where you can organize your safe trips</p>
                </div>
                <div class="works-section__body">
                    <a href="https://msho-norshen.com" class="work" target="_blank">
                         <span class="work__illusion">
                             <img src="{{ asset('images/don/done.png') }}" alt="" class="work__illusion__img">
                         </span>
                        <div class="work__image">
                            <picture>
                                <source type="image/png" srcset="{{ asset('images/Screenshot_14.png') }}">
                                <img src="{{ asset('images/Screenshot_14.png') }}" width="760" height="428" alt="Joy Soft product">
                            </picture>
                            <picture>
                                <source type="image/png" srcset="{{ asset('images/Screenshot 2024-03-05 161734.png') }}">
                                <img src="{{ asset('images/Screenshot 2024-03-05 161734.png') }}" width="760" height="428" alt="Joy Soft product">
                            </picture>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="staff-section" id="target_3" data-aos="fade-up">
            <div class="container" >
                <div class="staff-section__head">
                    <h2><span class="highlight-second">Who</span> does the magic</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod</p>
                </div>
            </div>
            <div class="staff-section__body">
                <div class="staff-slider owl-carousel">
                    <div class="item">
                        <div class="staff">
                            <div class="staff__img">
                                <img src="{{ asset('images/vectors/big.png') }}" alt="" class="big user__vector">
                                <img src="{{ asset('images/vectors/smallBlue.png') }}" alt="" class="smallBlue user__vector">
                                <img src="{{ asset('images/vectors/smallBlueBg.png') }}" alt="" class="smallBlueBg user__vector">
                                <img src="{{ asset('images/vectors/smallYel.png') }}" alt="" class="smallYel user__vector">
                                <img src="{{ asset('images/vectors/smallYelBg.png') }}" alt="" class="smallYelBg user__vector">
                                <img src="{{ asset('images/podmatch-jNd-P3bo8gk-unsplash.png') }}" width="" height="" alt="" class="staff__avatar">
                            </div>
                            <div class="staff__details">
                                <div class="staff__name">Michael Ball</div>
                                <div class="staff__position">Frontend Developer</div>
                                <ul class="staff__top-skills">
                                    <li>
                                        <img src="{{ asset('images/icons/laravel-icon.png') }}" alt="" width="12" height="12">
                                        <a href="https://msho-norshen.com" class="work" target="_blank">
                                            Laravel
                                        </a>
                                    </li>
                                    <li>Flutter</li>
                                    <li>HTML</li>
                                    <li>CSS</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="staff">
                            <div class="staff__img">
                                <img src="{{asset('images/vectors/big.png')}}" alt="" class="big user__vector">
                                <img src="{{asset('images/vectors/smallBlue.png')}}" alt="" class="smallBlue user__vector">
                                <img src="{{asset('images/vectors/smallBlueBg.png')}}" alt="" class="smallBlueBg user__vector">
                                <img src="{{asset('images/vectors/smallYel.png')}}" alt="" class="smallYel user__vector">
                                <img src="{{asset('images/vectors/smallYelBg.png')}}" alt="" class="smallYelBg user__vector">
                                <img src="{{asset('images/podmatch-jNd-P3bo8gk-unsplash.png')}}" width="" height="" alt="" class="staff__avatar">
                            </div>
                            <div class="staff__details">
                                <div class="staff__name">Michael Ball</div>
                                <div class="staff__position">Frontend Developer</div>
                                <ul class="staff__top-skills">
                                    <li>JavaScript</li>
                                    <li>Flutter</li>
                                    <li>HTML</li>
                                    <li>CSS</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="staff">
                            <div class="staff__img">
                                <img src="{{ asset('images/vectors/big.png') }}" alt="" class="big user__vector">
                                <img src="{{ asset('images/vectors/smallBlue.png') }}" alt="" class="smallBlue user__vector">
                                <img src="{{ asset('images/vectors/smallBlueBg.png') }}" alt="" class="smallBlueBg user__vector">
                                <img src="{{ asset('images/vectors/smallYel.png') }}" alt="" class="smallYel user__vector">
                                <img src="{{ asset('images/vectors/smallYelBg.png') }}" alt="" class="smallYelBg user__vector">
                                <img src="{{ asset('images/podmatch-jNd-P3bo8gk-unsplash.png') }}" width="" height="" alt="" class="staff__avatar">
                            </div>
                            <div class="staff__details">
                                <div class="staff__name">Michael Ball</div>
                                <div class="staff__position">Frontend Developer</div>
                                <ul class="staff__top-skills">
                                    <li>JavaScript</li>
                                    <li>Flutter</li>
                                    <li>HTML</li>
                                    <li>CSS</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="staff">
                            <div class="staff__img">
                                <img src="{{ asset('images/vectors/big.png') }}" alt="" class="big user__vector">
                                <img src="{{ asset('images/vectors/smallBlue.png') }}" alt="" class="smallBlue user__vector">
                                <img src="{{ asset('images/vectors/smallBlueBg.png') }}" alt="" class="smallBlueBg user__vector">
                                <img src="{{ asset('images/vectors/smallYel.png') }}" alt="" class="smallYel user__vector">
                                <img src="{{ asset('images/vectors/smallYelBg.png') }}" alt="" class="smallYelBg user__vector">
                                <img src="{{ asset('images/podmatch-jNd-P3bo8gk-unsplash.png') }}" width="" height="" alt="" class="staff__avatar">
                            </div>
                            <div class="staff__details">
                                <div class="staff__name">Michael Ball</div>
                                <div class="staff__position">Frontend Developer</div>
                                <ul class="staff__top-skills">
                                    <li>JavaScript</li>
                                    <li>Flutter</li>
                                    <li>HTML</li>
                                    <li>CSS</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="staff">
                            <div class="staff__img">
                                <img src="images/vectors/big.png" alt="" class="big user__vector">
                                <img src="images/vectors/smallBlue.png" alt="" class="smallBlue user__vector">
                                <img src="images/vectors/smallBlueBg.png" alt="" class="smallBlueBg user__vector">
                                <img src="images/vectors/smallYel.png" alt="" class="smallYel user__vector">
                                <img src="images/vectors/smallYelBg.png" alt="" class="smallYelBg user__vector">
                                <img src="images/podmatch-jNd-P3bo8gk-unsplash.png" width="" height="" alt="" class="staff__avatar">
                            </div>
                            <div class="staff__details">
                                <div class="staff__name">Michael Ball</div>
                                <div class="staff__position">Frontend Developer</div>
                                <ul class="staff__top-skills">
                                    <li>JavaScript</li>
                                    <li>Flutter</li>
                                    <li>HTML</li>
                                    <li>CSS</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="staff">
                            <div class="staff__img">
                                <img src="images/vectors/big.png" alt="" class="big user__vector">
                                <img src="images/vectors/smallBlue.png" alt="" class="smallBlue user__vector">
                                <img src="images/vectors/smallBlueBg.png" alt="" class="smallBlueBg user__vector">
                                <img src="images/vectors/smallYel.png" alt="" class="smallYel user__vector">
                                <img src="images/vectors/smallYelBg.png" alt="" class="smallYelBg user__vector">
                                <img src="images/podmatch-jNd-P3bo8gk-unsplash.png" width="" height="" alt="" class="staff__avatar">
                            </div>
                            <div class="staff__details">
                                <div class="staff__name">Michael Ball</div>
                                <div class="staff__position">Frontend Developer</div>
                                <ul class="staff__top-skills">
                                    <li>JavaScript</li>
                                    <li>Flutter</li>
                                    <li>HTML</li>
                                    <li>CSS</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="staff">
                            <div class="staff__img">
                                <img src="images/vectors/big.png" alt="" class="big user__vector">
                                <img src="images/vectors/smallBlue.png" alt="" class="smallBlue user__vector">
                                <img src="images/vectors/smallBlueBg.png" alt="" class="smallBlueBg user__vector">
                                <img src="images/vectors/smallYel.png" alt="" class="smallYel user__vector">
                                <img src="images/vectors/smallYelBg.png" alt="" class="smallYelBg user__vector">
                                <img src="images/podmatch-jNd-P3bo8gk-unsplash.png" width="" height="" alt="" class="staff__avatar">
                            </div>
                            <div class="staff__details">
                                <div class="staff__name">Michael Ball</div>
                                <div class="staff__position">Frontend Developer</div>
                                <ul class="staff__top-skills">
                                    <li>JavaScript</li>
                                    <li>Flutter</li>
                                    <li>HTML</li>
                                    <li>CSS</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="contact-section" id="contactSection">
            <div class="container">
                <div class="row">
                    <div data-aos="fade-right" class="contact-section__form">
                        <h2>Everything you <span class="highlight-second">need</span></h2>
                        <form action="">
                            <div class="fields-group">
                                <label>
                                    <input checked type="radio" name="job-type" value="realisation">
                                    <span>Project Realisation</span>
                                </label>
                                <label>
                                    <input type="radio" name="job-type" value="b2b">
                                    <span>B2B</span>
                                </label>
                            </div>
                            <div class="field-wrap">
                                <input name="email" required type="email" class="field" placeholder="Email*">
                            </div>
                            <div class="field-wrap">
                                <input name="phone" required type="text" class="field" placeholder="Phone*">
                            </div>
                            <div class="field-wrap">
                                <textarea name="message" class="" placeholder="Your Message"></textarea>
                            </div>
                            <div class="field-wrap">
                                <button class="form-submit" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div data-aos="fade-left" class="contact-section__media">
                        <picture>
                            <source type="image/webp" srcset="{{ asset('images/contact-illustration.webp') }}">
                            <source type="image/png" srcset="{{ asset('images/contact-illustration.png') }}">
                            <img src="{{ asset('images/contact-illustration.png') }}" width="691" height="564" alt="">
                        </picture>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer__logo">
                    <a href="#" class="logo"><img src="{{ asset('images/logo-white.svg') }}" width="148" height="40" alt="JoySoft"></a>
                </div>
                <div class="footer__copyright">©2023 Joy Soft. All rights reserved</div>
                <div class="footer__social">
                    <ul class="menu menu--social">
                        <li>
                            <a href="#">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg#linkedin') }}"></use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg#facebook') }}"></use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg class="icon">
                                    <use xlink:href="{{ asset('images/sprite.svg#instagram') }}"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="{{ asset('js/jquery_3.7.0_jquery.min.js') }}"></script>
<script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
<script src="{{ asset('js/slick.min.js') }}"></script>
<script src="{{ asset('js/aos.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
