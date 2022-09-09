<aside>
  <nav>
    <a onclick="openWtf()">WTF??</a>
    <?php foreach ($directories as $dir) {
      $class = ($dir === $directory) ? 'class="active"' : null;
      echo "<a $class href=\"$dir\">$dir</a>";
    } ?>
  </nav>
  <div id="wtf">
    <header>
      <h2>What the heck is this</h2> <button onclick="closeWtf()">close</button>
    </header>
    <p>This website is the home of the 🐺 Wolf Gang, an open challenge started by @mthedoodler#4363 over the DrawaBox discord.</p>
    <p>To join the gang simply participate in one of the prompt by drawing the animal, there is no time limit or medium restriction.</p>
    <p>To upload any of your work here you'll need a password, just ask @D0Z#4050 </p>
    <a href="https://github.com/d0z4rt/animal_prompt" target="_blank">Source code available here</a>
  </div>
</aside>