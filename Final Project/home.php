<?php
session_start(); // Start the session

if (isset($_SESSION["username"])) {
    $uname = $_SESSION["username"];
   
} else {
    header("Location: index.php"); 
    exit; 
}
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbinfom";
$conn = new mysqli ($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Homepage</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">

    

    <!-- Bootstrap core CSS -->
<link href="bootstrap.min.css" rel="stylesheet">
<link href="popup.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
        
    nav a {
        text-decoration: none;
        color: rgb(255, 255, 255);
    }

    nav a:hover {
        color: rgb(173, 173, 173);
    }
    </style>

    
  </head>
  <body>
    
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Welcome to CookIt!

We’re delighted to have you join our culinary adventure. Our mission is to inspire home cooks of all levels to explore the joy of cooking through a diverse collection of recipes that celebrate flavors from around the world.
We believe that cooking should be fun, accessible, and rewarding. That's why we focus on providing recipes that use readily available ingredients and straightforward techniques. We encourage experimentation and creativity, and we’re here to support you every step of the way.</p>

          </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Menu</h4>
          <p>
       <nav>
                <a href="menu.php">Home</a><br><br>
                <a href="menu.php">Profile</a><br><br>
                <a href="logout.php">Logout</a><br><br>
             </nav>
       </p>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
       <strong>CookIt</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main>

<div id="popAdobo" class="popup-form">
        <div class="form-container">
            <span id="closeFormBtn" class="close-btn">&times;</span>
            <form action="#">
                <h2>Chicken Adobo</h2>
                <div class="images">
                <img src="Images\recipe/adobo.avif" alt="Chicken Adobo"/>
                </div>
                <div class="ingredients">
            <h3>Ingredients</h3>
            <ul>
              <li>2 lbs chicken, cut into serving pieces</li>
              <li>1/2 cup soy sauce</li>
              <li>1/2 cup vinegar</li>
              <li>1 head garlic, minced</li>
              <li>1 onion, chopped</li>
              <li>2 bay leaves</li>
              <li>1 tsp black peppercorns</li>
              <li>1 tbsp sugar (optional)</li>
              <li>1 cup water</li>
              <li>2 tbsp cooking oil</li>
            </ul>
          </div>
          <div class="instructions">
            <h3>Instructions</h3>
            <ol>
              <li>In a large bowl, combine chicken, soy sauce, and garlic. Marinate for at least 30 minutes.</li>
              <li>Heat oil in a large skillet. Sauté onion and garlic until fragrant.</li>
              <li>Add marinated chicken and cook until lightly browned.</li>
              <li>Pour in the marinade, add bay leaves and peppercorns. Stir in vinegar and bring to a boil.</li>
              <li>Add water, reduce heat, and simmer until chicken is tender and sauce is reduced.</li>
              <li>Adjust seasoning with salt and sugar if desired. Serve hot with steamed rice.</li>
            </ol>
          </div>
        </form>
      </div>
    </div>
             
    <div id="popBicol" class="popup-form">
      <div class="form-container">
        <span id="closeBicolFormBtn" class="close-btn">&times;</span>
        <form action="#">
          <h2>Bicol Express</h2>
          <div class="images">
            <img src="Images/recipe/Pork-Bicol-Express-cut.jpg" alt="Bicol Express"/>
          </div>
          <div class="ingredients">
            <h3>Ingredients</h3>
            <ul>
              <li>1 lb pork belly, sliced into bite-sized pieces</li>
              <li>1 cup coconut milk</li>
              <li>1 cup coconut cream</li>
              <li>5 cloves garlic, minced</li>
              <li>1 onion, chopped</li>
              <li>2 tbsp shrimp paste (bagoong)</li>
              <li>6-8 green chilies, sliced</li>
              <li>2-3 red chilies, sliced</li>
              <li>Salt and pepper to taste</li>
              <li>2 tbsp cooking oil</li>
            </ul>
          </div>
          <div class="instructions">
            <h3>Instructions</h3>
            <ol>
              <li>Heat oil in a large pan. Sauté garlic and onion until fragrant.</li>
              <li>Add pork belly and cook until lightly browned.</li>
              <li>Add shrimp paste and stir well.</li>
              <li>Pour in coconut milk and bring to a boil. Reduce heat and simmer until pork is tender.</li>
              <li>Add chilies and coconut cream. Continue to cook until sauce thickens.</li>
              <li>Season with salt and pepper to taste. Serve hot with steamed rice.</li>
            </ol>
          </div>
        </form>
      </div>
    </div>

    <div id="popBiryani" class="popup-form">
  <div class="form-container">
    <span id="closeBiryaniFormBtn" class="close-btn">&times;</span>
    <form action="#">
      <h2>Biryani</h2>
      <div class="images">
        <img src="Images/recipe/_Hyderabadi_Dum_Biryani_.jpg" alt="Biryani">
      </div>
      <div class="ingredients">
        <h3>Ingredients</h3>
        <ul>
          <li>2 cups basmati rice</li>
          <li>1 lb chicken, cut into pieces</li>
          <li>2 onions, sliced</li>
          <li>3 tomatoes, chopped</li>
          <li>1 cup yogurt</li>
          <li>4 cloves garlic, minced</li>
          <li>1 inch ginger, minced</li>
          <li>2 tbsp biryani masala</li>
          <li>1 tsp turmeric powder</li>
          <li>1 tsp cumin seeds</li>
          <li>4 green cardamom pods</li>
          <li>1 cinnamon stick</li>
          <li>2 bay leaves</li>
          <li>4 cups water</li>
          <li>Salt to taste</li>
          <li>Fresh cilantro and mint leaves for garnish</li>
        </ul>
      </div>
      <div class="instructions">
        <h3>Instructions</h3>
        <ol>
          <li>Wash and soak basmati rice for 30 minutes. Drain and set aside.</li>
          <li>Heat oil in a pot. Sauté onions, garlic, ginger, cumin seeds, cardamom, cinnamon, and bay leaves until fragrant.</li>
          <li>Add chicken and cook until browned. Stir in tomatoes, yogurt, biryani masala, turmeric, and salt.</li>
          <li>Add rice and water. Bring to a boil, then reduce heat and simmer until rice is cooked and liquid is absorbed.</li>
          <li>Garnish with fresh cilantro and mint leaves. Serve hot with raita or salad.</li>
        </ol>
      </div>
    </form>
  </div>
</div>


<div id="popCarbonara" class="popup-form">
  <div class="form-container">
    <span id="closeCarbonaraFormBtn" class="close-btn">&times;</span>
    <form action="#">
      <h2>Carbonara</h2>
      <div class="images">
        <img src="Images/recipe/Espaguetis_carbonara.jpg" alt="Carbonara">
      </div>
      <div class="ingredients">
        <h3>Ingredients</h3>
        <ul>
          <li>400g spaghetti</li>
          <li>200g pancetta or bacon, diced</li>
          <li>4 large eggs</li>
          <li>1 cup grated Parmesan cheese</li>
          <li>4 cloves garlic, minced</li>
          <li>Salt and black pepper to taste</li>
          <li>2 tbsp olive oil</li>
          <li>Fresh parsley, chopped (optional)</li>
        </ul>
      </div>
      <div class="instructions">
        <h3>Instructions</h3>
        <ol>
          <li>Cook spaghetti according to package instructions. Drain and set aside.</li>
          <li>In a large pan, heat olive oil over medium heat. Add pancetta or bacon and cook until crisp. Add garlic and sauté briefly.</li>
          <li>In a bowl, whisk eggs and Parmesan cheese together. Season with salt and black pepper.</li>
          <li>Add cooked spaghetti to the pan with pancetta. Remove from heat and quickly stir in the egg mixture until creamy.</li>
          <li>Garnish with fresh parsley if desired. Serve immediately.</li>
        </ol>
      </div>
    </form>
  </div>
</div>

<div id="popSamosa" class="popup-form">
  <div class="form-container">
    <span id="closeSamosaFormBtn" class="close-btn">&times;</span>
    <form action="#">
      <h2>Samosa</h2>
      <div class="images">
        <img src="Images/recipe/samosa.avif" alt="Samosa">
      </div>
      <div class="ingredients">
        <h3>Ingredients</h3>
        <ul>
          <li>2 cups all-purpose flour (for the wrapper)</li>
          <li>1/4 cup water</li>
          <li>2 cups virgin olive oil (for frying)</li>
          <li>5 boiled potatoes</li>
          <li>1 handful raw peanuts</li>
          <li>1 teaspoon cumin seeds</li>
          <li>1 teaspoon crushed ginger</li>
          <li>1 teaspoon coriander powder</li>
          <li>1 teaspoon red chili powder</li>
          <li>1 teaspoon kasoori methi leaves</li>
          <li>1 teaspoon carom seeds</li>
          <li>1 teaspoon coriander seeds</li>
          <li>1 teaspoon green chili</li>
          <li>1 teaspoon cashews</li>
          <li>1 teaspoon cumin powder</li>
          <li>1/2 teaspoon garam masala powder</li>
          <li>Salt to taste</li>
          <li>1 teaspoon coriander leaves</li>
          <li>2 tablespoons ghee</li>
        </ul>
      </div>
      <div class="instructions">
        <h3>Instructions</h3>
        <ol>
          <li>Prepare the dough by mixing all-purpose flour with water and ghee. Knead until smooth, then cover and let it rest for 30 minutes.</li>
          <li>Meanwhile, prepare the filling by mashing boiled potatoes and mixing them with crushed ginger, cumin seeds, coriander powder, red chili powder, kasoori methi leaves, carom seeds, coriander seeds, green chili, cashews, cumin powder, garam masala powder, salt, and coriander leaves.</li>
          <li>Divide the dough into small balls and roll each ball into a thin circle.</li>
          <li>Place a spoonful of the filling on one half of the circle, fold the other half over the filling to form a semi-circle, and seal the edges tightly.</li>
          <li>Heat olive oil in a pan for frying.</li>
          <li>Once the oil is hot, fry the samosas until golden brown and crispy.</li>
          <li>Remove from the oil and drain on paper towels to remove excess oil.</li>
          <li>Serve hot with your favorite chutney or sauce.</li>
        </ol>
      </div>
    </form>
  </div>
</div>

<div id="popMacNCheese" class="popup-form">
  <div class="form-container">
    <span id="closeMacNCheeseFormBtn" class="close-btn">&times;</span>
    <form action="#">
      <h2>Macaroni and Cheese</h2>
      <div class="images">
        <img src="Images/recipe/Mac&cheese.jpg" alt="Macaroni and Cheese">
      </div>
      <div class="ingredients">
        <h3>Ingredients</h3>
        <ul>
          <li>2 cups elbow macaroni</li>
          <li>2 cups shredded cheddar cheese</li>
          <li>2 cups milk</li>
          <li>2 tablespoons butter</li>
          <li>2 tablespoons all-purpose flour</li>
          <li>Salt and pepper to taste</li>
          <li>Bread crumbs (optional for topping)</li>
        </ul>
      </div>
      <div class="instructions">
        <h3>Instructions</h3>
        <ol>
          <li>Cook the elbow macaroni according to package instructions until al dente. Drain and set aside.</li>
          <li>In a saucepan, melt butter over medium heat. Stir in the flour to create a roux, then gradually whisk in the milk until smooth.</li>
          <li>Cook the mixture, stirring constantly, until it thickens, then remove from heat.</li>
          <li>Stir in the shredded cheddar cheese until melted and smooth. Season with salt and pepper to taste.</li>
          <li>Combine the cooked macaroni with the cheese sauce until well coated.</li>
          <li>If desired, transfer the mixture to a baking dish, sprinkle with bread crumbs, and bake in a preheated oven at 350°F (175°C) for 20-25 minutes until bubbly and golden brown on top.</li>
          <li>Serve hot and enjoy!</li>
        </ol>
      </div>
    </form>
  </div>
</div>

<div id="popCalamares" class="popup-form">
  <div class="form-container">
    <span id="closeCalamaresFormBtn" class="close-btn">&times;</span>
    <form action="#">
      <h2>Calamares</h2>
      <div class="images">
        <img src="Images/recipe/calamares-recipe-1.jpg" alt="Calamares">
      </div>
      <div class="ingredients">
        <h3>Ingredients</h3>
        <ul>
          <li>1 lb squid (cleaned and sliced into rings)</li>
          <li>1 cup all-purpose flour</li>
          <li>1 teaspoon salt</li>
          <li>1/2 teaspoon black pepper</li>
          <li>1/2 teaspoon paprika</li>
          <li>1/4 teaspoon garlic powder</li>
          <li>1/4 teaspoon onion powder</li>
          <li>1/4 teaspoon cayenne pepper (optional)</li>
          <li>Vegetable oil (for frying)</li>
          <li>Lemon wedges (for serving)</li>
        </ul>
      </div>
      <div class="instructions">
        <h3>Instructions</h3>
        <ol>
          <li>In a bowl, mix together flour, salt, black pepper, paprika, garlic powder, onion powder, and cayenne pepper (if using).</li>
          <li>Dredge the squid rings in the seasoned flour mixture until evenly coated.</li>
          <li>Heat vegetable oil in a deep fryer or large skillet to 350°F (175°C).</li>
          <li>Fry the squid rings in batches for 2-3 minutes or until golden brown and crispy.</li>
          <li>Remove the fried squid rings using a slotted spoon and drain on paper towels to remove excess oil.</li>
          <li>Serve hot with lemon wedges and your favorite dipping sauce.</li>
        </ol>
      </div>
    </form>
  </div>
</div>
<div id="popAlbondigas" class="popup-form">
  <div class="form-container">
    <span id="closeAlbondigasFormBtn" class="close-btn">&times;</span>
    <form action="#">
      <h2>Albondigas</h2>
      <div class="images">
        <img src="Images/recipe/albondigas-al-chipotle-recipe.jpg" alt="Albondigas">
      </div>
      <div class="ingredients">
        <h3>Ingredients</h3>
        <ul>
          <li>1 lb ground beef</li>
          <li>1/2 cup breadcrumbs</li>
          <li>1/4 cup milk</li>
          <li>1 egg</li>
          <li>1/4 cup finely chopped onion</li>
          <li>2 cloves garlic, minced</li>
          <li>1 teaspoon ground cumin</li>
          <li>1 teaspoon dried oregano</li>
          <li>1/4 cup chopped fresh parsley</li>
          <li>Salt and pepper to taste</li>
          <li>2 tablespoons olive oil</li>
          <li>1 can (14 oz) crushed tomatoes</li>
          <li>1 cup beef broth</li>
          <li>1/2 teaspoon paprika</li>
          <li>1/4 teaspoon chili powder</li>
          <li>1/4 cup chopped fresh cilantro (for garnish)</li>
        </ul>
      </div>
      <div class="instructions">
        <h3>Instructions</h3>
        <ol>
          <li>In a large bowl, mix together ground beef, breadcrumbs, milk, egg, onion, garlic, cumin, oregano, parsley, salt, and pepper until well combined.</li>
          <li>Form the mixture into small meatballs and set aside.</li>
          <li>Heat olive oil in a large skillet over medium heat. Brown the meatballs on all sides until cooked through, then remove from the skillet and set aside.</li>
          <li>In the same skillet, add crushed tomatoes, beef broth, paprika, and chili powder. Bring to a simmer.</li>
          <li>Return the meatballs to the skillet and simmer for 10-15 minutes, until the sauce has thickened slightly and the meatballs are heated through.</li>
          <li>Serve hot, garnished with chopped fresh cilantro.</li>
        </ol>
      </div>
    </form>
  </div>
</div>
<div id="popPancitPalabok" class="popup-form">
  <div class="form-container">
    <span id="closePancitPalabokFormBtn" class="close-btn">&times;</span>
    <form action="#">
      <h2>Pancit Palabok</h2>
      <div class="images">
        <img src="Images\recipe/Palabok-Wide.jpg" alt="Pancit Palabok">
      </div>
      <div class="ingredients">
        <h3>Ingredients</h3>
        <ul>
          <li>1 lb rice noodles (bihon)</li>
          <li>1/2 lb shrimp, peeled and deveined</li>
          <li>1/2 lb pork belly, thinly sliced</li>
          <li>4 cups shrimp broth</li>
          <li>1/4 cup annatto seeds (achuete)</li>
          <li>1/4 cup fish sauce (patis)</li>
          <li>2 tablespoons cornstarch, dissolved in water</li>
          <li>4 cloves garlic, minced</li>
          <li>1 onion, finely chopped</li>
          <li>2 cups crushed pork cracklings (chicharrón)</li>
          <li>4 hard-boiled eggs, sliced</li>
          <li>Green onions, chopped, for garnish</li>
          <li>Calamansi or lemon wedges, for serving</li>
        </ul>
      </div>
      <div class="instructions">
        <h3>Instructions</h3>
        <ol>
          <li>Prepare the rice noodles according to package instructions. Drain and set aside.</li>
          <li>In a pot, heat annatto seeds in oil over medium heat until the oil turns red. Strain the oil and discard the seeds.</li>
          <li>Sauté garlic and onion in annatto oil until fragrant. Add pork belly and cook until lightly browned.</li>
          <li>Add shrimp and cook until pink. Pour in shrimp broth and fish sauce, and let it simmer.</li>
          <li>Thicken the sauce by gradually adding cornstarch mixture while stirring constantly. Continue cooking until desired consistency is reached.</li>
          <li>Arrange cooked noodles on a serving platter. Pour the shrimp sauce over the noodles.</li>
          <li>Top with crushed pork cracklings, sliced hard-boiled eggs, and chopped green onions.</li>
          <li>Serve hot with calamansi or lemon wedges on the side.</li>
        </ol>
      </div>
    </form>
  </div>
</div>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Let's CookIt</h1>
        <p>"Good food is the foundation of genuine happiness." <br>- Auguste Escoffier</p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img src="Images\recipe/adobo.jpg"/>
            <div class="card-body">
              <p class="card-text">Chicken Adobo<br>  is a classic Filipino dish made by marinating and simmering chicken. Known for its rich, savory, and tangy flavors.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" id="adobobtn" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-muted">Philippines</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="Images\recipe/Pork-Bicol-Express-Recipe.jpg"/>
            <div class="card-body">
              <p class="card-text">Bicol Express <br>is a spicy Filipino dish. Originating from the Bicol region, it offers a rich and creamy sauce with a perfect balance of heat and savory flavors.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" id="bicolbtn" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-muted">Philippines</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="Images\recipe/_Hyderabadi_Dum_Biryani_cut.jpg"/>
            <div class="card-body">
              <p class="card-text">Biryani<br>is a mixed rice dish. It is made with rice, some type of meat and spices. In some cases, it is prepared by substituting vegetables or paneer for the meat.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" id="biryanibtn" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-muted">India</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="Images\recipe/Espaguetis_carbonara_cut.jpg"/>
            <div class="card-body">
              <p class="card-text">Carbonara<br> is a classic Italian pasta dish known for its rich and creamy sauce made with eggs, Parmesan cheese, and pancetta or bacon.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" id="carbonarabtn" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-muted">Italy</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="Images\recipe/samosacut.jpg"/>
            <div class="card-body">
              <p class="card-text">Samosa <br>is a beloved Indian snack featuring a crispy pastry filled with spiced potatoes, peas, and some other ingredient with chutney for dipping.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" id="samosabtn" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-muted">India</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="Images\recipe/Mac&cheesecut.jpg"/>
            <div class="card-body">
              <p class="card-text">Macaroni and cheese  <br>is a beloved comfort food dish consisting of cooked macaroni pasta combined with a creamy cheese sauce. Served as a side dish or as a main course.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" id="macncheesebtn" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-muted">Italy</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="Images\recipe/calamares-recipe-1cut.jpg"/>
            <div class="card-body">
              <p class="card-text">Calamares <br>a popular Spanish dish, features tender squid rings coated in seasoned flour and deep-fried to crispy perfection. </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" id="calamaresbtn" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-muted">Spain</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="Images\recipe/albondigas-al-chipotle-cut.jpg"/>
            <div class="card-body">
              <p class="card-text">Albondigas<br> a traditional Spanish dish, features tender meatballs simmered in a rich tomato-based sauce infused with aromatic spices.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" id="albobtn" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-muted">Spain</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="Images\recipe/palabokcut.jpg"/>
            <div class="card-body">
              <p class="card-text">Pancit Palabok<br>is a Filipino noodle dish with thin rice noodles in savory shrimp sauce, topped with shrimp, pork, chicharrón, and eggs.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" id="palabokbtn" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <small class="text-muted">Philippines</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>


<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Back to top</a>
    </p>
    </div>
</footer>


    <script src="bootstrap.bundle.min.js"></script>
    <script src="popup.js"></script>

  </body>
</html>
