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
    <a href="" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#filterModal">Filter</a>
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

<!-- Include the filter modal -->
<div class="modal fade" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="filterModalLabel">Filter Campaigns</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="filterForm" method="POST" action="/campaigns/filter">
                    <div class="form-group">
                        <label for="filterId">Filter by ID</label>
                        <input type="text" class="form-control" id="filterId" name="filterId">
                    </div>
                    <div class="form-group">
                        <label for="filterName">Filter by Campaign Name</label>
                        <input type="text" class="form-control" id="filterName" name="filterName">
                    </div>
                    <div class="form-group">
                        <label for="filterProcess">Filter by Process</label>
                        <input type="text" class="form-control" id="filterProcess" name="filterProcess">
                    </div>
                    <div class="form-group">
                        <label for="filterActive">Filter by Active Status</label>
                        <select class="form-control" id="filterActive" name="filterActive">
                            <option value="">Select</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Apply Filters</button>
                </form>
            </div>
        </div>
    </div>
</div>
