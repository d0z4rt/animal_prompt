<aside>
  <nav>
    <?php foreach ($directories as $dir) {
      $class = ($dir === $directory) ? 'class="active"' : null;
      echo "<a $class href=\"$dir\">$dir</a>";
    } ?>
  </nav>
</aside>