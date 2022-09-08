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

  <div id="form">
    <form method="POST" enctype="multipart/form-data">
      <label>Name</label>
      <input name="name" type="text" required />
      <label>Image</label>
      <input name="img" type="file" required />
      <label>Password</label>
      <input name="pass" type="password" required />
      <button>Upload</button>
    </form>
  </div>
</section>