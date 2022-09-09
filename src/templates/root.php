<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>🐺 Wolf Gang</title>
  <meta name="description" content="Weekly animal prompt" />
  <link rel="stylesheet" href="styles/main.css" />
  <script src="scripts/main.js" defer></script>
</head>

<body>
  <header><button id="menu_button" onclick="openMenu()">Menu</button> week prompt is <?= $title ?> !</header>
  <div id="content">
    <?= $body ?>
  </div>
  <div id="add" onclick="openForm()">Add mine</div>
  <div id="wtf">
    <header>
      What the heck is this <button onclick="closeWtf()">close</button>
    </header>
    <p>This website is the home of the 🐺 Wolf Gang, an open challenge started by @mthedoodler#4363 over the DrawaBox discord.</p>
    <p>To join the gang simply participate in one of the prompt by drawing the animal, there is no time limit or medium restriction.</p>
    <p>To upload any of your work here you'll need a password, just ask @D0Z#4050 </p>
    <a href="https://github.com/d0z4rt/animal_prompt" target="_blank">Source code available here</a>
  </div>
</body>

</html>