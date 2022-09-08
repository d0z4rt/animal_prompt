<section>
  <?php foreach ($images as $img) {
    echo "
    <article>
    <img src=\"data/$directory/$img\" />
    <span>by <b>Name of the dude who made it</b>
    </span>
    </article>";
  } ?>

  <?php if (isset($placeholder)) {
    echo "<p>$placeholder</p>";
  } ?>

  <form method="POST" enctype="multipart/form-data">
    <input name="name" type="text" required />
    <input name="pass" type="password" required />
    <input name="img" type="file" required />
    <button>Valider</button>
  </form>
</section>