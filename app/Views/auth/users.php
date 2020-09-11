<!-- load main layout with datatable -->
<?= $this->extend('auth/layouts/default-table') ?>

<!-- load modals -->
<?= $this->section('modals') ?>

    <!-- create user modal form -->
    <?= view('App\Views\auth\modals\add-user') ?>

<?= $this->endSection() ?>

<!-- load main content -->
<?= $this->section('main') ?>

    <div class="row">
      <div class="col-sm-4">
        <div class="card mt-3">
          <div class="card-body">
            <h5 class="card-title">Total Users</h5>
            <h3 class="card-text"><?= $usercount ?></h3>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card mt-3">
          <div class="card-body">
            <h5 class="card-title">New Users</h5>
            <h3 class="card-text"><?= $newusers ?> <span class="text-small text-muted">(in last 30 days)</span></h3>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card mt-3">
          <div class="card-body">
            <h5 class="card-title">Active Users</h5>
            <h3 class="card-text"><?= $percentofactiveusers ?>%</h3>
          </div>
        </div>
      </div>
    </div>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-3">
        <h1 class="h2">Users</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#createuserformmodal"><i class="fas fa-user-plus"></i> Create User</button>
        </div>
    </div>

    <div class="card p-3">
        <div class="table-responsive">
            <table width="100%" class="table table-hover" id="dataTables-table" data-order='[[ 0, "asc" ]]'>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $item):?>
                    <tr>
                        <td><?= $item['id'] ?></td>
                        <td><?= $item['name'] ?></td>
                        <td><?= $item['email'] ?></td>
                        <td>
                            <?php if ($item['active'] == 1) : ?>
                                Active
                            <?php else : ?>
                                Disabled
                            <?php endif ?>
                        </td>
                        <td class="text-right">
                            <?php if ($item['active'] == 0) : ?>
                                <a class="btn btn-outline-secondary btn-sm" href="<?= site_url('users/enable/').$item['id'] ?>"><i class="fas fa-user-check"></i> Enable</a>
                            <?php endif ?>

                            <a class="btn btn-outline-secondary btn-sm" href="<?= site_url('users/edit/').$item['id'] ?>"><i class="fas fa-edit"></i> Edit</a>
                            <a class="btn btn-outline-secondary btn-sm" href="<?= site_url('users/delete/').$item['id'] ?>"><i class="fas fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>

<?= $this->endSection() ?>