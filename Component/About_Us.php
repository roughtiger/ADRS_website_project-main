<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
       *,
*::before,
*::after {
    box-sizing: border-box;
} 

body, html {
    margin: 0;
    padding: 0;
    overflow-x: hidden; /* This prevents horizontal scrolling */
    width: 100%; /* Ensure body doesn't exceed the viewport width */
}

.header-img {
    background-image: url("../src/assets/images/about_us2.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    height: 100vh;
    width: 100vw;
}
@media (max-width : 450px){
    .header-img {
       height: 70vh;
       width: 100vw;
       background-size:cover;

    }
}
.content1 {
    margin-left: 10vw;
    margin-top: 40vh;
}

.bFirstHeading {
    font-size: 55px;
    font-weight: 700;
    margin-left: 1vw;
}

.homeLink {
    color: white;
    font-size: 25px;
    text-decoration: none;
}

.bFirstSubHeading {
    margin-left: 1vw;
}

.aboutUs {
    font-size: 25px;
}

.our-mission {
    font-size: 35px;
    margin-left: 8vw;
    margin-top: 5vh;
}

.heading1 {
    font-size: 3rem;
    margin-left: 8vw;
    margin-top: 5vh;
}

.empowering {
    margin-top: 5vh;
    font-size: 38px;
    margin-left: 8vw;
    font-weight: bolder;
}

.b-part2 {
    margin-left: 8vw;
}

.b-details {
    font-size: 23px;
}

.b-part3 {
    margin-top: 4vh;
    margin-left: 4vw;
}

.bullet-point {
    margin-top: 5vh;
}

.description1 {
    margin-top: 4vh;
}

.b-sidephoto1,
.b-sidephoto2 {
    width: 100%; /* Ensure images do not overflow horizontally */
    max-width: 100%; /* Set max-width to 100% to prevent overflow */
    margin-top: 4vh;
}

.c3 {
    padding-top: 10vh;
}

.description2 {
    margin-top: 4vh;
    margin-right: 7vh;
}

.our-services {
    margin-top: 10vh;
    text-align: center;
    margin-bottom: 7vh;
}

.single-service {
    background-color: #fff;
    /* border-radius: 8px; */
    padding: 30px;
    align-items: center;
    margin-bottom: 20px;
    height: 33vh;
}

.pull-left1, .pull-left2, .pull-left3, .pull-left4, .pull-left5, .pull-left6 {
    width: 100%;
    height: 10vh;
    /* border-radius: 100%; */
    transition: background-color 1s ease;
    /* margin-left: 30%; */
}
.hove{
    /* width: 100%; */
}
.single-service:hover {

    .hove{

        background-color: rgb(42, 141, 253);
    }

            /* Turn to blue when hovered */
        }
.pull-left1 { background-color: rgb(236, 72, 88); }
.pull-left2 { background-color: rgb(180, 110, 251); }
.pull-left3 { background-color: rgb(245, 245, 33); }
.pull-left4 { background-color: aqua; }
.pull-left5 { background-color: rgb(94, 205, 94); }
.pull-left6 { background-color: orange; }

.iconn {
    /* margin: 15%; */
    /* margin-left:42%;
    margin-top:5%; */
    width: 50px;
    text-align:center;
}

.media-content {
    flex-grow: 1;
    margin-top: 2vh;
    font-size: 20px;
}
.c4{padding-top: 5vh;
padding-bottom: 5vh;}


    </style>
</head>

<body>
<?php include './Nav.php'; ?>
    <div class="wholebody">
        <div class="container-fluid header-img">
            <div class="row">
                <div class="col-12">
                    <!-- <div class="container"> -->
                    <div class="content1">
                        <p class="bFirstHeading"style="color: #ffff">About Us</p>
                        <div class="bFirstSubHeading d-flex flex-row">
                            <!-- <button class="btn text-light"> -->
                            <a href="" class="homeLink" style="color: #ffff"> BUILD YOUR FUTURE WITH US </a>
                            <!-- <p class="aboutUs"style="color: #ffff"> Revolutionize Your Operations with Our Technology, and Expiernece a fastest solution providing team</p> -->
                        </div>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
        <div class="container-fluid"style="background-color: #243642;">
            <div class="row">
                <div class="col-12">
                    <div class="heading1"style="color: #ffff">Transforming the Digital Landscape<br>
                        with ADRS Techno
                    </div>
                    <div class="our-mission"style="color: #ffff"><u>OUR MISSION</u></div>
                    <p class="empowering"style="color: #ffff">EMPOWERING THE FUTURE WITH US</p>
                </div>
            </div>
        </div>
        <div class="container-fluid"style="background-color: #243642">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="b-part2">
                        <!-- <div class="mission">OUR MISSION</div> -->
                        <!-- <p class="empowering">EMPOWERING THE FUTURE WITH US</p> -->
                        <div class="b-details">
                            <p>
                            <h1 class="heading2"style="color: #ffff">ADRS offers 5 areas of software development:</h1>
                            <li class="bullet-point" style="color: #629584;">
                                Mobile App Development</li>

                            <li style="color: #629584;">Software Development</li>

                            <li style="color: #629584;">Website Development</li>

                            <li style="color: #629584;"> UI/UX Development</li>

                            <li style="color: #629584;">Game development</li>
                            <p class="description1" style="color: #629584;"> ADRS Techno is your one-stop-shop for all your software development
                                needs. We offer
                                mobile app development, software development, chatbot development, UI/UX development,
                                and Game development solutions. Our team of experienced developers will help you create
                                the perfect software that is tailored to your specific needs. Contact us today to learn
                                more about how we can help your business grow with our innovative software solutions.
                            </p>
                            </p>
                        </div>
                        <!-- <h1 mt-1>Operational Excellence</h1>
                        <div class="details">
                            <p class="contentDetail2">At ADRS Techno, we are committed to delivering the highest level
                                of operational excellence in our software technology services. Our team is passionate
                                about finding innovative solutions to complex problems, and we believe that operational
                                excellence is the key to achieving success, both for us and our clients. Contact us
                                today to see how we can help your business thrive.</p>
                        </div> -->
                    </div>
                </div>


                <!-- <div class="container-fluid"> -->
                <!-- <div class="row"> -->
                <div class="col-12 col-md-4">
                    <img class="b-sidephoto1"
                        src="https://img.freepik.com/free-photo/man-using-digital-tablet-psd-mockup-smart-technology_53876-110815.jpg?ga=GA1.1.1537000916.1731507103&semt=ais_hybrid">
                </div>
            </div>
        </div>
    </div>
    </div>




    <div class="container-fluid  c3 "style="background-color: #243642">
        <div class="row">

            <div class="col-12 col-md-4 order-2">
                <img class="b-sidephoto2"
                    src="https://static.wixstatic.com/media/84770f_2cae65a0da354bc9b310bae52425c6d2~mv2.jpg/v1/fill/w_809,h_646,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Engineer.jpg">
            </div>
            <div class="col-12 col-md-8 order-1 order-md-2">
                <div class="b-part3">
                    <h1 style="color: #ffff">Operational Excellence</h1>
                    <div class="b-details">
                        <p class="description2"style="color: #629584;">At ADRS Techno, we are committed to delivering the highest level
                            of operational excellence in our software technology services. Our team is passionate
                            about finding innovative solutions to complex problems, and we believe that operational
                            excellence is the key to achieving success, both for us and our clients. Contact us
                            today to see how we can help your business thrive.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid c4" style="background-color: #243642">
        <div class="row p-3">
            <div class="our-services">
                <h1 style="color: #ffff">Why Take Our Services</h1>
            </div>
            <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="single-service"> -->
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
                <div class="single-service ">
                    <div class="pull-left1 hove d-flex flex-row justify-content-center " >
                        
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="iconn  text-light">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                        </svg>
                        

                    </div>

                    <div class="media-content">
                        <!-- <h3><a href="#">Quality</a></h3> -->
                        <p style="color: #629584; font-size:70%;">
                            We believe in giving our very best to our customers.</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="single-service">
                    <div class="pull-left2 hove  d-flex flex-row justify-content-center ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="iconn text-light">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>

                    </div>
                    <div class="media-content">
                        <!-- <h3><a href="#">Quality</a></h3> -->
                        <p style="color: #629584; font-size:70%;">
                            We are an ethical organization with transperancy in our dealing and a forth right attitude.
                            While you work with us, you can rest assured.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="single-service">
                    <div class="pull-left3 hove d-flex flex-row justify-content-center ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="iconn text-light">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 18v-5.25m0 0a6.01 6.01 0 0 0 1.5-.189m-1.5.189a6.01 6.01 0 0 1-1.5-.189m3.75 7.478a12.06 12.06 0 0 1-4.5 0m3.75 2.383a14.406 14.406 0 0 1-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 1 0-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                        </svg>

                    </div>
                    <div class="media-content">
                        <!-- <h3><a href="#">Quality</a></h3> -->
                        <p style="color: #629584; font-size:70%;">
                            As a creative professional, you'll know only too well how important inspiration is for your
                            work. That's whether you've just made a cup.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="single-service">
                    <div class="pull-left4 hove d-flex flex-row justify-content-center ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="iconn text-light">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>

                    </div>
                    <div class="media-content">
                        <!-- <h3><a href="#">Quality</a></h3> -->
                        <p style="color: #629584; font-size:70%;">We believe that we can make a difference to your bussiness and we do.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="single-service">
                    <div class="pull-left5 hove d-flex flex-row justify-content-center ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="iconn text-light">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z" />
                        </svg>

                    </div>
                    <div class="media-content" >
                        <!-- <h3><a href="#">Quality</a></h3> -->
                        <p style="color: #629584; font-size:70%;">Content is king. You’ll hear that phrase over and over again when it comes ADRS Techno Private
                            Limited. Get your content right, and you’ve created</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="single-service">
                    <div class="pull-left6 hove d-flex flex-row justify-content-center ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="iconn text-light">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 1 1 0-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 0 1-1.44-4.282m3.102.069a18.03 18.03 0 0 1-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 0 1 8.835 2.535M10.34 6.66a23.847 23.847 0 0 0 8.835-2.535m0 0A23.74 23.74 0 0 0 18.795 3m.38 1.125a23.91 23.91 0 0 1 1.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 0 0 1.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 0 1 0 3.46" />
                        </svg>

                    </div>
                    <div class="media-content">
                        <!-- <h3><a href="#">Quality</a></h3> -->
                        <p style="color: #629584; font-size:70%;">We provide 24 hr technical support.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php include './Footer.php'; ?>


</body>

</html>