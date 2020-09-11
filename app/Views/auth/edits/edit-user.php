<!-- load main layout -->
<?= $this->extend('auth/layouts/default') ?>

<!-- load main content -->
<?= $this->section('main') ?>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-3">
        <h1 class="h2">Edit user</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="<?= site_url('users') ?>" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-left"></i> Return</a>
        </div>
    </div>

    <div class="card p-3">
        <form action="<?= site_url('users/update-user'); ?>" method="POST" accept-charset="UTF-8" onsubmit="Button.disabled = true; return true;">
            <?= csrf_field() ?>
            <div class="form-group">
                <label for="firstname">First name</label>
                <input class="form-control" required type="text" name="firstname" value="<?= $user['firstname'] ?>" />
            </div>
            <div class="form-group">
                <label for="lastname">Last name</label>
                <input class="form-control" required type="text" name="lastname" value="<?= $user['lastname'] ?>" />
            </div>
            <div class="form-group">
                <label for="name">Nickname</label>
                <input class="form-control" required type="text" name="name" value="<?= $user['name'] ?>" />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" required type="email" name="email" value="<?= $user['email'] ?>" />
            </div>
            <div class="form-group">
                <label for="active">Status</label>
                <select class="form-control" name="active" required>
                    <?php if ($user['active'] === 1) : ?>
                        <option value="1" selected>Enable</option>
                    <?php else : ?>
                        <option value="1">Enable</option>
                    <?php endif ?>

                    <?php if ($user['active'] === 0) : ?>
                        <option value="0" selected>Disable</option>
                    <?php else : ?>
                        <option value="0">Disable</option>
                    <?php endif ?>
                </select>
              </div>
            <div class="text-right">
                <input name="id" type="hidden" value="<?= $user['id'] ?>" readonly/>
                <button type="submit" class="btn btn-primary" name="Button"><i class="fas fa-check-circle"></i> Update</button>
            </div>
        </form>
    </div>

<?= $this->endSection() ?>