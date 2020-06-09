<div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <form id="wew" action="edit1cms.php" method="POST">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title" id="myModalLabel">Add Page</h4>
  </div>
  <div class="modal-body">
    <div class="form-group">
      <label>Page Title</label>
      <input type="text" class="form-control" placeholder="Page Title" name="title" id="title">
    </div>
    <div class="form-group">
      <label>Page Body</label>
      <textarea id="bodyModal" name="bodyModal" class="form-control" placeholder="Page Body"></textarea>
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox" id="checkbox" name="checkbox"> Published
      </label>
    </div>
    <div class="form-group">
      <label>Meta Tags</label>
      <input type="text" class="form-control" placeholder="Add Some Tags..." name="tags" id="tags">
    </div>
    <div class="form-group">
      <label>Meta Description</label>
      <input type="text" class="form-control" placeholder="Add Meta Description..." id="description" name="description">
    </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="submit" name="wew" id="wew" class="btn btn-primary">Save changes</button>
  </div>
</form>
</div>
</div>
</div>
