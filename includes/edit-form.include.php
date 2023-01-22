<div class="row justify-content-center m-5">
        <div class="col-5">
    <form action="user-actions/edit-action-user.php?id=<?= $row["ID"]?>" method="post">
    <label for="name" class="form-label">Name:</label>
        <div class="mb-3">
            <input type="text" name="name" class="col-8 p-1" value="<?= $row['name']?>">
        </div>
    <label for="surname" class="form-label">Surname:</label>
        <div class="mb-3">
            <input type="text" name="surname" class="col-8 p-1" value="<?= $row['surname']?>">
        </div>
    <label for="email" class="form-label">Email:</label>
        <div class="mb-3">
            <input type="email" name="email" class="col-8 p-1" value="<?= $row['email']?>">
        </div>
    <label for="phone" class="form-label">Phone:</label>
        <div class="mb-3">
            <input type="tel" name="phone" pattern="+[0-9]{12}" class="col-8 p-1" value="<?= $row['phone']?>">
        </div>
    <label for="city" class="form-label">City:</label>
        <div class="mb-3">
            <input type="text" name="city" class="col-8 p-1" value="<?= $row['city']?>">
        </div>
        <div class="col-7 mx-auto">
            <input type="submit" name="edit" class="btn btn-success col-5" value="Edit">
        </div>
    </form>
        </div>
    </div>