<?php 
    /**
     * Intro Section
     * @package sip-taproom 
     * @since 1.0
     */

// Advanced Custom Fields
$brewery_name_one = get_field('brewery_name_one');
$beer_name_one = get_field('beer_name_one');
$beer_description_one = get_field('beer_description_one');
$brewery_name_two = get_field('brewery_name_two');
$beer_name_two = get_field('beer_name_two');
$beer_description_two = get_field('beer_description_two');
$brewery_name_three = get_field('brewery_name_three');
$beer_name_three = get_field('beer_name_three');
$beer_description_three = get_field('beer_description_three');
$beer_name_three_a = get_field('beer_name_three_a');
$beer_description_three_a = get_field('beer_description_three_a');
?>

<!-- ===== OUR MENU ====== -->
<section id="ourmenu" class="our-menu">
    <div class="container">
      <div class="row align-content-center text-center mb-5">
        <div class="col-lg-12">
          <h1>Our Menus <span></h1>
          <div class="icon-rule">
            <span class="outer-line"></span>
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hop_icon.svg' ); ?>" alt="hop icon" >
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/barrel.svg' ); ?>" alt="barrel icon" >
            <span class="outer-line"></span>
          </div>
        </div>
      </div>
      </div>
      <div class="container">
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="content wines">
              <div class="content-header">
                <h2>Food</h2>
                <p>Our food menu is a limited unique list of items with big flavor. This allows us to provide quick
                  service along with the same great taste of our wonderful local beers and featured wines.</p>
              </div>
              <div class="content-body">
                <h3>Snack Food</h3>
                <h5>Cheese Board - $12</h5>
                <p class="menu-subtext">Selection of 3 cheeses (Aged White Cheddar, Los Cameros, Aged Gouda)<br />
                 Add Salty pork bits; Salami - Finocchiona - $5
                </p>
                <h5>Caramelized French Onion Dip and Chips - $5</h5>
                <h5>Bronco Billy Beef Jerky - ask for availability</h5>
                <hr>
                <h3>Sandwiches</h3>
                <h5>Turkey Paninis by BZ Deli - $10.00</h5>
                <p>Learn more about BZ Deli <a href="http://bzdeli.com/" target="_blank"> http://bzdeli.com/</a></p>
                <h4>Gochujang Grilled Cheese -$8</h4>
                <h4>Classic Grilled Cheese -$7</h4>
                <hr>
                <h5>Kids Meal -$5 </h5>
                <p class="menu-subtext">Grilled Cheese, choice of juice box, and gummy bears</p>
                <h5>Chips: </h5>
                <p class="menu-subtext">Doritos and Pirates Booty</p>
                <hr>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="content beers">
            <div class="content-header">
              <h2>Beers Currently Flowing</h2>
              <p>We are proud to source locally owned pittsburgh brews. Come enjoy all of pittsburgh's finest in one
                location.</p>
            </div>
            <div class="content-body">
              <hr>
              <h4><?php echo $brewery_name_one; ?></h4>
             <h5><?php echo $beer_name_one; ?></h5>
              <p class="menu-subtext"><?php echo $beer_description_one; ?></p> 
              <hr>
              <h4><?php echo $brewery_name_two; ?></h4>
             <h5><?php echo $beer_name_two; ?></h5>
              <p class="menu-subtext"><?php echo $beer_description_two; ?></p> 
              <hr>
              <h4><?php echo $brewery_name_three; ?></h4>
             <h5><?php echo $beer_name_three; ?></h5>
              <p class="menu-subtext"><?php echo $beer_description_three; ?></p> 
              <h5><?php echo $beer_name_three_a; ?></h5>
              <p class="menu-subtext"><?php echo $beer_description_three_a; ?></p> 
                  <hr>
              <h4>Grist House Craft Brewery:</h4> 
             <h5>Maximum Power IPA - 6.8% </h5> 
              <p class="menu-subtext">This takes hop flavor to the MAX! Brewed with Galaxy and Citra LupoMAX hops, a concentrated Lupulin hop pellet with much less hop vegetal matter for a cleaner, bright hop flavor</p> 
                <hr>
              <h4>Hitchhiker Brewing Company:</h4> 
             <p> <span class="badge bg-dark mb-1">More Hitchhiker Coming Soon</span></p> 
              <hr>
              <h4>Old Thunder Brewing:</h4> 
             <h5>False Kingdom - 6.8% ABV </h5> 
             <p class="menu-subtext">IPA brewed with a blend of American hops. Bright and balanced with a fruit forward hop character </p>
             <hr>
            <!-- <h5>Heroes 2 Ghosts - 8.5% ABV </h5> 
            <p class="menu-subtext"> Northern Cali-style Double IPA brewed with a blend of hops from the Pacific Northwest: amplified notes of fresh citrus and dank pine</p> -->
              <!-- <hr> -->
             <h4>The Leaning Cask Brewing:</h4> 
              <!-- <p> <span class="badge bg-dark mb-1">More from The Leaning Cask Brewing Coming Soon</span></p> -->
              <!-- <h5>Goldendoodle -  4.2% ABV</h5>
              <p class="menu-subtext">Naturally Effervescent British Golden Ale</p> -->
              <h5>That'll Do -  4.9% ABV</h5>
              <p class="menu-subtext">New Zealand Style Pilsner</p>
              <hr>
              <h4>11th Hour Brewing:</h4> 
              <!-- <h5>New Cult New England IPA/Hazy -  7.0% ABV</h5>
              <p class="menu-subtext">A newly reimagined take on our first hazy, we bring you New Cult. Loaded with Citra and Moasic hops, this beer is bursting with notes of citrus and grapefruit, passion fruit and mango. </p> -->
              <h5>Bonnsch • Kolsh-  4.0% ABV</h5> 
              <p class="menu-subtext">Born of a very specific German style of beer brewed in Bonn, this beauty is a merge of a Kolsh and Belgian wit beer with an upfront hint of citrus, a slightly fruity aroma, a clean wheat and pilsner taste and a crisp finish.</p> 
              <hr>
              <h4>Hop Farm Brewing:</h4> 
             <!-- <p> <span class="badge bg-dark mb-1">More from Hop Farm Coming Soon</span></p> -->
             <h5>Green Room Zen -  7.2% ABV</h5>
             <p class="menu-subtext">West coast IPA, old school. Loads of cira and mosaic hops. Hints of Grapefruit, Lemon Zest, Orange rind with supporting hint of bread and toffee. </p> 
             <h5>No Space for Mother-In-Law -  7.5% ABV</h5>
             <p class="menu-subtext">West coast IPA, dry hopped with Taiheke, Citra and Mosaic. Columbus and Zappa for bittering. Notes of tangerine, peach, and pine.</p> 
             
             <hr>
             <!-- <h4>Mindful Brewing:</h4> 
             <h5>Spa Day -  5.8% ABV</h5>
             <p class="menu-subtext">A cucumber wheat beer brewed in collaboration with Tortured Souls Brewing.</p> 
             <hr> -->
              <!-- <h5>Profondo Dry Hopped Italian Style Pilsner -  5.1% ABV</h5>
              <p class="menu-subtext">Dry hopped Italian Pilsner brewed with Eraclea malt and Saphir hops</p> -->

            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="container">
      <div class="row mt-5">
        <!-- <div class="col-md-6 mb-5 order-md-last">
        <div class="photo-bx--right">
          <div class="photo">
            <img src="images/bar_photos/wine_shot.jpg" class="img-fluid" alt="wine"> 
          </div>
        </div>
      </div> -->
        <div class="col-md-12">
          <div class="content wines">
            <div class="content-header">
              <h2>Available Wines</h2>
              <p>We pride ourselves in selecting the harder to find wines so that we can offer you a unique experience when you order wines from our menu.</p>
            </div>
            <div class="content-body">
              <h4>Rose</h4>
              <h5>Elouan Rose Blend Oregon - $9</h5>
              <p class="menu-subtext">Refreshing aromas of strawberry, cantaloupe, and nectarine followed by notes of
                citrus. Lively flavors of grapefruit, strawberry, and nectarine fill the palate with subtle notes of
                lemon custard and kumquat. On the mid-palate, this wine is rich and expansive with bright acidity that
                carries flavors of raspberry and clementine rind through to a long-lasting, smooth finish</span></p>
              <h4>White</h4>
              <h5>Piper Sonoma Blanc de Blanc - $12</h5>
              <p class="menu-subtext">Piper Sonoma Brut, made of 60% Chardonnay, 15% Pinot Noir and 25% Pinot Meunier,
                has a pale gold color, petite bubbles and delicate aromas of ripe apple, toast and peach. This sparkling
                wine is dry and fresh with a long elegant finish, possessing crisp citrus flavors with hints of
                strawberry and vanilla smoke</p>
             
              <h5>Mason Cellars, Sauvignon Blanc Napa Valley - $10</h5>
              <p class="menu-subtext">Our Sauvignon Blanc greets the nose with tropical fruit, figs, and honey. The
                palate offers creamy pear and fig flavors before giving way to a long, bright finish with hints of
                grapefruit.</p>
              <h5>The Hess Collection, Chardonnay Shirtail Rances Monterey County - $9</h5>
              <p class="menu-subtext">This elegant wine is rich with complex flavors of pear, apple, grapefruit, crisp,
                mild acidity, oak and vanilla.</p>
              <h5>Montinore Estate, Pinot Gris Willamette Valley - $10</h5>
              <p> <span class="badge bg-dark mb-1">More Coming Soon</span></p> 

              <!-- <p class="menu-subtext">This dry style Pino Gris begins with aromatics of bright citrus and tropical fruit
                that lead to a firm foundation of apple, mango and a hint of savory and spice on the palate, finish
                crisp and bright.</p> -->
              <h4>Reds</h4>
              <h5>Josh Cellars Cabernet Sauvignon - $10</h5>
              <p class="menu-subtext">The bouquet is rich with dark fruits, cinnamon, clove and subtle oak aromas. The
                wine is juicy on the palate with black cherries and blackcurrant flavors prominent, accented by delicate
                vanilla flavors and toasty oak, finishing long with round, soft tannins.</p>
              <h5>Viberti Barbera d'Alba La Gemella - $11</h5>
              <p class="menu-subtext">The plant of a new vineyard with a higher plant density is born. The goal, then
                achieved over time is a wine with a great concentration, a particular amiability and a nose with a clear
                and intense red fruit. The acidity that accompanies the concentration makes the wine extremely elegant
                and fascinating.</p>
               <h5>The Calling Visionary Red - $12</h5>
              <p class="menu-subtext">74% Cabernet Sauvignon 21% Malbec 5% Petit Sirah
                Bold and inviting, the nose offers compelling layers of dark black fruit with nuances of coffee,
                chocolate and brown spice. The palate is rich and concentrated, with flavors of ripe blackberry and
                blueberry that marry elegantly with notes of vanilla, cedar and dark toffee. Soft yet with a tension and
                firm tannins.</p>
              <h5>Montinore Estate Of The Hills Pinot Noir Williamette Valley 2018 - $12</h5>
              <p class="menu-subtext">Established in 1982, Montinore Estate is the largest producer of certified estate
                wines made from Biodynamic® grapes in the country. With our 200-acre Demeter Certified Biodynamic® and
                Stellar Certified Organic vineyard located in north Willamette Valley in Oregon, we focus on producing
                superior Pinot Noirs, cool climate whites, and fascinating Italian</p>
            
              <!-- <h5>- Artezin Wines, Zinfandel Mendocino County (2017) - $12</h5> -->
              <!-- <p class="menu-subtext">Artezine Zinfandel is instantly recognizable as a classic, fruit-forward, Zinny
                Zin. This signature style offers a full-bodied wine with round tannins and momderate alcohol.</p>-->
              <h5><span class="badge bg-dark mb-1">Coming Soon</span> La Quercia Montepulciano - $10</h5> 
              <p class="menu-subtext">Concentrated black cherry. Chocolate / caramel on the nose with a bit of musk or
                smoke.</p>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-5">
        <!-- <div class="col-md-6 mb-5 order-md-last">
          <div class="photo-bx--right">
            <div class="photo">
              <img src="images/bar_photos/wine_shot.jpg" class="img-fluid" alt="wine"> 
            </div>
          </div>
        </div> -->
        <div class="col-md-12">
          <div class="content wines">
            <div class="content-header">
              <h2>Non-Alcoholic Beverages</h2>

            </div>
            <div class="content-body">
              <h5>- Coke - $3</h5>
              <h5>- Diet Coke - $2</h5>
              <h5>- Sparkling Water - $3</h5>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>