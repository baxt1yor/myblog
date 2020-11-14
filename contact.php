
<?php include 'layouts/headr.php'?>


 <form class="form-horizontal" method="POST" action="app/xabar_saqlash.php" >
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email: <i class="glyphicon glyphicon-envelope"></i></label>
    <div class="col-sm-10">
      <input type="email" name="email" required class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Xabar <i class="glyphicon glyphicon-comment"></i></label>
    <div class="col-sm-10">
     <textarea type="text" required name="xabar" class="form-control" placeholder="Xabarni kiriting"></textarea>
    </div>
  </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Yuborish <i class="glyphicon glyphicon-send"></i></button>
    </div>
  </div>
</form


