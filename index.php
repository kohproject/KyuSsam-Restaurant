
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="scss/kyu.css" rel="stylesheet" type="text/css"/>
    <title>:: KyuSsam Restaurant : Korean : Sushi : Chicago :::::::</title>
</head>
<body id="home">
<?php include('inc/nav.php');?>
<div class="container">
    <section>
        <main class="mo-main">
           <div class="wrap__marquee">
               <div class="marquee pr60">
                   <h2>fresh</h2>
                   <ol>
                    <li>sushi</li>
                   <li>korean</li>
                   <li>fusion</li>
                    </ol>
               </div>
                <h1>KyuSaam</h1>
                <div class="marquee">
                    <h2 class="head__chicago">Chicago's</h2>
                </div>
            </div>
            <ol class="list__btn-main">
                <li><button id="btn_menu">VIEW<span>menu</span></button></li>
                <li><button>ORDER<span>online</span></button></li>
                <li class="li__btn-call"><button onclick="javascript:window.location ='tel:7737725985'">Call<span>773.772.5985</span></button</li>
            </ol>
           
        </main>
</section>
    <section>
        <main>
            <ol class="list__card-main">
                <li>
                <div class="card fx2"><h3>Food Photos</h3>
                    <ul class="flex flex-wrap mt25 ml15 mo_ml10">
                        <?php include('inc/foodPhotos.php') ?>
                  </ul>
                </div>
                </li>
                <li>
                <div class="flex space-between">
                    <div class="card fx1">
                        <h3>Our Hours</h3>
                        <div class="inner">
                            <ul class="list__daily-hours">
                                <li><dt>rest day <em>☹</em></dt>
                                    <dd><span>- CLOSED -</span><span>Wednesday</span></dd>
                                </li>						
                                <li><dt>Lunch</dt>
                                    <dd><span>11am - 3pm</span> <span>Daily <i>(no wed)</i></span></dd>
                                                                
                                </li>
                                <li><dt>Dinner</dt>
                                    <dd><span>4pm - 10pm</span><span>Daily <i>(no wed)</i></span></dd>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card fx1">
                        <h3>Daily Specials</h3>
                        <div class="inner">

                        <ul class="list__daily-specials">
                            <li><dt class="daily-specials">
                            Monday 
                            </dt><dd>$1.50 Korean Tacos</dd>
                            </li>

                            <li><dt class="daily-specials">Tuesday 
                                </dt><dd>$3 Spicy Tuna Maki Rolls</dd>
                                <dd>$3 Salmon Maki Rolls</dd>
                            </li>

                                <li><dt class="daily-specials">Thursday
                                </dt><dd>$5 BibimBop</dd>
                            </li>

                                <li><dt class="daily-specials">Friday 
                                </dt><dd>1/2 price Maki</dd>
                            </li>
                                <li><dt class="daily-specials">Everyday
                                </dt><dd>$4.50 Ramen + $1.50 meat</dd>
                            </li>
                            </ul>
                            </div>
                    </div>
                </div>
                </li>
            </ol>
        
        
         
        </main>
</section>
</div>
<?php include('inc/modal.php');?>
<?php include('inc/footer.php');?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="js/kyuMenu.js"></script> 
<script type="text/javascript" src="js/kyu.js"></script>  
</body>
</html>