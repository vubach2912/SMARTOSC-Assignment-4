<!-- Modal delete student -->
<form method="post" action="">
<div id="modal-delete-student" class="modal fade" role="dialog">
  <div class="modal-dialog" style="width: 250px;">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Alert</h4>
      </div>

      <div class="modal-body">
        <p>Do you want to delete?</p>
        <input type="hidden" name="id" id="id_delete">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default" name="btnYes_delete">Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
      </div>
    </div>

  </div>
</div>
</form>