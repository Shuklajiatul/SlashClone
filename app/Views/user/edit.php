<?= view('layouts/header') ?>

<body class="bg-light">
    <div class="container mt-5 d-flex justify-content-center">
        <div class="card shadow" style="width: 500px;">
            <div class="card-body">
                <h2 class="text-center mb-4">Edit User</h2>
                <form action="/users/update/<?= $user['id'] ?>" method="POST">
                    <?= csrf_field() ?>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" value="<?= $user['name'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="<?= $user['email'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" name="phone" class="form-control" value="<?= $user['phone'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select name="role" class="form-select" required>
                            <option value="admin" <?= $user['role'] == 'Admin' ? 'selected' : '' ?>>Admin</option>
                            <option value="supervisor" <?= $user['role'] == 'Supervisor' ? 'selected' : '' ?>>Supervisor</option>
                            <option value="teamleader" <?= $user['role'] == 'Team Leader' ? 'selected' : '' ?>>Team Leader</option>
                            <option value="agent" <?= $user['role'] == 'Agent' ? 'selected' : '' ?>>Agent</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="dob" class="form-label">D.O.B</label>
                        <input type="date" name="dob" class="form-control" value="<?= $user['dob'] ?>" required>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Update</button>
                </form>
                <div class="text-center mt-3">
                    <a href="/users" class="btn btn-secondary w-100">Back</a>
                </div>
            </div>
        </div>
    </div>

<?= view('layouts/footer') ?>