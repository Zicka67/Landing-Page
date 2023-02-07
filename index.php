<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/925ee64c74.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive-tab.css">

    <title>Landing-page</title>

</head>

<body>
    <div class="container">
        <header>
            <!-- <div>
            <h1 class="logo-nav"><a href="#">Kucra</a></h1>
            </div>
            <nav>
                <ul>    
                    <li><a href="">Home</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#team">Client</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#price">Pricing</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>

            <div>
                <ul class="reseaux">
                    <li><a href="https://fr-fr.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                </ul>
            </div> -->

            <nav class="navbar">
                <h1 class="logo-nav">Kucra</h1>
                <ul class="nav-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">features</a></li>
                    <li><a href="#">team</a></li>
                    <li><a href="#">about</a></li>
                    <li><a href="#">blog</a></li>
                    <li><a href="#">client</a></li>
                    <li><a href="#">price</a></li>
                    <li><a href="#">contact</a></li>
                </ul>
                <ul class="reseaux">
                    <li><a href="https://fr-fr.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                </ul>
                <i class="fas fa-bars fa-2x" id="burger"></i>
            </nav>

        </header>

        <article class="main-section">

            <div class="left">
                <h2>We are StartUp Creative Kucra Agency</h2>
                <p>Carefully crafted after analysing the needs of <br>different industries and the design achieves a
                    <br> great balance between purpose & prensentation</p>

                    <div class="form-flex">
                    <form action="save-email.php" method="post" id="form">
                    <input class="large-button" type="text" name="email" id="email" placeholder="Enter your Email">
                    <input class="small-button" type="submit" value="SUBSCRIBE">
                    </div>
                    
                    <!-- Verification -->
                    <?php if (isset($_POST['submit'])) {
                    // Message de verification
                    echo "<p class='testtt'>Merci pour votre e-mail ! Nous l'avons bien reçu.</p>";
                    } ?>
                    </form>
                <!-- <form action="post">
                    <input type="text" name="" id="" placeholder="  Enter your Email">
                    <input type="button" value="SUBSCRIBE">
                </form> -->
            </div>
            <div class="right">
                <img src="Landing-page\illustration.svg" alt="">
            </div>

        </article>
    </div>

    <!-- ***************************** -->

    <article id="features" class="section2">
        <div class="titre-h3">
            <h3>Products Features</h3>
            <p>It is a long established fact that a reader will be of a page when <br>established fact looking at its
                layout</p>
        </div>
        <div class="square-container">
            <div class="square">
                <i class="fa-solid fa-globe"></i>
                <h4>Digital Design</h4>
                <p>Some quick example text to build on the card title and make up the bulk of the card the platform.</p>
            </div>
            <div class="square">
                <i class="fa-solid fa-brush"></i>
                <h4>Unlimited Colors</h4>
                <p>Credibly brand stanaads compliant user exteible services College Anibh ocean euismod tinciduant
                    laoreet.</p>
            </div>
            <div class="square">
                <i class="fa-solid fa-chess"></i>
                <h4>Strategy Solutions</h4>
                <p>Separated they live in Bookmarks grove right at the cpast of the Semantics, a large ocean regelialia.
                </p>
            </div>
        </div>
    </article>

    <section id="team" class="section3">

        <div class="team-text">
            <h3>We'r dynamic team of talented people of <br>innovating & mrketing expert</h3>
            <p>To achieve this, it would be necessary to have uniform grammar, pronunciation <br>and more commom wors.
                If several languages of the resulting language.</p>
        </div>

        <div class="team-container">

            <div class="team-margin">
                <h3>1499</h3>
                <p>Complete Projects</p>
                <div class="team-img">
                    <img class="resize-img div-mini-icon" src="Landing-page\img\person1.png" alt="">
                    <div class="container-icon">
                        <div class="mini-icon"><i class="fa-brands fa-facebook-f"></i></div>
                        <div class="mini-icon"><i class="fa-brands fa-twitter"></i></div>
                        <div class="mini-icon"><i class="fa-brands fa-skype"></i></div>
                    </div>
                </div>
                <div class="margin-team-img">
                <h3>Anna G.Wilhite</h3>
                <p>CEO/Founder</p>
                </div>
            </div>

            <div class="team-margin">
                <h3>1080k</h3>
                <p>Satisfied Clients</p>
                <div class="team-img">
                    <img class="resize-img div-mini-icon" src="Landing-page\img\person2.png" alt="">
                    <div class="container-icon">
                        <div class="mini-icon"><i class="fa-brands fa-facebook-f"></i></div>
                        <div class="mini-icon"><i class="fa-brands fa-twitter"></i></div>
                        <div class="mini-icon"><i class="fa-brands fa-skype"></i></div>
                    </div>
                </div>
                <h3>Wiliam S.Blay</h3>
                <p class="margin-team-img">CTO/Co-Founder</p>
            </div>


            <div class="team-margin">
                <h3>608</h3>
                <p>Team Members</p>
                <div class="team-img">
                    <img class="resize-img div-mini-icon" src="Landing-page\img\person3.png" alt="">
                    <div class="container-icon">
                        <div class="mini-icon"><i class="fa-brands fa-facebook-f"></i></div>
                        <div class="mini-icon"><i class="fa-brands fa-twitter"></i></div>
                        <div class="mini-icon"><i class="fa-brands fa-skype"></i></div>
                    </div>
                </div>
                <h3>Maria B. Morales</h3>
                <p class="margin-team-img">Web Designer</p>
            </div>

            <div class="team-margin">
                <h3>252</h3>
                <p>Employee</p>
                <div class="team-img">
                    <img class="resize-img div-mini-icon" src="Landing-page\img\person4.png" alt="">
                    <div class="container-icon">
                        <div class="mini-icon"><i class="fa-brands fa-facebook-f"></i></div>
                        <div class="mini-icon"><i class="fa-brands fa-twitter"></i></div>
                        <div class="mini-icon"><i class="fa-brands fa-skype"></i></div>
                    </div>
                </div>
                <h3>Luke L. Johnston</h3>
                <p class="margin-team-img">Web Developer</p>
            </div>




        </div>
    </section>


    <Section class="section4">
        <div class="container-parallax">
            <div class="background" style="filter: brightness(50%);">
                <div class="text-background"></div>
            </div>
            <div class="parallax-text">
                <h1>Let's go started with Kucra</h1>
                <h3>They are a good way to started if you want to build something similar or use from existing apps will
                    reduce the cost,<br> efforts and time of the developers.</h3>
                    <a href=""><input type="button" value="Get Started"></input></a>
            </div>

        </div>

    </Section>

    <section id="blog" class="blog">

        <div class="blog-container blog1">
            <div class="blog-square">
                <h3><i></i>Calvin Carlo</h3>
                <p><i></i>20th March 2021</p>
                <img src="Landing-page\img\blog3.png" alt="">
            </div>
            <h3>Doing a cross country road trip</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti optio quis nobis.</p>
            <a href="">Read more</a>
        </div>

        <div class="blog-container blog2">
            <div class="blog-square">
                <h3><i></i>Calvin Carlo</h3>
                <p><i></i>20th March 2021</p>
                <img src="Landing-page\img\blog2.png" alt="">
            </div>
            <h3>Nex exhibition at our Museum</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti optio quis nobis.</p>
            <a href="">Read more</a>
        </div>

        <div class="blog-container blog3">
            <div class="blog-square">
                <h3><i></i>Calvin Carlo</h3>
                <p><i></i>20th March 2021</p>
                <img src="Landing-page\img\blog1.png" alt="">
            </div>
            <h3>Design your apps in your way</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti optio quis nobis.</p>
            <a href="">Read more</a>
        </div>

    </section>

    <section id="about" class="pricing">
        <div class="price-flex">
            <div class="pricing-container-left">

                <h3>We are digital creative Landing Page</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum soluta libero nihil repellendus nemo
                    nesciunt, cum quos corrupti non hic. Aliquam quae vel mollitia ipsa ad debitis quis dolorem quas,
                    nemo nesciunt, cum quos corrupti non hicnemo nesciunt, cum quos.</p>

                <div class="flex-number">
                    <div>
                        <h3>4957</h3>
                        <p>Happy user</p>
                    </div>
                    <div>
                        <h3>1599</h3>
                        <p>Complete Project</p>
                    </div>
                </div>
                <div class="price-button">
                    <input type="button" value="Learn More"></input>
                </div>
            </div>
            <div class="pricing-container-right">
            </div>
        </div>

        <div id="price" class="price-center">
            <h3>Our Pricing</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. A magni quo veritatis. Dolor, iure. In
                perspiciatis eum, distinctio veniam numquam <br> tempore maiores voluptas est? Mollitia perspiciatis aut
                totam alias obcaecati!</p>
        </div>

        
        <div class="card-container">    
            <?php //require db functions
            require_once('db-functions.php');

            $store = findAll();
            foreach ($store as $product) {
            ?>
            

            <div class="card">
                <h3><?= ucFirst($product['name']); ?></h3>   <!-- <?= ucFirst($product['name']); ?> = echo, ici affiche le name du product -->
                <div class="flex-dollars">
                    <i class="fa-regular fa-dollar-sign" style="margin-top: 20px;"></i>
                    <p><span><?= ucFirst($product['price']); ?></span>/month</p>
                </div>
                <div class="flex-capacity">
                <div class="flex">
            <h3><i class="fa-regular fa-circle-check green"></i> Bandwidth: </h3>
            <h3><?= ucFirst($product['bandwidth']); ?> Mbps</h3>
                </div>
                <div class="flex">
            <h3><i class="fa-regular fa-circle-check green"></i> Onlinespace: </h3>
            <h3>
                <?php 
                if ($product['onlinespace'] == 500) {
                echo ucFirst($product['onlinespace']) . " MB";
                } else {
                echo ucFirst($product['onlinespace']) . " GB";
                }
                ?>
            </h3>
                </div>
                    <div class="flex">
                    <h3 class='offer-details-item'>
                            <?php 
                            if ($product['support']=='yes'){
                                echo'<i class="fa-regular fa-circle-check green"></i>';
                            }else {
                                echo'<i class="fa-regular fa-circle-check red"></i>';
                                }?> Support: 
                    </h3>
                        <h3><?= ucFirst($product['support']); ?></h3>
                    </div>
                    <div class="flex">
                        <h3><i class="fa-regular fa-circle-check green"> </i> Domain: 
                    </h3>
                        <h3><?= ucFirst($product['domain']); ?></h3>
                    </div>
                    <div class="flex">
                    <h3 class='offer-details-item'>
                            <?php 
                            if ($product['fees']=='yes'){
                                echo'<i class="fa-regular fa-circle-check green"></i>';
                            } else{
                                echo'<i class="fa-regular fa-circle-check red"></i>';
                                }?> Hidden fees: 
                    </h3>
                        <h3><?= ucFirst($product['fees']); ?></h3>
                    </div>
                </div>
                <div class="price-button2">
                <a href="admin.php" target="_blank"><input type="button" value="Join Now"></input></a>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>


    </div>

    <footer id="contact">
        <div class="footer" style="background-color: rgb(18, 7, 0);">
            <div class="footer-icon">
                <div><a href="" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></div>
                <div><a href="" target="_blank"><i class="fa-brands fa-twitter"></i></a></div>
                <div><a href="" target="_blank"><i class="fa-brands fa-linkedin"></i></a></div>
                <div><a href="" target="_blank"><i class="fa-brands fa-google-plus-g"></i></a></div>
            </div>
            <div class="footer-text">
                <div><a href="" target="_blank">
                        <p>Terms & Condition <strong class="barre">|</strong></p>
                    </a></div>
                <div><a href="" target="_blank">
                        <p>Privacy Policy <strong class=" barre">|</strong></p>
                    </a></div>
                <div><a href="" target="_blank">
                        <p>Contact Us</p>
                    </a></div>
            </div>
            <div class="footer-copyright">
                <button id="scrollTop">Haut de page</button>
                <p>2022 © Kucra - Landing Page Template by Pichforest</p>

            </div>
        </div>

    </footer>

    <!-- ************************************ METHODE ANIMATE DE JQUERY **************************************** -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  // Get the button
  const topBtn = $("#scrollTop"); // Target le bouton

  //Faire aparaitre le bouton apres 40px
  $(window).scroll(function() {
    if ($(this).scrollTop() > 40) {
      topBtn.show();
    } else {
      topBtn.hide();
    }
  });

    // utilise la methode animate de JS Jquery pour remonter la page
  topBtn.click(function() {
    $("html, body").animate({ scrollTop: 0 }, 2000);
  });


  const burger = document.getElementById('burger');
const navLinks = document.querySelector('.nav-links');

burger.addEventListener('click', () => {
    navLinks.classList.toggle('active');
})
</script>

    <!-- ************************************ METHODE SANS JQUERY **************************************** -->


    <!-- <script>
        
        const topBtn = document.getElementById("topBtn"); // Target le bouton 
      
        
        window.onscroll = function() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            topBtn.style.display = "block";
          } else {
            topBtn.style.display = "none";
          }
        };
      
  
        topBtn.addEventListener("click", function() {
          window.scrollTo({
            top: 0,
            behavior: "smooth",
            duration: 10000
          });
        });
      </script> -->
</body>

</html>