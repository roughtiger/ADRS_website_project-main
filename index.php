<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body{
            background-color: #243642;
            color: #ffff;

        }
        .logo1 {
            /* height: 10vh; */
            width: 90px;
            /* margin-bottom:0px; */
            /* filter: brightness(0.5) saturate(0%); */
            
        }
        

        .navbar {
            
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
        }

        .nav-link {
            font-size: 16px;
            font-weight: 500;
            color:#ffff;
            
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #243642;
        }

        @media (max-width: 991px) {
            .navbar-nav .nav-item {
                text-align: center;
                margin-bottom: 10px;
            }
        }

        .carousal{
            /* height: 60px; */
            
          }
          .a{
            height: 70vh;
          }
        
            body{
                /* margin:-1px; */
                

                background-color:white;
            }
            .mope{
                position: relative;
                width: 100vw;
                height: 11vh;
                background-color: #243642;
                overflow: hidden;
                display: flex;
                align-items: center;
                justify-content: center;
                
            }
            .mope span{
                margin-right: 10px;
                font-size: 20px;
                font-weight: bolder;
            }
            .ani{
                animation: slide 17s linear infinite, color-change 1s linear infinite; ;
                overflow: hidden; 
                width: 100%;
            }
            .submit-button {
                background-color: #243642;
                color: #fff;
                transition: background-color 0.3s;
                border-radius: 2px;
                margin-left:25;
                border:1px solid #fff;
                
            }
            @keyframes slide {
                0% {
                transform: translateX(100%);
                }
                100% {
                 transform: translateX(-100%); 
                }
                }
                @keyframes color-change {
                 0% { color: #ff6347; }   
                 20% { color: #ffd700; }  
                 40% { color: #00fa9a; }  
                 60% { color: #1e90ff; }  
                 80% { color: #ff69b4; }  
                 100% { color: #ff6347; } 
      }
    
            .submit-button:hover {
                background-color: #243642;
            }

            h4 {
                margin-bottom: 15px;
                font-size: 20px;
                color: #ffff;
            }
    
            ul {
                list-style-type: square;
                margin-left: 20px;
                padding: 0;
            }
    
            ul li {
                margin: 10px 0;
            }
    
            /* Container Styles */
            .online-marketing-needs {
                padding: 20px;
            }
    
            .container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 15px;
            }
    
            .row {
                display: flex;
                flex-wrap: wrap;
                margin: -15px;
            }
    
            .col-lg-4, .col-md-4, .col-sm-4, .col-xs-12 {
                padding: 15px;
                flex: 1 1 calc(33.33% - 30px); /* Three columns */
            }
    
            /* Full-width for small screens */
            @media (max-width: 768px) {
                .col-lg-4, .col-md-4, .col-sm-4, .col-xs-12 {
                    flex: 1 1 100%; /* One column */
                }
            }
    
            /* Tabs Styling */
            .nav-pills {
                display: flex;
                gap: 15px;
                margin-bottom: 15px;
            }
    
            .nav-pills li {
                list-style: none;
            }
    
            .nav-pills a {
                text-decoration: none;
                color: #ffff;
                padding: 10px 15px;
                border: 1px solid #ffff;
                border-radius: 5px;
                transition: all 0.3s;
            }
    
            .nav-pills a:hover,
            .nav-pills .active a {
                background-color: #456479;
                color: #ffff;
            }
    
            .tab-content {
                padding: 15px;
                border: 1px solid #ffff;
                border-radius: 5px;
                background-color: #243642;
                color: #fff;
            }
    
            .tab-pane {
                display: none;
            }
    
            .tab-pane.active {
                display: block;
            }
    
            /* Progress Bars */
            .progress-container {
                margin-bottom: 15px;
            }
    
            .progress-title {
                font-size: 16px;
                margin-bottom: 5px;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
    
            .progress {
                width: 100%;
                height: 10px;
                background-color: #243642;
                border-radius: 5px;
                overflow: hidden;
            }
    
            .progress-bar {
                height: 10px;
                border-radius: 5px;
                border: 2px solid darkblue;
                border-right:white;
            }
    
            .gradient1 {
                background: linear-gradient(90deg, #064066, #fff);
                
            }
    
            .progress-bar[data-width] {
                width: var(--progress-width, 100%);
            }
    
            /* Add custom properties dynamically */
            .progress-bar[style] {
                animation: grow 9.5s alternate-reverse infinite;
                animation-play-state: running; /* Default state is running */
            }
            
            .progress-bar[style].paused {
                animation-play-state: paused; /* Stops the animation */
            }
            
            @keyframes grow {
                from {
                    width: 0;
                }
                to {
                    width: var(--progress-width, 100%);
                }
            }

            .our-working-process {
                padding: 40px 20px;
                text-align: center;
            }
            
            .title-section h2 {
                font-size: 2em;
                margin-bottom: 30px;
                color: #ffff;
            }
            
            .row {
                display: flex;
                flex-wrap: wrap;
                gap: 20px;
                justify-content: center;
            }
            
            .col {
                flex: 1 1 calc(25% - 20px); /* Four items per row */
                max-width: calc(25% - 20px);
                box-sizing: border-box;
                display: flex;
                justify-content: center; /* Center the card */
                align-items: center; /* Center the card */
            }
            
            .single-process-item {
                background-color: #ffff;
                color: #243642;
                width: 100%; /* Ensure consistent width */
                max-width: 250px; /* Optional: Limit maximum width */
                height: 300px; /* Set fixed height */
                padding: 20px;
                border: 1px solid #ffff;
                border-radius: 8px;
                text-align: center;
                transition: transform 0.3s ease;
                display: flex;
                flex-direction: column; /* Stack content vertically */
                justify-content: space-between; /* Space content evenly */
                box-sizing: border-box;
            }
            
            .single-process-item:hover {
                transform: translateY(-10px);
                box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            }
            
            .icon {
                font-size: 40px;
                margin-bottom: 15px;
                display: inline-block;
                color: #ffff;
                padding: 20px;
                border-radius: 50%;
            }
            
            .color1 { background: #f39c12;
                height: 20vh;
             }
            .color2 { background: #3498db;
                height: 20vh;
             }
            .color3 { background: #2ecc71;
                height: 20vh;
            
            }
            .color4 { background: #9b59b6; 
                height: 20vh;
            
            }

            
            .working-content h3 {
                font-size: 1.2em;
                margin-bottom: 10px;
            }
            
            .working-content p {
                font-size: 0.9em;
                color: #243642;
            }
            
            /* Responsive Design */
            @media (max-width: 992px) {
                .col {
                    flex: 1 1 calc(50% - 20px); /* Two items per row on medium screens */
                    max-width: calc(50% - 20px);
                }
            }
            
            @media (max-width: 576px) {
                .col {
                    flex: 1 1 100%; /* One item per row on small screens */
                    max-width: 100%;
                }
            
                .title-section h2 {
                    font-size: 1.5em;
                }
            }

            /* General Styling */
.upper-part {
    padding: 40px 20px;
    text-align: center;
    background-color: #243642;
}

.headingservice {
    font-size: 2.5em;
    font-weight: bold;
    color: #ffff;
    margin-bottom: 20px;
}

.cards .container1 {
    padding: 20px 0;
}

/* Card Styling */
.card {
    height: 100%;
    width: 80%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    border: 1px solid #ffff;
    border-radius: 10px;
    transition: transform 0.3s, box-shadow 0.3s;
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px #243642(0, 0, 0, 0.1);
}

.card-img-top {
    border-radius: 10px 10px 0 0;
    height: 200px;
    object-fit: cover;
}

.card-title {
    font-size: 1.2em;
    font-weight: bold;
    color: #243642;
    text-align: center;
}

.card-text {
    font-size: 0.95em;
    color: black;
    text-align: center;
}

.btn {
    text-transform: uppercase;
    font-weight: bold;
    padding: 10px 20px;
}

/* Responsive Styling */
@media (max-width: 992px) {
    .card-img-top {
        height: 180px;
    }

    .headingservice {
        font-size: 2em;
    }
}

@media (max-width: 576px) {
    .headingservice {
        font-size: 1.8em;
    }

    .card-text {
        font-size: 0.9em;
    }
}


/* General Styling */


.Ansh {
    padding: 20px;
    text-align: center;
}

.int-text h1 {
    font-size: 2.5em;
    color: #ffff;
    margin-bottom: 30px;
    font-weight: bold;
}

/* Main Container */
.int-main {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

/* Individual Boxes */
.int-box {
    width: 200px; /* Fixed width */
    height: 250px; /* Fixed height */
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background-color: #243642;
    border: 1px solid #ffff;
    border-radius: 10px;
    transition: transform 0.3s, box-shadow 0.3s;
}

.int-box:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
}

/* Images */
.int-img1 {
    width: 100%;
    height: 150px;
    object-fit: cover;
    border-radius: 10px 10px 0 0;
}

/* Titles */
.int-name h6 {
    font-size: 1em;
    color: #ffff;
    margin-top: 10px;
}

/* Responsive Styling */
@media (max-width: 768px) {
    .int-box {
        width: 160px;
        height: 220px;
    }

    .int-text h1 {
        font-size: 2em;
    }
}

@media (max-width: 576px) {
    .int-box {
        width: 140px;
        height: 200px;
    }

    .int-text h1 {
        font-size: 1.8em;
    }

    .int-name h6 {
        font-size: 0.9em;
    }
}


/* General Styling */
footer {
    background-color: #243642;
    color: #ffff;
    padding: 40px 0;
}

.footer-content {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 20px;
    padding: 0 20px;
}

.column {
    flex: 1;
    min-width: 250px;
    max-width: 300px;
    margin-bottom: 20px;
}

.column h3 {
    font-size: 1.5em;
    margin-bottom: 15px;
}

.column p {
    font-size: 0.9em;
    line-height: 1.6;
}

.column a {
    text-decoration: none;
    color: #fff;
    font-size: 0.9em;
    display: block;
    margin-bottom: 8px;
}

.column a:hover {
    color: #243642;
}

/* Social Media buttons */
.but button {
    background-color: #ffff;
    border: none;
    padding: 10px;
    margin-right: 10px;
    margin-bottom: 10px;
    border-radius: 50%;
}

.but button:hover {
    background-color: #243642;
}

/* Google Play button */
.bg {
    background-color: #0a7e07;
    color: #fff;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
}

.bg:hover {
    background-color: #5cba5c;
}

/* Footer Bottom */
.footer-bottom {
    text-align: center;
    padding: 20px;
    background-color: #243642;
    margin-top: 20px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .footer-content {
        flex-direction: column;
        align-items: center;
    }

    .column {
        max-width: none;
        text-align: center;
    }

    .column h3 {
        font-size: 1.3em;
    }

    .column p {
        font-size: 0.9em;
    }

    .but button {
        padding: 8px;
        margin-right: 8px;
    }

    .end p {
        font-size: 1.1em;
    }
}

@media (max-width: 480px) {
    .footer-content {
        padding: 0 10px;
    }

    .footer-bottom p {
        font-size: 0.9em;
    }

    .bg {
        font-size: 0.9em;
        padding: 8px 12px;
    }
}
a{
    color: #ffff;
}
.navc{
    background-color: #3d5c71;
}
.tushar{
    height: 15vh;
    width: 15vw;
}
.nav{
    margin-left: 15px;
}


        
    </style>
</head>

<body>
    <!-- <?php include 'Nav.php'; ?> -->
    <nav class=" navc navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <a class="nav" href="#">
            <img src="./src/assets/images/ADRS_logo.png" alt="Logo" class="logo1" style="      filter: invert(1) brightness(2) contrast(2) drop-shadow(2px 2px 3px rgba(0, 0, 0, 0.8));
">
            <!-- <h1 class="text-light" style="text-decoration:none;">ADRS</h1> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a style="color: #ffff;" class="nav-link active " href="#
                        ">Home</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #ffff;" class="nav-link" href="./Component/About_Us.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #ffff;" class="nav-link" href="./Component/Services.php">Service</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #ffff;" class="nav-link" href="./Component/Our_team.php">Our_team</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #ffff;" class="nav-link" href="./Component/Register.php">Registration</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #ffff;" class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #ffff;" class="nav-link" href="./Component/Gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #ffff;" class="nav-link" href="./Component/Contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #ffff;" class="nav-link" href="./Component/Certificate_Verification.php">Verify</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="">
    <!-- Carousel -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- First Slide -->
            <div class="carousel-item active">
                <img src="https://media.licdn.com/dms/image/v2/D5612AQESQIhjPr8aTQ/article-cover_image-shrink_720_1280/article-cover_image-shrink_720_1280/0/1687272337761?e=2147483647&v=beta&t=JZwUJ9cKfyT0G8vtp2N--gLZmgrXsuHVf6TebWZL8yo" class="d-block custom-carousel-img mx-auto" alt="Carousel Slide 1">
            </div>
            <div class="carousel-item ">
                <img src="https://miro.medium.com/v2/resize:fit:1400/0*H2dxSp7W-MLnOGFK.gif" class="d-block custom-carousel-img mx-auto" alt="Carousel Slide 2">
            </div>
            <!-- Second Slide -->
            <div class="carousel-item">
                <img src="https://t3.ftcdn.net/jpg/05/48/17/42/360_F_548174244_zldfVmqVoQljoQwrZxltlHjHdQVzdSyV.jpg" class="d-block custom-carousel-img mx-auto" alt="Carousel Slide 3">
            </div>
            <!-- Third Slide -->
            <div class="carousel-item">
                <!-- <img src="https://marketplace.canva.com/EAENvp21inc/1/0/1600w/canva-simple-work-linkedin-banner-qt_TMRJF4m0.jpg" class="d-block custom-carousel-img mx-auto" alt="Carousel Slide 3"> -->
               <div  style="background-image:url('https://marketplace.canva.com/EAENvp21inc/1/0/1600w/canva-simple-work-linkedin-banner-qt_TMRJF4m0.jpg');" class="d-block custom-carousel-img mx-auto d-flex flex-column justify-content-center" alt="Carousel Slide ">
                <div >

                    <h2 class="text-light my-auto" style="text-align:center;"> You Want to become a <span class="text-success p-3 " style="font-weight:bolder; background-color:white; border-radius:25px; ">Software Engineer?</span></h2>
                     <center>

                         <a href="http://localhost/ADRS_website_project-main/Component/Register.php"><button class="btn btn-dark text-light mt-5">Click here</button></a>
                    </center>
                </div>
            </div>
            </div>
        </div>
        <!-- Previous Button -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <!-- Next Button -->
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!-- Custom CSS -->
<style>
    /* Limit the height of carousel images */
    .custom-carousel-img {
        height: 400px; /* Adjust height as needed */
        /* object-fit: cover; Ensures the image fits without distortion */
        width: 100vw;
    }

    /* Center carousel within container */
    .carousel-inner {
        max-width: 100vw; /* Set max width for smaller carousel */
        /* margin: auto; Center it horizontally */
    }
</style>

<!-- Bootstrap 5.1 CSS & JS -->






      
      <div class="mope bg-dark">
        <div style="margin-top: 20px;" class="ani">
            <span>Registration Opens For the Vocational Training</span>
            <span><button class="btn submit-button"> <a href="http://localhost/ADRS_website_project-main/Component/Register.php">Register Now</a></button></span>
        </div>
        </div>

    </div>

    <div class="online-marketing-needs">
        <div class="container">
            <div class="row">
                <!-- Features Section -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <h4>Features</h4>
    <ul class="nav nav-pills" id="feature-tabs">
        <li class="nav-item">
            <a class="nav-link tab-link  btn-dark active text-dark" id="training-tab" data-bs-toggle="pill" href="#description6" style="border:2px solid black;">Training</a>
        </li>
        <li class="nav-item">
            <a class="nav-link tab-link text-dark " id="development-tab" data-bs-toggle="pill" href="#profile6" style="border:2px solid black;">Development</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="description6" class="tab-pane fade show active">
            <ul>
                <li>Learned by Experienced Professionals.</li>
                <li>Training/ Internship Completion Certificate.</li>
                <li>Study Material and Online Support.</li>
                <li>Flexible Lab Hours.</li>
                <li>Training on Live Project.</li>
                <li>Exposure to Latest Software Technologies.</li>
                <li>100% Job Assistance.</li>
            </ul>
        </div>
        <div id="profile6" class="tab-pane fade">
            <ul>
                <li>Our Charges are Minimum in the industry.</li>
                <li>No Hidden Charges.</li>
                <li>Industry Standard Software Development.</li>
                <li>Project Completed in Deadline.</li>
                <li>Client Friendly Approach.</li>
                <li>Customer Satisfaction.</li>
                <li>Committed to Long-term Relationships.</li>
                <li>No Quality Compromise.</li>
                <li>Flexibility in Payment.</li>
                <li>24/7 Customer Support.</li>
            </ul>
        </div>
    </div>
</div>


                <!-- Skills Section -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
                    <h4 class="text-dark">Our Skills</h4>
                    <div class="progress-container text-dark">
                        <h4 class="progress-title text-dark text-dark">Web Development <span>97%</span></h4>
                        <div class="progress">
                            <div class="progress-bar gradient1" style="--progress-width: 97%;"></div>
                        </div>
                    </div>

                    <div class="progress-container text-dark">
                        <h4 class="progress-title text-dark">Android App Development <span>95%</span></h4>
                        <div class="progress">
                            <div class="progress-bar gradient1" style="--progress-width: 95%;"></div>
                        </div>
                    </div>

                    <div class="progress-container text-dark">
                        <h4 class="progress-title text-dark">Training <span>98%</span></h4>
                        <div class="progress">
                            <div class="progress-bar gradient1" style="--progress-width: 98%;"></div>
                        </div>
                    </div>

                    <div class="progress-container text-dark">
                        <h4 class="progress-title text-dark">Digital Marketing <span>90%</span></h4>
                        <div class="progress">
                            <div class="progress-bar gradient1" style="--progress-width: 90%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="our-working-process">
        <div class="container">
            <div class="row">
                <div class="title-section ">
                    <h2 class="text-dark"> Our Working Process</h2>
                </div>
                <div class="col ">
                    <div class="single-process-item " style="border: 2px dashed black;">
                        <!-- <div class="icon color1">
                            <i class="flaticon-text-on-paper-sheet-sketch"></i>
                        </div> -->
                        <div class="image-container">
    <img src="https://i.pinimg.com/originals/33/c6/ae/33c6ae3b6396a270c2505227863508aa.gif" alt="Animated Image" />
</div>

<style>
    .image-container {
        /* background-color: blue; Set the background color to blue */
        padding: 10px; /* Optional padding around the image */
        display: inline-block; /* Ensures the container sizes with the image */
        text-align: center; /* Centers the image in the container */
    }

    .image-container img {
        display: block; /* Removes any unwanted space below the image */
        width: 100%; /* Optional: makes the image fit within the container */
        filter: grayscale(100%) sepia(100%) hue-rotate(180deg); /* Apply grayscale + blue tint */
    }
</style>
                        <div class="working-content">
                            <h3><a href="#" class="text-dark" style="text-decoration:none;">Sketch</a></h3>
                            <p>A list of business process terms.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="single-process-item  "style="border: 2px dashed black;">
                        <div class="icon color2">
                            <i class="flaticon-arrows"></i>
                        </div>
                        <div class="working-content">
                            <h3><a href="#" class="text-dark">Creative Process</a></h3>
                            <p>The definition of business process improvement with examples.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="single-process-item"  style="border: 2px dashed black;">
                        <div class="icon color3">
                            <i class="flaticon-layers"></i>
                        </div>
                        <div class="working-content">
                            <h3><a href="#" class="text-dark">Development</a></h3>
                            <p>An overview of the common types of productivity analysis with examples.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="single-process-item"  style="border: 2px dashed black;">
                        <div class="icon color4">
                            <i class="flaticon-interface"></i>
                        </div>
                        <div class="working-content">
                            <h3><a href="#" class="text-dark">Final Product</a></h3>
                            <p>Work in any of the stages through which it passes in being made into a finished product.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="upper-part">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="heading">
                        <h1 class="headingservice">OUR SERVICES</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="cards">
        <div class="container1">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                <!-- Card 1 -->
                <div class="col">
                    <div class="card h-100">
                        
                        <img src="https://www.bluehost.com/blog/wp-content/uploads/2023/05/PPC-Marketing.gif" class="card-img-top image-container" alt="CS/IT GIF">
                        <div class="card-body" style="text-align:center;">
                            <h5 class="card-title">Computer Science/IT Training</h5>
                            <p class="card-text">Explore our comprehensive CS/IT training programs.</p>
                            <button class="btn btn-primary"><a href="http://localhost/ADRS_website_project-main/Component/Contact.php" style="text-decoration:none;"  >Learn More</a></button>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col">
                    <div class="card h-100">
                        <div class="image-container">

                            <img src="https://i.pinimg.com/originals/be/06/26/be06266094d4394b5af1c5f00b0ea1dd.gif" class="card-img-top" alt="Civil/Mech GIF">
                        </div>
                        <div class="card-body " style="text-align:center;">
                            <h5 class="card-title">Social Media </h5><br>
                            <p class="card-text">Gain hands-on experience in Civil, Mechanical, and Interior Design.</p>
                            <button class="btn btn-primary"><a href="http://localhost/ADRS_website_project-main/Component/Contact.php" style="text-decoration:none;" >Learn More</a></button>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col">
                    <div class="card h-100">
                        <div class="image-container">

                        <img src="https://i.gifer.com/embedded/download/RjSK.gif" class="card-img-top" alt="Vocational Training GIF">
                        </div>
                        <div class="card-body" style="text-align:center;">
                            <h5 class="card-title">Graphic Designing</h5>
                            <p class="card-text">Skill up for a brighter future with our practical vocational training programs.</p>
                            <button class="btn btn-primary"><a href="http://localhost/ADRS_website_project-main/Component/Contact.php" style="text-decoration:none;" >Learn More</a></button>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col">
                    <div class="card h-100">
                        <img src="https://anishadigital.com/wp-content/uploads/2024/03/anishadigital1.gif" class="card-img-top" alt="Digital Marketing GIF">
                        <div class="card-body" style="text-align:center;">
                            <h5 class="card-title">Digital Marketing Training</h5>
                            <p class="card-text">Explore our comprehensive CS/IT training programs.</p>
                            <button class="btn btn-primary"><a href="http://localhost/ADRS_website_project-main/Component/Contact.php" style="text-decoration:none;" >Learn More</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="Ansh">
        <div class="int-text">
            <h1>INTERNSHIP</h1>
        </div>
        <div class="int-main">
            <div class="int-box">
                <div class="int-box1">
                <div class="image-container">

<!-- <img src="https://i.pinimg.com/originals/be/06/26/be06266094d4394b5af1c5f00b0ea1dd.gif" class="card-img-top" alt="Civil/Mech GIF"> -->
<img src="https://www.raysitworld.com/assets/img/training/web1.gif" class="int-img1">
</div>
                    <div class="int-name">
                        <h6>Web Development</h6>
                    </div>
                </div>
            </div>
    
            <div class="int-box">
                <div class="int-box2">
                <div class="image-container">

<!-- <img src="https://i.pinimg.com/originals/be/06/26/be06266094d4394b5af1c5f00b0ea1dd.gif" class="card-img-top" alt="Civil/Mech GIF"> -->
<img src="https://www.raysitworld.com/assets/img/training/appdev.gif" class="int-img1">
</div>
                    <div class="int-name">
                        <h6>App Development</h6>
                    </div>
                </div>
            </div>
    
            <div class="int-box">
                <div class="int-box3">
                <div class="image-container">

<!-- <img src="https://i.pinimg.com/originals/be/06/26/be06266094d4394b5af1c5f00b0ea1dd.gif" class="card-img-top" alt="Civil/Mech GIF"> -->
<img src="https://www.raysitworld.com/assets/img/training/web3.gif" class="int-img1">
</div>
                    <div class="int-name">
                        <h6>Software Development</h6>
                    </div>
                </div>
            </div>
    
            <div class="int-box">
                <div class="int-box4">
                <div class="image-container">

<!-- <img src="https://i.pinimg.com/originals/be/06/26/be06266094d4394b5af1c5f00b0ea1dd.gif" class="card-img-top" alt="Civil/Mech GIF"> -->
<img src="https://www.raysitworld.com/assets/img/training/interior.gif" class="int-img1">
</div>
                    <div class="int-name">
                        <h6>Social Media</h6>
                    </div>
                </div>
            </div>
    
            <div class="int-box">
                <div class="int-box5">
                <div class="image-container">

<!-- <img src="https://i.pinimg.com/originals/be/06/26/be06266094d4394b5af1c5f00b0ea1dd.gif" class="card-img-top" alt="Civil/Mech GIF"> -->
<img src="https://www.raysitworld.com/assets/img/training/mech.gif" class="int-img1">
</div>
                    <div class="int-name">
                        <h6>Digital Marketing</h6>
                    </div>
                </div>
            </div>
    
            <div class="int-box ">
                <div class="int-box6 ">
                    <div class="image-container">

                            <!-- <img src="https://i.pinimg.com/originals/be/06/26/be06266094d4394b5af1c5f00b0ea1dd.gif" class="card-img-top" alt="Civil/Mech GIF"> -->
                            <img src="https://www.raysitworld.com/assets/img/training/cad.gif" class="int-img1">
                    </div>
                    <div class="int-name ">
                        <h6>Graphic Designing</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <div class="footer-content">
            <div class="column">
            <img src="./src/assets/images/ADRS_logo.png" alt="Logo" class="white-thick-logo">

<style>
  .white-thick-logo {
    filter: invert(1) brightness(2) contrast(2) drop-shadow(2px 2px 3px rgba(0, 0, 0, 0.8));
    width: 130px; 
      /* filter: drop-shadow(2px 2px 3px rgba(0, 0, 0, 0.8)); */

      /* border: 5px solid white; Adds thickness */
      /* background-color: black; Optional: Ensures visibility on dark background */
      /* padding: 10px; Adds extra thickness */
      display: block;
  }
</style>                <p>Get in touch:</p>
                <p>xyz address, Adhartal Jabalpur, Madhya Pradesh 482004</p>
                <p>Contact No:</p>
                <p>26139635566, 245642121</p>
                <p>Email id: adrstechnosoft@gmail.com</p>
            </div>
    
            <div class="column">
                <h3>Quick Links</h3>
                <p><a href="#">Website Development</a></p>
                <p><a href="#">Software Development</a></p>
                <p><a href="#">Graphic Designing</a></p>
                <p><a href="#">Mobile APP</a></p>
                <p><a href="#">Summer Internship</a></p>
                <p><a href="#">Digital marketing</a></p>
                <p><a href="#">Vocational Training</a></p>
                <p><a href="#">Privacy Policy</a></p>
            </div>
    
            <div class="column">
                <h3>Opening Hours</h3>
                <p>Monday 09:00 am - 08:00 pm</p>
                <p>Tuesday 09:00 am - 08:00 pm</p>
                <p>Wednesday 09:00 am - 08:00 pm</p>
                <p>Thursday 09:00 am - 08:00 pm</p>
                <p>Friday 09:00 am - 08:00 pm</p>
                <p>Saturday 09:00 am - 08:00 pm</p>
                <p>Sunday Closed</p>
            </div>
    
            <div class="column">
                <h3>Social Connections</h3>
                <div class="but">
                    <a href=""><p><button><i class="fa-brands iconcolor fa-linkedin-in" style="color: rgb(255, 255, 255);  "></i></button><span style="color:white;">LinkedIn</span></p></a>
                    <a href=""><p><button><i class="fa-brands iconcolor fa-instagram" style="color: rgb(255, 255, 255); "></i></button><span style="color:white;">Instagram</span></p></a>
                    <a href=""><p><button><i class="fa-brands iconcolor fa-google" style="color: rgb(255, 255, 255); "></i></button><span style="color:white;">E-mail</span></p></a>
                    <a style="text-decoration:none;" href="https://github.com/Siddhant963/ADRS_website_project"><p><button ><i class="fa-brands iconcolor fa-github" style="color: rgb(255, 255, 255); "></i></button><span style="color:white;">Github Account</span></p></a>
                </div>
                <br>
                <div class="end">
                    <!-- <p style="font-size: 21px; font-weight: 600;">Find us on Google Play Store</p> -->
                    <br>
                    <!-- <p><button class="bg">
                        <span class="ii"><i class="fa-brands iconcolor fa-google-play" style="color: rgb(0, 0, 0);"></i></span>
                        <span class="gp">Get it on GOOGLE PLAY</span>
                    </button></p> -->
                </div>
            </div>
        </div>
    
        <div class="footer-bottom">
            <p>ADRS PVT LTD - All rights reserved - 2024</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

        
</body>

</html>