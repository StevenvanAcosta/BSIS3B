
<div class="container mt-5">

  <div class="d-flex justify-content-between align-items-center">
    <h2>List of Users</h2>

    <a href="<?= ROOT ?>/users/create" class="btn btn-primary">Add New</a>

  </div>

  <table class="table table-striped mt-3">
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th></th>
    </tr>
    <?php if ($rows != null) { ?>

      <?php foreach ($rows as $item) { ?>
        <tr>
          <td><?= $item->firstname ?></td>
          <td><?= $item->lastname ?></td>
          <td><?= $item->email ?></td>
          <td>
            <a href="<?= ROOT ?>/users/edit/<?= $item->id ?>" class="btn btn-success">Edit</a>
            <a href="<?= ROOT ?>/users/delete/<?= $item->id ?>" class="btn btn-danger">Delete</a>
          </td>
        </tr>
      <?php } ?>

    <?php } else { ?>
      <tr>
        <td colspan="4">
          <h2>Record not found</h2>
        </td>
      </tr>
    <?php } ?>
  </table>

</div>