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
    <h2 class="my-4 text-center text-dark">User List</h2>
    <a href="/users/create" class="btn btn-primary mb-3">Add User</a>
    <a href="#" class="btn btn-primary mb-3" data-toggle="modal" data-target="#filterModal">Filter</a>
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered text-center">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Role</th>
                    <th>D.O.B</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['name'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td><?= $user['phone'] ?></td>
                        <td>
                            <span class="badge badge-info"><?= $user['role'] ?></span>
                        </td>
                        <td><?= date('F j, Y', strtotime($user['dob'])) ?></td>
                        <td>
                            <a href="/users/edit/<?= $user['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <form action="/users/delete/<?= $user['id'] ?>" method="POST" style="display:inline;">
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

<!-- Modal from filter.php -->
<div class="modal fade" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="filterModalLabel">Filter Users</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="filterForm" method="POST" action="/users/filter">
                    <div class="form-group">
                        <label for="filterId">Filter by ID</label>
                        <input type="text" class="form-control" id="filterId" name="filterId">
                    </div>
                    <div class="form-group">
                        <label for="filterName">Filter by Name</label>
                        <input type="text" class="form-control" id="filterName" name="filterName">
                    </div>
                    <div class="form-group">
                        <label for="filterEmail">Filter by Email</label>
                        <input type="email" class="form-control" id="filterEmail" name="filterEmail">
                    </div>
                    <div class="form-group">
                        <label for="filterPhone">Filter by Phone</label>
                        <input type="text" class="form-control" id="filterPhone" name="filterPhone">
                    </div>
                    <div class="form-group">
                        <label for="filterRole">Filter by Role</label>
                        <input type="text" class="form-control" id="filterRole" name="filterRole">
                    </div>
                    <button type="submit" class="btn btn-primary">Apply Filters</button>
                </form>
            </div>
        </div>
    </div>
</div>
