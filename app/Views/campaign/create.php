<?php include(APPPATH . 'Views/layouts/header.php'); ?>
<body class="bg-light">
    <div class="container mt-5 d-flex justify-content-center">
        <div class="card shadow" style="width: 500px;">
            <div class="card-body">
                <h1 class="text-center mb-4">Add Campaign</h1>
                <form action="<?= base_url('campaigns/store') ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="mb-3">
                        <label for="campaign_name" class="form-label">Campaign Name:</label>
                        <input type="text" id="campaign_name" name="campaign_name" required class="form-control">
                    </div>
                    
                    <div class="mb-3">
                        <label for="process" class="form-label">Process:</label>
                        <textarea id="process" name="process" required class="form-control"></textarea>
                    </div>
                    
                    <div class="mb-3">
                        <label for="active" class="form-label">Active:</label>
                        <select id="active" name="active" class="form-select">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="start_date" class="form-label">Start Date:</label>
                        <input type="datetime-local" id="start_date" name="start_date" required class="form-control">
                    </div>
                    
                    <div class="mb-3">
                        <label for="end_date" class="form-label">End Date:</label>
                        <input type="datetime-local" id="end_date" name="end_date" required class="form-control">
                    </div>
                    
                    <button type="submit" class="btn btn-primary w-100">Add Campaign</button>
                </form>
                <div class="text-center mt-3">
                    <a href="<?= base_url('campaigns') ?>" class="btn btn-secondary w-100">Back to Campaigns</a>
                </div>
            </div>
        </div>
    </div>
<?php include(APPPATH . 'Views/layouts/footer.php'); ?>