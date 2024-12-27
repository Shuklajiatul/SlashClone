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
