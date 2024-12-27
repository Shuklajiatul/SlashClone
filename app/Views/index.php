<?= $this->include('layouts/header') ?>

<!-- Filters Section -->
<div class="d-flex flex-column border-top bg-light">
    
    <div class="d-flex justify-content-center align-items-center">
        <div class="d-flex flex-grow-1 justify-content-end mx-5">
            <select class="form-select me-2 rounded-pill" id="campaigns" style="width: 150px; height: 35px;">
                <option selected>All Campaigns</option>
                <option value="1">Campaign 1</option>
                <option value="2">Campaign 2</option>
                <option value="3">Campaign 3</option>
            </select>
            <select class="form-select me-2 rounded-pill" id="processes" style="width: 150px; height: 35px;">
                <option selected>All Processes</option>
                <option value="1">Process 1</option>
                <option value="2">Process 2</option>
                <option value="3">Process 3</option>
            </select>
            <div class="input-group" style="width: 300px;">
                <input type="date" class="form-control rounded-pill" id="startDate" style="height: 35px;">
                <input type="date" class="form-control rounded-pill" id="endDate" style="height: 35px;">
            </div>
            <button class="btn btn-white mx-2 rounded-pill border border-dark" style="height: 35px;">Go</button>
            <button class="btn btn-white rounded-pill border border-dark" style="height: 35px;"><i class="fa-solid fa-download"></i></button>
        </div>
    </div>
</div>


<div class="container mb-3 mt-3 bg-light">
    <div class="d-flex flex-wrap align-items-center mx-auto" style="width: 100%; max-width: 80rem;">
        <div class="card mt-3 shadow" style="width: 25rem; margin-left: auto; margin-right: auto;">
            <div class="p-3">
                <div class="d-flex flex-row justify-content-between align-items-center">
                    <p class="fw-bold" style="font-size: 20px;">9</p>
                    <i class="fa-solid fa-user text-secondary" style="font-size: 22px;"></i>
                </div>
                <div class="">
                    <h6 class="card-title text-secondary">Logged in Agents</h6>
                    <div class="progress" role="progressbar" style="height: 5px;" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-success" style="width: 25%;"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-3 shadow" style="width: 25rem; margin-left: auto; margin-right: auto;">
            <div class="p-3">
                <div class="d-flex flex-row justify-content-between align-items-center">
                    <p class="fw-bold" style="font-size: 20px;">9</p>
                    <i class="fa-solid fa-phone text-secondary" style="font-size: 22px;"></i>
                </div>
                <div class="">
                    <h6 class="card-title text-secondary">Total Missed Calls</h6>
                    <div class="progress" role="progressbar" style="height: 5px;" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-primary" style="width: 25%;"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-3 shadow" style="width: 25rem; margin-left: auto; margin-right: auto;">
            <div class="p-3">
                <div class="d-flex flex-row justify-content-between align-items-center">
                    <p class="fw-bold" style="font-size: 20px;">10</p>
                    <i class="fa-solid fa-phone text-secondary" style="font-size: 22px;"></i>
                </div>
                <div class="">
                    <h6 class="card-title text-secondary">Calls Handled By Agent</h6>
                    <div class="progress" role="progressbar" style="height: 5px;" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-warning" style="width: 25%;"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-3 shadow" style="width: 25rem; margin-left: auto; margin-right: auto;">
            <div class="p-3">
                <div class="d-flex flex-row justify-content-between align-items-center">
                    <p class="fw-bold" style="font-size: 20px;">17</p>
                    <i class="fa-solid fa-phone text-secondary" style="font-size: 22px;"></i>
                </div>
                <div class="">
                    <h6 class="card-title text-secondary">Average Handling Time</h6>
                    <div class="progress" role="progressbar" style="height: 5px;" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-danger" style="width: 25%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
