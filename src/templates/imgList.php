<div>
    <?php foreach ($images as $img) {
        echo "<img src=\"data/$directory/$img\" />";
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
</div>