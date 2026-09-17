<?= $this->include('layouts/header') ?>
<section class="card">
    <h2>Welcome to the Point of Sale system</h2>
    <p>Manage customer accounts and staff user accounts from one simple starting point.</p>
    <div class="actions">
        <a class="button" href="<?= site_url('customers') ?>">View customers</a>
        <a class="button" href="<?= site_url('users') ?>">View users</a>
    </div>
</section>
<?= $this->include('layouts/footer') ?>
