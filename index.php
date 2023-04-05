<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Food Waste Managment System</title>
    <?php require 'links.php'; ?>
</head>

<body>
<header>
    <?php require 'navbar.php'; ?>
</header>

<main>
    <div class="container-fluid" style="padding: 0;">
        <div class="container p-3 w-50 welcome-box text-dark">
            <h1 class="welcome-heading">
                HELP TURN TEARS TO SURES
            </h1>
            <p class="text-light">
                Sed ut perspiciatis unde omnis iste natus error sit
voluptatem accusantium doloremque laudantium, totam
rem aperiam, eaque ipsa quae ab illo inventore veritatis et
quasi architecto beatae vitae dicta sunt    
            </p>
            <a href="#more-details" class="btn btn-warning">Read More</a>
        </div>
        <img src="images/home.jpg" class="welcome-img" alt="" width="100%" height="700px">
    </div>

    <section class="more-details p-5 bg-dark w-100" id="more-details">
        <h1 class="p-5 heading">
            Welcome to Food Waste Management System
        </h1>
        <p class="container">
            <span style="font-weight: bold; color: #FFC107;">Food Waste </span> refers to the decrease in the quantity or quality of food resulting from decisions and actions by retailers, food service providers and consumers Food is wasted in many ways. <br>
            <ul class="list">
                <li>
                    Fresh produce that deviates from what is considered optimal for example in terms of shape, size and color, is often removed from the supply chain during sorting operations.
                </li>
                <li>
                    Foods that are close to, at or beyond the date are often discarded by retailers and consumers.
                </li>
                <li>
                    Large quantities of wholesome edible food are often unused or left over and discarded from household kitchens and eating establishments.
                </li>
            </ul>
        </section>

        <section class="our-mission p-5 bg-light" id="our-mission">
            <h1 class="heading" style="">
                Our Mission
            </h1>
            <div class="container p-5">
                <div class="row">
                    <div class="col-md-6">
                        <img src="images/child.jpg" alt="" width="auto">
                    </div>
                    <div class="col-md-6">
                        <div class="mission-item">
                            <div class="inline-box">
                                <i class="fa fa-umbrella p-2" aria-hidden="true" style="color: #FFC107;font-size: 50px;"></i>
                                <h1 class="fw-bold d-block">Help & Support</h1>
                            </div>
                            <p style="display: block;" class="ps-5">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero, tempore?
                            </p>
                        </div>
                        <div class="mission-item">
                            <div class="inline-box">
                                <i class="fa fa-umbrella p-2" aria-hidden="true" style="color: #FFC107;font-size: 50px;"></i>
                                <h1 class="fw-bold d-block">Strave Free World</h1>
                            </div>
                            <p style="display: block;" class="ps-5">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero, tempore?
                            </p>
                        </div>
                        <div class="mission-item">
                            <div class="inline-box">
                                <i class="fa fa-umbrella p-2" aria-hidden="true" style="color: #FFC107;font-size: 50px;"></i>
                                <h1 class="fw-bold d-block">Helping Hands</h1>
                            </div>
                            <p style="display: block;" class="ps-5">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero, tempore?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>






<?php require 'footer.php'; ?>
</body>

</html>