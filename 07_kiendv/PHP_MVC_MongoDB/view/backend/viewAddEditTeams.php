<div class="page-title">
  <div class="title_left">
    <h3>Add or Edit Users</h3>
  </div>
</div>
<div class="clearfix"></div>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <form class="form-horizontal form-label-left" action="<?php echo $form_action ?>" method="POST" enctype="multipart/form-data">
          <span class="section">Personal Info</span>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="name" value="<?php echo isset($data[0]->name) ? $data[0]->name : ''?>" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" required="required" type="text">
            </div>
          </div>
          <div class="item form-group">
            <label for="image" class="control-label col-md-3">Logo</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="image" type="file" value="<?php echo isset($data[0]->logo) ? $data[0]->logo : ''?>" name="image" data-validate-length="6,8" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Description <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <textarea id="description" name="description" required="required" class="form-control col-md-7 col-xs-12"><?php echo isset($data[0]->description) ? $data[0]->description : ''?></textarea>
            </div>
          </div>
          <div class="item form-group">
            <label for="leader_id" class="control-label col-md-3">Leader</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select name="leader_id" class="form-control">
            <?php foreach ($arr as $row) {
              # code...
            ?>
              <option <?php echo isset($data[0]->leader_id) && $data[0]->leader_id == $row->_id ? "selected" : "" ; ?> value="<?php echo $row->_id ?>"><?php echo $row->name ?></option>
            <?php } ?>
            </select>
            </div>
          </div>
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
              <button type="submit" class="btn btn-primary">Cancel</button>
              <button id="send" type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
