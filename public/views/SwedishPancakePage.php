<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <title>TastyRecipes!</title>
    <link rel="stylesheet"
          type="text/css"
          href="../../resources/css/reset.css">
    <link rel="stylesheet"
          type="text/css"
          href="../../resources/css/style.css">
    <link rel="stylesheet"
          type="text/css"
          href="../../resources/css/loginstyle.css">
          <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="../../resources/javascript/commentStore.js"></script>
</head>
<body>
  <p id='recipeSite' name='recipeSite' hidden>SwedishPancake</p>
  <?php include 'resources/fragments/header.php' ?>
  <?php include 'resources/fragments/nav.php' ?>
<div>
  <h2>RECIPE FOR DELICIOUS SWEDISH PANCAKES!</h2>
  <div>
    <div class="pancake_img">
      <img src="https://images.pexels.com/photos/916263/pexels-photo-916263.jpeg?auto=compress&cs=tinysrgb&h=350" class="w3-border w3-padding" alt="Alps">
    </div>
    <p class="title">Ingredients<br></p>
    <p class="text">
      300g plain flour<br>
      1/2 teaspoon salt<br>
      1 teaspoon caster sugar<br>
      600ml milk<br>
      3 egg<br>
      1 knob of butter, melted<br>
      butter or oil for frying<br></p>
    <p class="title">Preparations<br></p>
    <p class="text">
      1. In a large mixing bowl, whisk together the flour and the eggs. Gradually add in the milk and water, stirring to combine. Add the salt and butter; beat until smooth.<br><br>
      2. Heat a lightly oiled griddle or frying pan over medium high heat. Pour or scoop the batter onto the griddle, using approximately 1/4 cup for each pancake. Tilt the pan with a circular motion so that the batter coats the surface evenly.<br><br>
      3. Cook the pancake for about 2 minutes, until the bottom is light brown. Loosen with a spatula, turn and cook the other side.<br><br>
      4. Serve hot with your favourite toppings, such as whipped cream and raspberry jam. Enjoy!<br><br>
    </p>
    <div class="section group">
        <h2 class="col span_1_of_4">Reviews!</h2>
    </div>
    <div class="section group">
        <div class="col span_4_of_4">
          <p><span id="res"></span></p>
          <div id="fromServer"></div>

    <?php
    if($this->session->get('username') != null){
      if($this->session->get('username') != 'Fel'){
      ?>
      <form id="msgDetails">
              <div class="col span_2_of_4">
                  <label for="entry"><?php echo $this->session->get('username') ?>, write a comment if you wish!</label>
              </div>
                  <textarea id= "msg" rows = 5 name='msg' placeholder="Write your comment here."></textarea>
              <div>
                  <input type="hidden" id="msgSection" name='msgSection' value="SwedishPancake"/>

              </div>
      </form>
      <button id="SendComment"><u>Send Comment</u></button>
    <?php }} ?>

        </div>
    </div>
    </div>

  </div>
</div>
</html>
