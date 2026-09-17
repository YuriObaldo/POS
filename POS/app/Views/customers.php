<?= $this->include('layouts/header') ?>
<section class="card">
    <h2>Customer Accounts</h2>
    <p>Customer records currently loaded from temporary sample data.</p>
    <table>
        <thead>
            <tr>
                <th>Full name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?= esc($customer['full_name']) ?></td>
                    <td><?= esc($customer['email']) ?></td>
                    <td><?= esc($customer['phone']) ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</section>
<?= $this->include('layouts/footer') ?>
