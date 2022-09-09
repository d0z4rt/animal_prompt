<aside id="menu">
  <nav>
    <a onclick="openWtf()">WTF??</a>
    <?php foreach ($directories as $dir) {
      $class = ($dir === $directory) ? 'class="active"' : null;
      echo "<a $class href=\"$dir\">$dir</a>";
    } ?>
  </nav>
</aside>