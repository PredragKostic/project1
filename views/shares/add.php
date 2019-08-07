<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Share Something</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
      <div class="form-group">
        <label for="">Share Title</label>
        <textarea type="text" name="title" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <label for="">Body</label>
        <textarea type="text" name="body" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <label for="">Link</label>
        <input type="text" name="link" class="form-control">
      </div>
      <input class="btn btn-primary" name="submit" type="submit" value="Submit">
      <a href="<?php echo ROOT_PATH; ?>shares" class="btn btn-danger">Cancel</a>
    </form>
  </div>
</div>