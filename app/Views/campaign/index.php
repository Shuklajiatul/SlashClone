
<style>
    .pagination {
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .pagination a {
        border: 1px solid #ddd;
        padding: 8px 16px;
        margin: 0 5px;
        text-decoration: none;
        color: #007bff;
        background-color: #f8f9fa;
    }

    .pagination a:hover {
        background-color: #ddd;
    }

    .pagination .active a {
        background-color: #007bff;
        color: white;
        border: 1px solid #007bff;
    }
</style>
<div class="container">
    <h2 class="my-4 text-center text-dark">Campaigns List</h2>
    <a href="<?= base_url('campaigns/create') ?>" class="btn btn-primary mb-3">Add Campaign</a>
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered text-center">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Campaign Name</th>
                    <th>Process</th>
                    <th>Active</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($campaigns as $campaign): ?>
                    <tr>
                        <td><?= $campaign['id'] ?></td>
                        <td><?= $campaign['campaign_name'] ?></td>
                        <td><?= $campaign['process'] ?></td>
                        <td><?= $campaign['active'] ? '<span class="badge badge-success">Yes</span>' : '<span class="badge badge-danger">No</span>' ?></td>
                        <td><?= date('F j, Y', strtotime($campaign['start_date'])) ?></td>
                        <td><?= date('F j, Y', strtotime($campaign['end_date'])) ?></td>
                        <td>
                            <a href="<?= base_url('campaigns/edit/' . $campaign['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                            <form action="<?= base_url('campaigns/delete/' . $campaign['id']) ?>" method="post" style="display:inline;">
                                <?= csrf_field() ?>
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <?= $pager->links() ?>
            </li>
        </ul>
    </nav>
</div>

