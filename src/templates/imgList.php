<section>
  <?php foreach ($images as $img) {
    $username = preg_replace('/^[0-9]{8}_[0-9]{6}_/', '', $img);
    $username = preg_replace('/\.[a-z]{3,4}$/', '', $username);

    echo "
    <article>
      <img src=\"data/$directory/$img\" />
      <span>by <b>$username</b></span>
    </article>
    ";
  } ?>

  <?php if (isset($placeholder)) {
    echo "<p>$placeholder</p>";
  } ?>

  <div id="form">
    <header>Upload your image <button onclick="closeForm()">close</button></header>
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