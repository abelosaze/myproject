<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>Access Academy</title>
  <meta name="title" content="Youdemi">
  <meta name="description" content="This is a education html template made by codewithsadee">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom font link
  -->
  <link rel="stylesheet" href="./assets/font/font.css">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-banner.png">
  <link rel="preload" as="image" href="./assets/images/hero-bg.png">
  <style>/*-----------------------------------*\
  #main.css
\*-----------------------------------*/

/**
 * copyright 2022 codewithsadee
 */





/*-----------------------------------*\
  #CUSTOM PROPERTY
\*-----------------------------------*/

:root {

  /**
   * colors
   */

  --selective-yellow: hsl(42, 100%, 56%);
  --roman-silver: hsl(240, 6%, 51%);
  --roman-silver_10: hsla(240, 6%, 51%, 0.1);
  --light-coral: hsl(357, 100%, 75%);
  --oxford-blue: hsl(224, 53%, 10%);
  --light-gray: hsl(0, 0%, 80%);
  --keppei: hsl(173, 60%, 47%);
  --white: hsl(0, 0%, 100%);
  --black: hsl(0, 0%, 0%);
  --black_10: hsla(0, 0%, 0%, 0.1);

  /**
   * typography
   */

  --ff-gilroy: "Gilroy", sans-serif;

  --headline-lg: 4.8rem;
  --headline-md: 3rem;
  --headline-sm: 2.4rem;
  --title-lg: 2.2rem;
  --title-md: 2rem;
  --title-sm: 1.8rem;
  
  --fw-500: 500;
  --fw-600: 600;
  --fw-700: 700;

  /**
   * spacing
   */

  --section-padding: 56px;

  /**
   * box shadow
   */

  --shadow-1: 0px 35px 65px -10px hsla(0, 0%, 0%, 0.05);
  --shadow-2: 0 10px 40px hsla(0, 0%, 0%, 0.06);

  /**
   * border radius
   */

  --radius-4: 4px;
  --radius-6: 6px;
  --radius-8: 8px;
  --radius-circle: 50%;

  /**
   * transition
   */

  --transition: 0.25s ease;
  --cubic-in: cubic-bezier(0.51, 0.03, 0.64, 0.28);
  --cubic-out: cubic-bezier(0.05, 0.83, 0.52, 0.97);

}





/*-----------------------------------*\
  #RESET
\*-----------------------------------*/

*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

li { list-style: none; }

a,
img,
span,
button,
ion-icon { display: block; }

a {
  text-decoration: none;
  color: inherit;
}

img { height: auto; }

button {
  background: none;
  border: none;
  font: inherit;
  cursor: pointer;
}

html {
  font-family: var(--ff-gilroy);
  font-size: 10px;
  scroll-behavior: smooth;
}

body {
  background-color: var(--white);
  color: var(--roman-silver);
  font-size: 1.6rem;
  line-height: 1.5;
  overflow: hidden;
}

body.loaded { overflow: visible; }

body.nav-active { overflow: hidden; }





/*-----------------------------------*\
  #REUSED STYLE
\*-----------------------------------*/

.container { padding-inline: 16px; }

.headline-lg,
.headline-md,
.headline-sm,
.title-lg {
  color: var(--oxford-blue);
  font-weight: var(--fw-700);
}

.headline-lg {
  font-size: var(--headline-lg);
  line-height: 1.3;
}

.headline-md {
  font-size: var(--headline-md);
  line-height: 1.2;
}

.headline-sm { font-size: var(--headline-sm); }

.title-lg {
  font-size: var(--title-lg);
  line-height: 1.4;
}

.title-md { font-size: var(--title-md); }

.title-sm {
  font-size: var(--title-sm);
  font-weight: var(--fw-500);
}

.section { padding-block: var(--section-padding); }

.has-bg-image {
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}

.has-before,
.has-after {
  position: relative;
  z-index: 1;
}

.has-before::before,
.has-after::after {
  content: "";
  position: absolute;
}

.btn {
  --bg: var(--light-coral);
  max-width: max-content;
  background-color: var(--bg);
  color: var(--white);
  font-weight: var(--fw-500);
  padding: 12px 24px;
  border-radius: var(--radius-6);
  transition: var(--transition);
  outline: none;
}

.btn-secondary { --bg: var(--oxford-blue); }

:is(.btn-primary, .btn-secondary):is(:hover, :focus-visible) {
  box-shadow: 0 0 0 2px var(--white), 0 0 0 5px var(--bg);
}

.btn-tertiary {
  --bg: var(--white);
  color: var(--oxford-blue);
  font-weight: var(--fw-600);
}

:is(.headline-lg, .headline-md) .span {
  color: var(--light-coral);
  display: inline;
}

.section-subtitle {
  font-weight: var(--fw-600);
  color: var(--keppei);
  margin-block-end: 4px;
}

.text-center { text-align: center; }

.section-title { margin-block-end: 24px; }

.headline-md .has-after { padding-block-end: 8px; }

.headline-md .has-after::after {
  background-image: url("../images/line-shape.svg");
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background-repeat: no-repeat;
  background-position: center bottom;
  background-size: contain;
  z-index: -1;
}

.grid-list {
  display: grid;
  gap: 28px;
}

.card {
  position: relative;
  background-color: var(--white);
  padding: 24px;
  border-radius: var(--radius-8);
  transition: var(--transition);
}

.card:is(:hover, :focus-within) { box-shadow: var(--shadow-1); }

.layer-link {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.w-100 { width: 100%; }

.img-cover {
  width: 100%;
  height: 100%;
  object-fit: cover;
}





/*-----------------------------------*\
  #PRELOADER
\*-----------------------------------*/

.preloader {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100vh;
  background-color: var(--light-coral);
  display: grid;
  place-items: center;
  z-index: 6;
  transition: var(--transition);
}

.preloader.loaded {
  visibility: hidden;
  opacity: 0;
}

.preloader .circle {
  width: 50px;
  height: 50px;
  border-radius: var(--radius-circle);
  border: 4px solid var(--white);
  border-block-start-color: transparent;
  animation: rotate360 1s ease infinite;
}

@keyframes rotate360 {
  0% { transform: rotate(0); }
  100% { transform: rotate(1turn); }
}





/*-----------------------------------*\
  #HEADER
\*-----------------------------------*/

.header .btn { display: none; }

.header {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  padding-block: 32px;
  z-index: 4;
}

.header.active {
  background-color: var(--white);
  position: fixed;
  box-shadow: var(--shadow-2);
  animation: headerActive 0.5s ease forwards;
}

@keyframes headerActive {
  0% { transform: translateY(-100%); }
  100% { transform: translateY(0); }
}

.header .container,
.navbar-top {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.nav-open-btn,
.nav-close-btn { font-size: 32px; }

.navbar {
  position: fixed;
  top: 0;
  left: -320px;
  max-width: 320px;
  width: 100%;
  background-color: var(--white);
  height: 100vh;
  padding: 40px 16px;
  z-index: 2;
  transition: 0.25s var(--cubic-in);
  visibility: hidden;
}

.navbar.active {
  transition: 0.5s var(--cubic-out);
  visibility: visible;
  transform: translateX(320px);
}

.navbar-top { margin-block-end: 34px; }

.nav-close-btn ion-icon { --ionicon-stroke-width: 35px; }

.navbar-item:not(:last-child) { border-block-end: 1px solid var(--black_10); }

.navbar-link {
  padding-block: 8px;
  transition: var(--transition);
}

.navbar-link:is(:hover, :focus-visible) { color: var(--oxford-blue); }

.overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100vh;
  background-color: var(--black);
  opacity: 0;
  visibility: hidden;
  transition: var(--transition);
}

.overlay.active {
  opacity: 0.6;
  visibility: visible;
}





/*-----------------------------------*\
  #HERO
\*-----------------------------------*/

.hero-banner { display: none; }

.hero { padding-block-start: calc(var(--pt, 96px) + var(--section-padding)); }

.hero .title-md {
  font-weight: var(--fw-500);
  padding-inline-start: 16px;
  margin-block: 24px 44px;
}

.hero .title-md::before {
  top: 0;
  left: 0;
  width: 2px;
  height: 100%;
  background-color: var(--light-coral);
}

.hero .btn-group {
  display: flex;
  flex-wrap: wrap;
  gap: 12px;
}





/*-----------------------------------*\
  #CATEGORY
\*-----------------------------------*/

.category .grid-list { padding-block: 40px 52px; }

.category-card {
  display: flex;
  align-items: flex-start;
  gap: 20px;
  border-inline-start: 4px solid transparent;
}

.category-card:is(:hover, :focus-within) { border-color: var(--light-coral); }

.category-card .title-sm { margin-block-start: 4px; }

.category .btn { margin-inline: auto; }





/*-----------------------------------*\
  #ABOUT
\*-----------------------------------*/

.about .container {
  display: grid;
  gap: 30px;
}

.about .section-text,
.progress-list li:not(:last-child) { margin-block-end: 32px; }

.progress-label-wrapper {
  display: flex;
  justify-content: space-between;
  margin-block-end: 8px;
}

.progress-label-wrapper .title-sm {
  color: var(--oxford-blue);
  font-weight: var(-fw-600);
}

.progress {
  background-color: var(--roman-silver_10);
  height: 6px;
  border-radius: var(--radius-6);
}

.progress-fill {
  height: 100%;
  border-radius: inherit;
}

.progress-fill.red {
  background-color: var(--light-coral);
  width: 86%;
}

.progress-fill.green {
  background-color: var(--keppei);
  width: 67%;
}

.progress-fill.yellow {
  background-color: var(--selective-yellow);
  width: 95%;
}





/*-----------------------------------*\
  #COURSE
\*-----------------------------------*/

.course .grid-list { padding-block: 20px 44px; }

.course-card {
  border-block-end: 4px solid transparent;
  display: flex;
  flex-direction: column;
  gap: 24px;
}

.course-card:is(:hover, :focus-within) { border-color: var(--light-coral); }

.course-card .card-banner {
  height: 160px;
  background-color: var(--light-gray);
  overflow: hidden;
  border-radius: var(--radius-4);
}

.course-card :is(.wrapper, .rating-wrapper) {
  display: flex;
  align-items: center;
}

.course-card .wrapper {
  justify-content: space-between;
  gap: 16px;
}

.course-card .card-price { color: var(--light-coral); }

.course-card .rating-wrapper { gap: 4px; }

.course-card .card-title { margin-block: 8px 16px; }

.course-card .card-meta { justify-content: flex-start; }

.course-card .card-meta .title-sm {
  display: flex;
  gap: 8px;
}

.course .btn { margin-inline: auto; }





/*-----------------------------------*\
  #CTA
\*-----------------------------------*/

.cta {
  background-color: var(--keppei);
  padding: 48px 24px;
  text-align: center;
}

.cta .headline-md { color: var(--white); }

.cta .btn { margin-inline: auto; }





/*-----------------------------------*\
  #FOOTER
\*-----------------------------------*/

.footer-top .container {
  display: grid;
  gap: 24px;
}

.footer-text { margin-block: 40px 32px; }

.social-list {
  display: flex;
  gap: 16px;
}

.footer-list-title { margin-block-end: 32px; }

.footer-link { margin-block-start: 16px; }

.footer-top .grid-list {
  grid-template-columns: repeat(3, 1fr);
  gap: 16px;
}

.footer-top .grid-list .img-cover { border-radius: var(--radius-6); }

.footer-bottom {
  padding-block: 32px;
  text-align: center;
  border-block-start: 1px solid var(--black_10);
}

.copyright { font-weight: var(--fw-500); }





/*-----------------------------------*\
  #CONTAINER QUERIES
\*-----------------------------------*/

/**
 * container query for card
 */

.card-container { container-type: inline-size; }

@container (min-width: 500px) {

  .course-card { flex-direction: row; }

  .course-card .card-banner {
    width: 160px;
    flex-shrink: 0;
  }

}





/*-----------------------------------*\
  #MEDIA QUERIES
\*-----------------------------------*/

/**
 * responsive for large than 575px screen
 */

@media (min-width: 575px) {

  /**
   * REUSED STYLE
   */

  .container {
    max-width: 640px;
    width: 100%;
    margin-inline: auto;
  }

  .card { padding: 32px; }



  /**
   * FOOTER
   */

  .footer-top .container { grid-template-columns: 1fr 1fr; }

}





/**
 * responsive for large than 768px screen
 */

@media (min-width: 768px) {

  /**
   * CUSTOM PROPERTY
   */

  :root {
    
    /**
     * typography
     */

    --headline-lg: 6rem;
    --headline-md: 3.8rem;

    /**
     * spacing
     */

    --section-padding: 80px;

  }



  /**
   * REUSED STYLE
   */

  .container { max-width: 768px; }

  .grid-list { grid-template-columns: 1fr 1fr; }



  /**
   * CTA
   */

  .cta { padding-block: 78px; }

}





/**
 * responsive for large than 992px screen
 */

@media (min-width: 992px) {

  :root {

    /**
     * typography
     */

    --headline-lg: 7.7rem;
    --headline-md: 4.4rem;

    /**
     * spacing
     */

    --section-padding: 120px;

  }



  /**
   * REUSED STYLE
   */

  .container { max-width: 1024px; }

  .btn {
    padding: 16px 32px;
    font-size: 1.8rem;
  }



  /**
   * HEADER
   */

  .nav-open-btn,
  .overlay,
  .navbar-top { display: none; }

  .navbar,
  .navbar.active {
    all: unset;
    display: block;
  }

  .navbar-list {
    display: flex;
    gap: 8px;
  }

  .navbar-item:not(:last-child) { border-block-end: none; }

  .navbar-link { padding: 8px 16px; }

  .header .btn {
    display: block;
    box-shadow: none;
  }



  /**
   * CATEGORY
   */

  .grid-list { grid-template-columns: repeat(3, 1fr); }



  /**
   * ABOUT
   */

  .about .container { grid-template-columns: 1fr 1fr; }



  /**
   * COURSE
   */

  .course .grid-list {
    grid-template-columns: 1fr 1fr;
    margin-block: 40px 48px;
  }



  /**
   * FOOTER
   */

  .footer-top .container { grid-template-columns: 1fr 0.5fr 0.5fr 0.8fr; }

  .footer-brand { padding-inline-end: 24px; }

}





/**
 * responsive for large than 1200px screen
 */

@media (min-width: 1200px) {

  /**
   * REUSED STYE
   */

  .container { max-width: 1170px; }



  /**
   * HERO
   */

  .hero-banner {
    display: block;
    max-width: max-content;
    margin-inline-end: -14%;
  }

  .hero .container {
    display: grid;
    grid-template-columns: 1fr 0.9fr;
    gap: 48px;
  }

  .hero .title-md { margin-block: 40px 60px; }



  /**
   * ABOUT
   */

  .about .container { grid-template-columns: 1fr 0.7fr; }



  /**
   * CTA
   */

  .cta { text-align: left; }

  .cta .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .cta .headline-md { max-width: 22ch; }

  .cta .btn { margin-inline: 0; }



  /**
   * FOOTER
   */

  .footer .container { gap: 48px; }

}</style>
</head>

<body>

  <!-- 
    - PRELOADER
  -->

  <div class="preloader" data-preloader>
    <div class="circle" data-circle></div>
  </div>





  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="./assets/images/logo.svg" width="145" height="27" alt="Youdemi home">
      </a>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">
          <a href="#" class="logo">
            <img src="./assets/images/logo.svg" width="145" height="27" alt="Youdemi home">
          </a>

          <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#" class="navbar-link title-sm" data-nav-link>Home</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link title-sm" data-nav-link>Courses</a>
          </li>

          <li class="navbar-item">
            <a href="/post" class="navbar-link title-sm" data-nav-link>Posts</a>
          </li>

          <li class="navbar-item">
            <a href="/create" class="navbar-link title-sm" data-nav-link>Blog</a>
          </li>

          <li class="navbar-item">
            <a href="/contact" class="navbar-link title-sm" data-nav-link>Contacts</a>
          </li>

        </ul>

      </nav>

      <a href="/register" class="btn btn-secondary">Register</a>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
      </button>

      <div class="overlay" data-overlay data-nav-toggler></div>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero has-bg-image" aria-labelledby="hero-label"
        style="background-image: url('./assets/images/hero-bg.png')">
        <div class="container">

          <div class="hero-content">

            <h1 class="headline-lg" id="hero-label">
              Better <span class="span">Learning Future</span> Starts With Youdemi
            </h1>

            <p class="title-md has-before">
              It is long established fact that reader distracted by the readable content.
            </p>

            <div class="btn-group">
              <a href="#" class="btn btn-primary">Get Started Now</a>

              <a href="#" class="btn btn-secondary">Get Started Now</a>
            </div>

          </div>

          <figure class="hero-banner">
            <img src="./assets/images/hero-banner.png" width="590" height="620" alt="hero banner" class="w-100">
          </figure>

        </div>
      </section>





      <!-- 
        - #CATEGORY
      -->

      <section class="section category has-bg-image" aria-labelledby="category-label"
        style="background-image: url('./assets/images/category-bg.png')">
        <div class="container">

          <p class="title-sm text-center section-subtitle" id="category-label">Course Categories</p>

          <h2 class="headline-md text-center section-title">
            Browse Top <span class="span has-after">Categories</span>
          </h2>

          <ul class="grid-list">

            <li>
              <div class="card category-card">

                <div class="card-icon">
                  <img src="./assets/images/category-1.svg" width="72" height="72" loading="lazy"
                    alt="Data Science icon">
                </div>

                <div>
                  <h3 class="title-lg">Data Science</h3>

                  <p class="title-sm">68 Courses</p>
                </div>

                <a href="#" class="layer-link" aria-label="Data Science Category"></a>

              </div>
            </li>

            <li>
              <div class="card category-card">

                <div class="card-icon">
                  <img src="./assets/images/category-2.svg" width="72" height="72" loading="lazy"
                    alt="UI/UX Design icon">
                </div>

                <div>
                  <h3 class="title-lg">UI/UX Design</h3>

                  <p class="title-sm">68 Courses</p>
                </div>

                <a href="#" class="layer-link" aria-label="UI/UX Design Category"></a>

              </div>
            </li>

            <li>
              <div class="card category-card">

                <div class="card-icon">
                  <img src="./assets/images/category-3.svg" width="72" height="72" loading="lazy"
                    alt="Modern Physics icon">
                </div>

                <div>
                  <h3 class="title-lg">Modern Physics</h3>

                  <p class="title-sm">68 Courses</p>
                </div>

                <a href="#" class="layer-link" aria-label="Modern Physics Category"></a>

              </div>
            </li>

            <li>
              <div class="card category-card">

                <div class="card-icon">
                  <img src="./assets/images/category-4.svg" width="72" height="72" loading="lazy"
                    alt="Music Production icon">
                </div>

                <div>
                  <h3 class="title-lg">Music Production</h3>

                  <p class="title-sm">68 Courses</p>
                </div>

                <a href="#" class="layer-link" aria-label="Music Production Category"></a>

              </div>
            </li>

            <li>
              <div class="card category-card">

                <div class="card-icon">
                  <img src="./assets/images/category-5.svg" width="72" height="72" loading="lazy"
                    alt="Data Science icon">
                </div>

                <div>
                  <h3 class="title-lg">Data Science</h3>

                  <p class="title-sm">68 Courses</p>
                </div>

                <a href="#" class="layer-link" aria-label="Data Science Category"></a>

              </div>
            </li>

            <li>
              <div class="card category-card">

                <div class="card-icon">
                  <img src="./assets/images/category-6.svg" width="72" height="72" loading="lazy" alt="Finances icon">
                </div>

                <div>
                  <h3 class="title-lg">Finances</h3>

                  <p class="title-sm">68 Courses</p>
                </div>

                <a href="#" class="layer-link" aria-label="Finances Category"></a>

              </div>
            </li>

          </ul>

          <a href="#" class="btn btn-primary">View All Categories</a>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" aria-labelledby="about-label">
        <div class="container">

          <figure class="about-banner">
            <img src="./assets/images/about-banner.png" width="775" height="685" loading="lazy" alt="about banner"
              class="w-100">
          </figure>

          <div class="about-content">

            <p class="title-sm section-subtitle" id="about-label">About Youdemi</p>

            <h2 class="headline-md section-title">
              We Provide The Best Online <span class="span has-after">Education</span>
            </h2>

            <p class="title-sm section-text">
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in some form, by injected humour.
            </p>

            <ul class="progress-list">

              <li>
                <div class="progress-label-wrapper">
                  <p class="title-sm">Business Studies</p>

                  <p class="title-sm">86%</p>
                </div>

                <div class="progress">
                  <div class="progress-fill red"></div>
                </div>
              </li>

              <li>
                <div class="progress-label-wrapper">
                  <p class="title-sm">Marketing</p>

                  <p class="title-sm">67%</p>
                </div>

                <div class="progress">
                  <div class="progress-fill green"></div>
                </div>
              </li>

              <li>
                <div class="progress-label-wrapper">
                  <p class="title-sm">Design & Development</p>

                  <p class="title-sm">95%</p>
                </div>

                <div class="progress">
                  <div class="progress-fill yellow"></div>
                </div>
              </li>

            </ul>

          </div>

        </div>
      </section>





      <!-- 
        - #COURSE
      -->

      <section class="section course has-bg-image" aria-labelledby="course-label"
        style="background-image: url('./assets/images/course-bg.png')">
        <div class="container">

          <p class="title-sm section-subtitle text-center">Featured Courses</p>

          <h2 class="headline-md section-title text-center" id="course-label">
            Choose Unlimited <span class="span has-after">Courses</span>
          </h2>

          <ul class="grid-list">

            <li class="card-container">
              <div class="card course-card">

                <figure class="card-banner">
                  <img src="./assets/images/course-1.png" width="370" height="248" loading="lazy"
                    alt="Basic Fundamentals of Interior & Graphics Design" class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="wrapper">

                    <p class="title-lg card-price">$29.28</p>

                    <div class="rating-wrapper">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                    </div>

                  </div>

                  <h3 class="title-lg card-title">
                    Basic Fundamentals of Interior & Graphics Design
                  </h3>

                  <div class="card-meta wrapper">

                    <p class="title-sm">
                      <img src="./assets/images/file-outline.svg" width="20" height="20" loading="lazy" alt="">

                      <span class="span">2 Lessons</span>
                    </p>

                    <p class="title-sm">
                      <img src="./assets/images/user-outline.svg" width="20" height="20" loading="lazy" alt="">

                      <span class="span">4k Students</span>
                    </p>

                  </div>

                </div>

                <a href="#" class="layer-link"
                  aria-label="Course Details, Basic Fundamentals of Interior & Graphics Design"></a>

              </div>
            </li>

            <li class="card-container">
              <div class="card course-card">

                <figure class="card-banner">
                  <img src="./assets/images/course-2.png" width="370" height="248" loading="lazy"
                    alt="Increasing Engagement with Instagram & Facebook" class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="wrapper">

                    <p class="title-lg card-price">Free</p>

                    <div class="rating-wrapper">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                    </div>

                  </div>

                  <h3 class="title-lg card-title">
                    Increasing Engagement with Instagram & Facebook
                  </h3>

                  <div class="card-meta wrapper">

                    <p class="title-sm">
                      <img src="./assets/images/file-outline.svg" width="20" height="20" loading="lazy" alt="">

                      <span class="span">2 Lessons</span>
                    </p>

                    <p class="title-sm">
                      <img src="./assets/images/user-outline.svg" width="20" height="20" loading="lazy" alt="">

                      <span class="span">4k Students</span>
                    </p>

                  </div>

                </div>

                <a href="#" class="layer-link"
                  aria-label="Course Details, Increasing Engagement with Instagram & Facebook"></a>

              </div>
            </li>

            <li class="card-container">
              <div class="card course-card">

                <figure class="card-banner">
                  <img src="./assets/images/course-3.png" width="370" height="248" loading="lazy"
                    alt="Introduction to Color Theory & Basic UI/UX" class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="wrapper">

                    <p class="title-lg card-price">$72.39</p>

                    <div class="rating-wrapper">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                    </div>

                  </div>

                  <h3 class="title-lg card-title">
                    Introduction to Color Theory & Basic UI/UX
                  </h3>

                  <div class="card-meta wrapper">

                    <p class="title-sm">
                      <img src="./assets/images/file-outline.svg" width="20" height="20" loading="lazy" alt="">

                      <span class="span">2 Lessons</span>
                    </p>

                    <p class="title-sm">
                      <img src="./assets/images/user-outline.svg" width="20" height="20" loading="lazy" alt="">

                      <span class="span">4k Students</span>
                    </p>

                  </div>

                </div>

                <a href="#" class="layer-link"
                  aria-label="Course Details, Introduction to Color Theory & Basic UI/UX"></a>

              </div>
            </li>

            <li class="card-container">
              <div class="card course-card">

                <figure class="card-banner">
                  <img src="./assets/images/course-4.png" width="370" height="248" loading="lazy"
                    alt="Financial Security Thinking and Principles Theory" class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="wrapper">

                    <p class="title-lg card-price">$72.39</p>

                    <div class="rating-wrapper">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                    </div>

                  </div>

                  <h3 class="title-lg card-title">
                    Financial Security Thinking and Principles Theory
                  </h3>

                  <div class="card-meta wrapper">

                    <p class="title-sm">
                      <img src="./assets/images/file-outline.svg" width="20" height="20" loading="lazy" alt="">

                      <span class="span">2 Lessons</span>
                    </p>

                    <p class="title-sm">
                      <img src="./assets/images/user-outline.svg" width="20" height="20" loading="lazy" alt="">

                      <span class="span">4k Students</span>
                    </p>

                  </div>

                </div>

                <a href="#" class="layer-link"
                  aria-label="Course Details, Financial Security Thinking and Principles Theory"></a>

              </div>
            </li>

            <li class="card-container">
              <div class="card course-card">

                <figure class="card-banner">
                  <img src="./assets/images/course-5.png" width="370" height="248" loading="lazy"
                    alt="Logo Design: From Concept to Presentation" class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="wrapper">

                    <p class="title-lg card-price">Free</p>

                    <div class="rating-wrapper">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                    </div>

                  </div>

                  <h3 class="title-lg card-title">
                    Logo Design: From Concept to Presentation
                  </h3>

                  <div class="card-meta wrapper">

                    <p class="title-sm">
                      <img src="./assets/images/file-outline.svg" width="20" height="20" loading="lazy" alt="">

                      <span class="span">2 Lessons</span>
                    </p>

                    <p class="title-sm">
                      <img src="./assets/images/user-outline.svg" width="20" height="20" loading="lazy" alt="">

                      <span class="span">4k Students</span>
                    </p>

                  </div>

                </div>

                <a href="#" class="layer-link"
                  aria-label="Course Details, Logo Design: From Concept to Presentation"></a>

              </div>
            </li>

            <li class="card-container">
              <div class="card course-card">

                <figure class="card-banner">
                  <img src="./assets/images/course-6.png" width="370" height="248" loading="lazy"
                    alt="Professional Ceramic Moulding for Beginners" class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="wrapper">

                    <p class="title-lg card-price">$29.82</p>

                    <div class="rating-wrapper">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                      <img src="./assets/images/star-fill.svg" width="16" height="16" loading="lazy" alt="">
                    </div>

                  </div>

                  <h3 class="title-lg card-title">
                    Professional Ceramic Moulding for Beginners
                  </h3>

                  <div class="card-meta wrapper">

                    <p class="title-sm">
                      <img src="./assets/images/file-outline.svg" width="20" height="20" loading="lazy" alt="">

                      <span class="span">2 Lessons</span>
                    </p>

                    <p class="title-sm">
                      <img src="./assets/images/user-outline.svg" width="20" height="20" loading="lazy" alt="">

                      <span class="span">4k Students</span>
                    </p>

                  </div>

                </div>

                <a href="#" class="layer-link"
                  aria-label="Course Details, Professional Ceramic Moulding for Beginners"></a>

              </div>
            </li>

          </ul>

          <a href="#" class="btn btn-primary">View All Courses</a>

        </div>
      </section>





      <!-- 
        - #CTA
      -->

      <section class="cta" aria-labelledby="cta-label">
        <div class="container">

          <h2 class="headline-md section-title" id="cta-label">
            Education Is About Creating Leaders For Tomorrow
          </h2>

          <a href="#" class="btn btn-tertiary">Register Today</a>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer has-bg-image" style="background-image: url('./assets/images/footer-bg.png')">

    <div class="section footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="./assets/images/logo-footer.svg" width="145" height="27" alt="Youdemi home">
          </a>

          <p class="title-sm footer-text">
            Lorem ipsum amet, consectetur adipiscing elit. Suspendis varius enim eros elementum tristique. Duis cursus.
          </p>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <img src="./assets/images/facebook.svg" width="40" height="40" loading="lazy" alt="facebook">
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <img src="./assets/images/twitter.svg" width="40" height="40" loading="lazy" alt="twitter">
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <img src="./assets/images/pinterest.svg" width="40" height="40" loading="lazy" alt="pinterest">
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <img src="./assets/images/instagram.svg" width="40" height="40" loading="lazy" alt="instagram">
              </a>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="headline-sm footer-list-title">Links</p>
          </li>

          <li>
            <a href="#" class="title-sm footer-link">Home</a>
          </li>

          <li>
            <a href="#" class="title-sm footer-link">About Us</a>
          </li>

          <li>
            <a href="#" class="title-sm footer-link">Pricing</a>
          </li>

          <li>
            <a href="#" class="title-sm footer-link">Courses</a>
          </li>

          <li>
            <a href="#" class="title-sm footer-link">Contact Us</a>
          </li>

          <li>
            <a href="#" class="title-sm footer-link">Blog</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="headline-sm footer-list-title">Legal</p>
          </li>

          <li>
            <a href="#" class="title-sm footer-link">Legal</a>
          </li>

          <li>
            <a href="#" class="title-sm footer-link">Tearms of Use</a>
          </li>

          <li>
            <a href="#" class="title-sm footer-link">Tearm & Condition</a>
          </li>

          <li>
            <a href="#" class="title-sm footer-link">Payment Method</a>
          </li>

          <li>
            <a href="#" class="title-sm footer-link">Privacy Policy</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>

            <p class="headline-sm footer-list-title">Instagram Post</p>

            <ul class="grid-list">

              <li>
                <img src="./assets/images/ins-1.png" width="80" height="80" loading="lazy" alt="instagram post"
                  class="img-cover">
              </li>

              <li>
                <img src="./assets/images/ins-2.png" width="80" height="80" loading="lazy" alt="instagram post"
                  class="img-cover">
              </li>

              <li>
                <img src="./assets/images/ins-3.png" width="80" height="80" loading="lazy" alt="instagram post"
                  class="img-cover">
              </li>

              <li>
                <img src="./assets/images/ins-4.png" width="80" height="80" loading="lazy" alt="instagram post"
                  class="img-cover">
              </li>

              <li>
                <img src="./assets/images/ins-5.png" width="80" height="80" loading="lazy" alt="instagram post"
                  class="img-cover">
              </li>

              <li>
                <img src="./assets/images/ins-6.png" width="80" height="80" loading="lazy" alt="instagram post"
                  class="img-cover">
              </li>

            </ul>

          </li>

        </ul>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          © Copyright 2022 | Youdemi Template | All Rights Reserved by codewithsadee
        </p>

      </div>
    </div>

  </footer>





  <!-- 
   - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>'use strict';



/**
 * add eventListener on multiple elements
 */

const addEventOnElements = function (elements, eventType, callback) {
  for (let i = 0, len = elements.length; i < len; i++) {
    elements[i].addEventListener(eventType, callback);
  }
}



/**
 * PRELOADER
 */

const preloader = document.querySelector("[data-preloader]");
const circle = document.querySelector("[data-circle]");

window.addEventListener("load", function () {
  preloader.classList.add("loaded");
  circle.style.animation = "none";
  document.body.classList.add("loaded");
});



/**
 * NAVBAR TOGGLER FOR MOBILE
 */

const navbar = document.querySelector("[data-navbar]");
const navTogglers = document.querySelectorAll("[data-nav-toggler]");
const overlay = document.querySelector("[data-overlay]");

const toggleNavbar = function () {
  navbar.classList.toggle("active");
  overlay.classList.toggle("active");
  document.body.classList.toggle("nav-active");
}

addEventOnElements(navTogglers, "click", toggleNavbar);



/**
 * HEADER
 * 
 * add active class on header when window scroll down to 100px
 */

const header = document.querySelector("[data-header]");

const headerActive = function () {
  if (window.scrollY > 100) {
    header.classList.add("active");
  } else {
    header.classList.remove("active");
  }
}

window.addEventListener("scroll", headerActive);</script>
</body>

</html>