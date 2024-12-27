<?= view('layouts/header') ?>

<body class="bg-light">
    <div class="container mt-5 d-flex justify-content-center">
        <div class="card shadow" style="width: 500px;">
            <div class="card-body">
                <h2 class="text-center mb-4">Add User</h2>
                <form action="/users/store" method="POST">
                    <?= csrf_field() ?>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" name="phone" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select name="role" class="form-select" required>
                            <option value="Admin">Admin</option>
                            <option value="Supervisor">Supervisor</option>
                            <option value="Team Leader">Team Leader</option>
                            <option value="Agent">Agent</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="dob" class="form-label">D.O.B</label>
                        <input type="date" name="dob" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Save</button>
                </form>
                <div class="text-center mt-3">
                    <a href="/users" class="btn btn-secondary w-100">Back</a>
                </div>
            </div>
        </div>
    </div>

<?= view('layouts/footer') ?>