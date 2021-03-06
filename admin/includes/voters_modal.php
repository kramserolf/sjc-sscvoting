<!-- Add -->
<div class="modal fade" id="addnew">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Add New Voter</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="voters_add.php" enctype="multipart/form-data">
          <div class="form-group">
            <label for="votersid" class="col-sm-3 control-label">Voters ID</label>

            <div class="col-sm-9">
              <input type="votersid" class="form-control" id="votersid" name="votersid" required>
            </div>
          </div>
          <div class="form-group">
            <label for="fullname" class="col-sm-3 control-label">Name</label>

            <div class="col-sm-9">
              <input type="text" class="form-control" id="fullname" name="fullname" required>
            </div>
          </div>
          <div class="form-group">
            <label for="course" class="col-sm-3 control-label">Course</label>

            <div class="col-sm-9">
              <input type="text" class="form-control" id="course" name="course" required>
            </div>
          </div>
          <div class="form-group">
            <label for="year" class="col-sm-3 control-label">Year</label>

            <div class="col-sm-9">
              <input type="text" class="form-control" id="year" name="year" required>
            </div>
          </div>
          <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Password</label>

            <div class="col-sm-9">
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
            class="fa fa-close"></i> Close</button>
        <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Edit Voter</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="voters_edit.php">
          <input type="hidden" class="id" name="id">
          <div class="form-group">
            <label for="edit_fullname" class="col-sm-3 control-label">Name</label>

            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_fullname" name="fullname">
            </div>
          </div>
          <div class="form-group">
            <label for="edit_course" class="col-sm-3 control-label">Course</label>

            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_course" name="course">
            </div>
          </div>
          <div class="form-group">
            <label for="edit_year" class="col-sm-3 control-label">Year</label>

            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_year" name="year">
            </div>
          </div>
          <div class="form-group">
            <label for="edit_voted" class="col-sm-3 control-label">Voted</label>

            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_voted" name="voted">
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
            class="fa fa-close"></i> Close</button>
        <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i>
          Update</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Deleting...</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="voters_delete.php">
          <input type="hidden" class="id" name="id">
          <div class="text-center">
            <p>DELETE VOTER</p>
            <h2 class="bold fullname"></h2>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
            class="fa fa-close"></i> Close</button>
        <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>