<?php include("database/db.php");
session_start();

$ct = $_GET["city"];


if (strpos($ct, "tekirda") !== false) {
    $ct = "tekirda" . "&#x0011F";
}





if (!isset($_SESSION[$ct])) {

    $query = $conn->prepare("SELECT * FROM cities_tb");
    $query->execute();
    while ($result = $query->fetch(PDO::FETCH_ASSOC)) {
        $cti = preg_replace('/\s+/', '-', $result["city"]);
        $_SESSION[strtolower($cti)] = $result["id"];
    }
}



$id = $_SESSION[$ct];


$query = $conn->prepare("SELECT * FROM cities_tb WHERE id='$id'");
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);

$city = ucwords($result["city"]);
$email = $result["email"];
$phone = $result["phone"];
$url = $result["url"];



?>

<!DOCTYPE html>
<html lang="zxx">


<body onload="getMap()">

    <!-- head start -->

    <!-- Title: Network marketing in "city". Get info on network marketing companies
         Description: Network marketing companies in "city". Research MLM organzations, network marketing business, definitions & jobs in the USA.
         Keywords: network marketing, network marketing usa, marketing network, network marketing companies, network marketing quotes, network marketing business,
 -->

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <meta name="description" content="<?php echo "Network marketing in $city. Research MLM organzations, network marketing business, definitions & jobs in the USA." ?>">
        <meta name="keywords" content="<?php echo "network marketing usa, marketing network, network marketing companies, network marketing quotes, network marketing business" ?>">

        <title><?php echo "Network Marketing in $city. Get info on network marketing companies" ?></title>

        <?php include("head-links.php") ?>

    </head>
    <!-- head end -->

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Page Preloder -->


    <!-- header start -->
    <?php include("header.php") ?>
    <!-- header end -->


    <!-- Left Menu + Slider Start -->
    <?php include("left-menu.php") ?>
    <!-- Left Menu + Slider End -->


    <main class="pt-2">
        <div class="service">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <article class="mt-0">

                            <h1>Network Marketing and MLM in <?php echo $city ?></h1>


                            <div class="cities-tabs">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="#info" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="true">More Info</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="#email" data-toggle="tab" href="#email" role="tab" aria-controls="email" aria-selected="false">Email</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="#phone" data-toggle="tab" href="#phone" role="tab" aria-controls="phone" aria-selected="false">Phone</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="#web" data-toggle="tab" href="#web" role="tab" aria-controls="web" aria-selected="false">Website</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info">Lorem Ipsum</div>
                                    <div class="tab-pane fade" id="email" role="tabpanel" aria-labelledby="email"><?php echo $email; ?></div>
                                    <div class="tab-pane fade" id="phone" role="tabpanel" aria-labelledby="phone"><?php echo $phone; ?></div>
                                    <div class="tab-pane fade" id="web" role="tabpanel" aria-labelledby="web"><?php echo $url; ?></div>
                                </div>
                            </div>

                            <p class="mt-5">
                                Are you looking at generating some extra money? Is that why you are interested in joining Network Marketing? Network Marketing can take you, from a struggler to an achiever. Nowadays, it is a growing industry and day after day, an ever-increasing number of network or MLM companies are starting, and more and more people are joining it. The beauty and uniqueness of these Network marketing companies are that any person with a healthy mind can join and succeed in it whether they are young or elderly, skilled or untrained, rich or poor and so in and so forth. </p>

                            <p>

                                Sounds catchy? Want to find out more about what network marketing or MLM actually is and how it works? And how you can make more money with it?
                            </p>
                            <p>
                                NM (Network Marketing) is a network business where people create small online or offline store chains, recruit more staff in their team, and offer specific company's goods (products and services) to others. You'll be earning more resources (money) by having a large line or network of people. Simultaneously, you earn revenue when some of the items are purchased by any existing or new members. Network marketing is now the most prominent source of money-making due to its optimization ability of a large group of people . It has managed to transform lives by allowing a part-time online or offline earning resource, which is developing as a vast fortune for thousands of people.
                            </p>
                            <p>
                                Network Marketing is common in the world today, because they use a Customer based network to attract other potential customers. Every single consumer is, in other terms, a sales representative or a sale agent. It is basically a marketing technique or strategy used to increase the sale of goods (products or services) by which MLM organization generates its revenue through the selling of non-salaried persons. These people drive their income through binary commission or contractual scheme.
                            </p>
                            <p>
                                Either an MLM approach or Network Marketing, the money is generated from two ways: Firstly, you must market (advertise) the manufacturer's products and services. Secondly, collect the selling figure, which is the sale percentage of the employees you employ in your sale force. As a dealer, you have to give the appropriate training and correct piece of advice or guidance to your Sale force (down line) to produce further traffic requirements for the particular business.
                            </p>
                        </article>
                        <article class="pb-3">


                            <h2>NETWORK MARKETING v/s TRADITIONAL MARKERTING</h2>

                            <p class="mt-3">
                                Network Marketing or multi-level marketing supporters describe MLM as the more accurate and faster marketing and sales to your business. However, traditional marketing companies are reluctant to apply new NM (Network Marketing) strategies in the field to run their business or network management. Also, Mostly people don't accurately grasp the nuances or gaps between the two approaches.
                            </p>
                            <p>
                                Marketer position is the most significant difference among MLM and traditional Marketing. An individual is employed as a Sales agent (sales representative) in the initial stage of MLM, who is expected to promote and support the MLM company or MLM organization and its goods (products or services). It also generates sales that are usually similar to any Traditional marketing firm. On the other hand, in MLM, he needs new sales representatives to be identified and assessed as to his sales team. A newly hired sales agent may be named as a sales representative or marketer by the current sales representative.
                            </p>

                        </article>

                        <article class="pb-3">
                            <h3>What Network Marketing or MLM isn’t? </h3>
                            <p class="pt-3">
                                I have to clarify to make you understand what network marketing or MLM isn't. First, it is not a pyramid system. Pyramids are chain-like schemes where participants simply spend capital on the grounds of the hope that someone can pour money back into them and become wealthy. A Pyramid seems to have no real business (trade or commerce) base, and it is purely a game of money. Typically, there is no virtual product involved; it's just a game of swapping hands with money. There may have a commodity (products or services) in modern-day pyramids, but there is only to mask the game of money. Pyramids are immoral and illegitimate because they are focused on manipulating people. It is working in a way that an individual has to risk his money in a pyramid scheme for other individuals to make a real profit. </p>
                            <p>
                                Here the question arises that, <strong>'How to succeed in network marketing?'</strong> I'd suggest a few ideas as a dealer to raise more money and grow the network. </p>
                            <p>
                                To learn how to be successful and effective in NM (network marketing), you have to be conscious of the below things:
                            </p>
                            <h4 class="pb-3">
                                Need to Understand Who’s Your Target Audience
                            </h4>

                            <p>
                                If you wish to be a successful money earner in Multi Level Marketing or Network marketing, so you need to consider the target audience that better fits your micro business opportunity. You've got to learn the wishes of the audience, their most in-depth expectations for improvement.
                            </p>
                            <p>
                                It would be best if you learned what inspires them in their lives to seek improvement. Understanding the audience who decide to follow a particular path, getting a more rewarding existence would help you create good network marketing. When you determine your target audience, as in any other business, Focus your marketing strategies on them, and make them more effective and more productive. You have to consider the requirements of your audience then you can deliver the right response and bring out or get the correct answer from them.
                            </p>
                        </article>




                        <article class="pb-3">

                            <h1>Choose the Best MLM Company to Start</h1>


                            <p class="pt-3">
                                It is crucial to conduct a detailed research before choosing any Network or best MLM company for your small business. It is necessary to know all the details or facts, and the main thing that instead, their offered products and services are related to your targeted audience demand or not.

                            </p>
                            <p>
                                Here are the <i style="font-weight: bold;">primary drivers</i> that you need to take into your account:
                            </p>
                            <p>
                                Firstly, Research carefully about the best MLM Company that 'How long has this MLM Organization or MLM Company been?' The risk of failure may be maximized if you choose a company which has been less than two years old, or if you want a company that is over 15 years old, you may miss growth. Look carefully at the supervisors and search about best MLM Company on the internet. Secondly, Find out whether the company is offering goods related to your audience needs or not. Third, Examine preferably, it has easily understandable and reasonable benefits or premium plan or not. Last but not least, examine the nature of training and how much time it provides to train its employees. If you find it stable and strong then move to the next step.
                            </p>

                        </article>


                        <article class="pb-2">
                            <h2>Top 5 best MLM Organizations are:</h2>
                            <p class="pt-2">
                                <ul>
                                    <li style="list-style:decimal;">
                                        Amway, established in 1959, Michigan (USA).
                                    </li>
                                    <li style="list-style:decimal;">
                                        Avon, established in 1886, London (UK).
                                    </li>
                                    <li style="list-style:decimal;">
                                        Herbalife, established in 1980, California (USA).
                                    </li>
                                    <li style="list-style:decimal;">
                                        Natura, established in 1969, Brazil.
                                    </li>
                                    <li style="list-style:decimal;">
                                        Vorwerk, established in 1883, Wuppertal (Germany).
                                    </li>
                                </ul>
                            </p>

                        </article>


                        <div class="cities-tabs">
                            <ul class="nav nav-tabs" id="myTab1" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="#info1" data-toggle="tab" href="#info1" role="tab" aria-controls="info1" aria-selected="true">More Info</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="#email1" data-toggle="tab" href="#email1" role="tab" aria-controls="email1" aria-selected="false">Email</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="#phone1" data-toggle="tab" href="#phone1" role="tab" aria-controls="phone1" aria-selected="false">Phone</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="#web1" data-toggle="tab" href="#web1" role="tab" aria-controls="web1" aria-selected="false">Website</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent1">
                                <div class="tab-pane fade show active" id="info1" role="tabpanel" aria-labelledby="info1">Lorem Ipsum</div>
                                <div class="tab-pane fade" id="email1" role="tabpanel" aria-labelledby="email1"><?php echo $email; ?></div>
                                <div class="tab-pane fade" id="phone1" role="tabpanel" aria-labelledby="phone1"><?php echo $phone; ?></div>
                                <div class="tab-pane fade" id="web1" role="tabpanel" aria-labelledby="web1"><?php echo $url; ?></div>
                            </div>
                        </div>

                        <h2 class="pb-3 text-center">Find us in: </h2>

                        <div class="pb-3" style="width: 100%; height: 450px" id="mapContainer">
                        </div>

                        <article class="pb-3">
                            <h3>Have a Clear MLM Vision</h3>
                            <p class="pt-3">
                                For being a successful earner in MLM or Network Marketing, you have to be a focal mind. It will help if you have a clear vision, prepared and well planned before you continue to develop and expand your micro business. You must have a perfect business plan to grow. It's really essential to have a target or reason for becoming a network marketer. It can be financial independence, relatives, or just free time but be sure it's solid or strong enough you've written it down to the place where you can daily see it and motivate yourself until you achieve your goals.
                            </p>
                        </article>

                        <article class="pb-3">
                            <h4>Have a Clear MLM Vision</h4>
                            <p class="pt-3">
                                The top leaders and key profit creators are always key learners in today's Network-Marketing world. It would help if you focused on yourself. And spend some time on character building as well as try to learn new things. The networking experts are enthusiastic readers and try to improve their self with every passing day. If you study each of these leaders, you will get to know more and more about them and how their self-improvement leads them toward success. However, if you look at someone in this MLM or Network Marketing business that's making any substantial sum of revenue; you'll be told that they're focusing on their professional growth every day. Start reading books in your spare time and never stop educating yourself. This reading habit will also improve your knowledge regarding business.
                            </p>

                            <p>
                                To perform better or in a knowledgeable way in your business; firstly, you must search for a trainer or a guide. Secondly, it is essential to study and create a deep understanding of your product, which you are offering to your target audience. And last but not the least pay careful attention to your competitors and examine what they are offering. Create an analysis of how you can deliver better performance than your competitors and increase sales.
                            </p>
                        </article>

                        <article class="pb-3">
                            <h5>Build Your Own Business:</h5>
                            <p class="pt-3">
                                After following the entire above step, now you are at the point where you can build your own small or home-based business through Network Marketing or MLM. You may further extend your workforce by generating employment or creating opportunities for others to join your down line and hire your own employees. You can provide them training via videos or social media, or groom them and make them aware of the strategies on which your competitor is working. Provide better training to employees will give you more and more profit by their selling ratio.
                            </p>

                            <p>
                                For your betterment and to increase your knowledge, you have to consult professionals and get advice from them, on which you can provide better training to your employees and better market your business. Join the company team meeting or to attend social events to get to know more about new products. Pick those goods or services that you think can sell and meet the goal. Choose the best Social media platforms (Instagram, Twitter, or Facebook, etc.) to advertise your products and services. Video marketing can also be used to grow your network marketing business.
                            </p>

                            <p>
                                <strong>Pro Tip-</strong> <i>Don’t chase family or friends.</i>
                            </p>

                            <p>
                                The first thing that asked you is to list down all of your relative and friends before joining or entering into any Network Marketing or best MLM company, so you target them efficiently. This collection of categorizations is a warm market for your small home-based business. Probably the awkward thing you may ever feel is, you may feel uncomfortable when you ever meet you, relatives and friends, in future. So, to better understand the entire network marketing, and employ for the proper network, It is suggested that you may push away to approach your friends and family or relatives, for a while. Because you may force or convince them to join your opportunity and work in your down line. Go ahead, if any experienced Network Marketer or MLM organization or their trained security is there for you, to give you the backing and the support. To put it straight and understand one thing very clearing, Never ever target, chase, blame, beg, or even try to impose or persuade anyone (especially your warm market, your friends and family), to enroll or take part into your earning opportunities or work in your down line. When you find out that your approach is considered to be acceptable, or it’s a right time to open up your prospects to your warm market (friends and family). It may be suggested by Network marketing professionals or MLM Organization to you If anyone from your warm list wants to join or open up to your small business or home-based opportunity.
                            </p>

                            <p>
                                Selling by MLM or Network Marketing is possible but only in the proper manner. Take notice of the criteria mentioned above to see the performance. Seek to be always on the run to track the trends.
                            </p>

                        </article>

                        <div class="cities-tabs">
                            <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="#info2" data-toggle="tab" href="#info2" role="tab" aria-controls="info2" aria-selected="true">More Info</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="#email2" data-toggle="tab" href="#email2" role="tab" aria-controls="email2" aria-selected="false">Email</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="#phone2" data-toggle="tab" href="#phone2" role="tab" aria-controls="phone2" aria-selected="false">Phone</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="#web2" data-toggle="tab" href="#web2" role="tab" aria-controls="web2" aria-selected="false">Website</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent2">
                                <div class="tab-pane fade show active" id="info2" role="tabpanel" aria-labelledby="info2">Lorem Ipsum</div>
                                <div class="tab-pane fade" id="email2" role="tabpanel" aria-labelledby="email2"><?php echo $email; ?></div>
                                <div class="tab-pane fade" id="phone2" role="tabpanel" aria-labelledby="phone2"><?php echo $phone; ?></div>
                                <div class="tab-pane fade" id="web2" role="tabpanel" aria-labelledby="web2"><?php echo $url; ?></div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-12 mb-5">

                        <div class="services-links">

                            <h3 class="text-center mb-4">Network Marketing in</h3>

                            <?php
                            $ind = 0;
                            $cts = array();
                            $ids = array();
                            $z = 0;
                            $done_cities = array();
                            $done_ids = array();

                            $query = $conn->prepare("SELECT * FROM cities_tb");
                            $query->execute();

                            while ($result = $query->fetch(PDO::FETCH_ASSOC)) {
                                $cities[$ind] = $result["city"];
                                $ids[$ind] = $result["id"];
                                $ind++;
                            }

                            $totalCities = count($cities);

                            $n = range(0, $totalCities - 1);
                            shuffle($n);


                            ?>

                            <div class="row">

                                <div class="col-lg-3 col-md-3 col-sm-6">

                                    <ul>
                                        <?php

                                        for ($x = 0; $x < 5; $x++) {
                                            $i = $n[$x];

                                            $city = $cities[$i];
                                            $id = $ids[$i];


                                            $done_cities[$z] = $city;
                                            $done_ids[$z] = $id;
                                            $z++;


                                            $ct = preg_replace('/\s+/', '-', $city);
                                            $_SESSION[$ct] = $id;
                                        ?>
                                            <li><a href=<?php echo "network-marketing-in-" . strtolower($ct); ?>><?php echo ucwords($city) ?></a></li>

                                        <?php
                                        }


                                        ?>


                                    </ul>

                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6">

                                    <ul>

                                        <?php

                                        $left = array_diff($cities, $done_cities);
                                        $leftCities = array_values($left);

                                        $l_ids = array_diff($ids, $done_ids);
                                        $leftIds = array_values($l_ids);


                                        $totalLeftCities = count($leftCities);

                                        $n = range(0, $totalLeftCities - 1);
                                        shuffle($n);

                                        for ($x = 0; $x < 5; $x++) {
                                            $i = $n[$x];

                                            $city = $leftCities[$i];
                                            $done_cities[$z] = $city;

                                            $id = $leftIds[$i];
                                            $done_ids[$z] = $id;

                                            $z++;

                                            $ct = preg_replace('/\s+/', '-', $city);
                                            $_SESSION[$ct] = $id;
                                        ?>
                                            <li><a href=<?php echo "network-marketing-in-" . strtolower($ct); ?>><?php echo ucwords($city) ?></a></li>


                                        <?php }

                                        ?>

                                    </ul>


                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6">

                                    <ul>

                                        <?php

                                        $left = array_diff($cities, $done_cities);

                                        $leftCities = array_values($left);

                                        $l_ids = array_diff($ids, $done_ids);
                                        $leftIds = array_values($l_ids);


                                        $totalLeftCities = count($leftCities);

                                        $n = range(0, $totalLeftCities - 1);
                                        shuffle($n);

                                        for ($x = 0; $x < 5; $x++) {
                                            $i = $n[$x];

                                            $city = $leftCities[$i];
                                            $done_cities[$z] = $city;


                                            $id = $leftIds[$i];
                                            $done_ids[$z] = $id;

                                            $z++;


                                            $ct = preg_replace('/\s+/', '-', $city);
                                            $_SESSION["$ct"] = $id;
                                        ?>
                                            <li><a href=<?php echo "network-marketing-in-" . strtolower($ct); ?>><?php echo ucwords($city); ?></a></li>

                                        <?php }

                                        ?>

                                    </ul>

                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <ul>

                                        <?php

                                        $left = array_diff($cities, $done_cities);

                                        $leftCities = array_values($left);

                                        $l_ids = array_diff($ids, $done_ids);
                                        $leftIds = array_values($l_ids);


                                        $totalLeftCities = count($leftCities);

                                        $n = range(0, $totalLeftCities - 1);
                                        shuffle($n);

                                        for ($x = 0; $x < 5; $x++) {
                                            $i = $n[$x];

                                            $city = $leftCities[$i];
                                            $done_cities[$z] = $city;


                                            $id = $leftIds[$i];
                                            $done_ids[$z] = $id;

                                            $z++;


                                            $ct = preg_replace('/\s+/', '-', $city);
                                            $_SESSION["$ct"] = $id;
                                        ?>
                                            <li><a href=<?php echo "network-marketing-in-" . strtolower($ct); ?>><?php echo ucwords($city); ?></a></li>

                                        <?php }

                                        ?>

                                    </ul>


                                </div>
                            </div>

                        </div>

                    </div>


                </div>
            </div>
        </div>
        </div>
    </main>

    <!-- Footer Section Begin -->
    <?php include("footer.php") ?>
    <!-- Footer Section End -->


    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script src="js/main5.js"></script>




</body>

</html>
<script>
    function getMap() {
        var citi = '<?php echo $_GET["city"]; ?>';

        if (citi.includes("tekirda")) {
            citi = "Tekirdağ"
        }
        console.log(citi);
        $.ajax({
            url: 'https://geocoder.ls.hereapi.com/6.2/geocode.json?apiKey=F8AWLo4qe51rnLMUknCs8HPYGwl7Q7p_5TNVahy0a8s&gen=9&searchtext=' + citi,
            type: 'GET',
            data: citi,
            success: function(result) {
                console.log(result);

                var longt = result["Response"]["View"][0]["Result"][0]["Location"]["DisplayPosition"]["Longitude"];
                var latit = result["Response"]["View"][0]["Result"][0]["Location"]["DisplayPosition"]["Latitude"];


                var platform = new H.service.Platform({
                    'apikey': 'F8AWLo4qe51rnLMUknCs8HPYGwl7Q7p_5TNVahy0a8s'
                });

                // Obtain the default map types from the platform object
                var maptypes = platform.createDefaultLayers();

                // Instantiate (and display) a map object:
                var map = new H.Map(
                    document.getElementById('mapContainer'),
                    maptypes.vector.normal.map, {
                        zoom: 10,
                        center: {
                            lng: longt,
                            lat: latit
                        }
                    });

            }
        });
    }
</script>