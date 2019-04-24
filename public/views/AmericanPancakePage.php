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
        <script src="../../resources/javascript/loginHandler.js"></script>
</head>
<body>
  <p id="recipeSite" hidden>AmericanPancake</p>
  <?php include 'resources/fragments/header.php' ?>
  <?php include 'resources/fragments/nav.php' ?>
  <div>
    <h2>RECIPE FOR DELICIOUS AMERICAN PANCAKES!</h2>
    <div>
      <div class="pancake_img">
        <img src="https://t3.ftcdn.net/jpg/01/05/86/76/240_F_105867649_L6LKPGIjdKSWufMzaTlTO5IQPezdnFoy.jpg" class="w3-border w3-padding" alt="Alps" style="border-radius:8px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
      </div>
      <p class="title">Ingredients<br></p>
      <p class="text">
        150g plain flour<br>
        1/2 teaspoon salt<br>
        1 tablespoon baking powder<br>
        1 teaspoon caster sugar<br>
        225ml milk<br>
        1 egg<br>
        1 knob of butter, melted<br>
        butter or oil for frying<br></p>
      <p class="title">Preparations<br></p>
      <p class="text">
        1. Sift together the flour, salt, baking powder and sugar. Make a well in the centre. Pour in the milk, then add the egg and melted butter. Beat well till the pancake batter is smooth.<br><br>
        2. Heat a frying pan over medium heat. Lightly grease with butter or vegetable oil. To test to see if the pan is hot enough, flick a bit of water on the pan. If it sizzles, it is ready. Ladle the pancake batter into the pan.<br><br>
        3. Cook each pancake till bubbles appear on the surface and the edges have gone slightly dry. Flip each pancake and cook for a minute or two on the reverse side, till golden brown.<br><br>
        4. Serve hot with your favourite toppings, such as maple syrup and fresh berries. Enjoy!<br><br>
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
                    <input type="hidden" id="msgSection" name='msgSection' value="AmericanPancake"/>

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
