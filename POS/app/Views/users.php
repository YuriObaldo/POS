<?= $this->include('layouts/header') ?>
<section class="card">
    <h2>User Accounts</h2>
    <p>Staff records currently loaded from temporary sample data.</p>
    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Full name</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= esc($user['username']) ?></td>
                    <td><?= esc($user['full_name']) ?></td>
                    <td><?= esc($user['role']) ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</section>
<?= $this->include('layouts/footer') ?>
