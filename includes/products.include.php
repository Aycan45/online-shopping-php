<div class="card m-4">
  <div class="row g-0">
    <div class="col-md-2">
      <img src=<?= $row['images']?> class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $row['title']?></h5>
        <p class="card-text"><?= $row['description']?></p>
      </div>
    </div>
    <?php if (isset($_SESSION['id'])) {
    ?>
    <div class="col-md-2">
      <div class="m-2">
        <a href="edit-product.php?title=<?= $row['title']?>" class="btn btn-success">Update</a>
        <a href="delete-product-action.php?id=<?= $row['ID']?>" class="btn btn-danger">Delete</a>
      </div>
    </div>
    <?php
    }
    ?>
  </div>
</div>