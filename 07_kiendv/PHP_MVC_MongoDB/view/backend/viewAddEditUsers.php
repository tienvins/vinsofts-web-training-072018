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
              <input id="name" value="<?php echo isset($data[0]->name) ? $data[0]->name : ''?>" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="both name(s) e.g Jon Doe" required="required" type="text">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="email" id="email" value="<?php echo isset($data[0]->email) ? $data[0]->email : ''?>" name="email" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email_personal">Email Personal<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="email" id="email_personal" value="<?php echo isset($data[0]->email_personal) ? $data[0]->email_personal : ''?>" name="email_personal" data-validate-linked="email_personal" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="item form-group">
            <label for="password" class="control-label col-md-3">Password<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="password" type="password" value="<?php echo isset($data[0]->password) ? $data[0]->password : ''?>" name="password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
            </div>
          </div>
          <div class="item form-group">
            <label for="image" class="control-label col-md-3">Image</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="image" type="file" value="<?php echo isset($data[0]->image) ? $data[0]->image : ''?>" name="image" data-validate-length="6,8" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="item form-group">
            <label for="gender" class="control-label col-md-3">Gender</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select name="gender" class="form-control">
                <option value="1">Nam</option>
                <option value="2">Nữ</option>
                <option value="3">Khác</option>
              </select>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="date_of_birth">Date of birth <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="date" id="date_of_birth" value="<?php echo isset($data[0]->date_of_birth) ? $data[0]->date_of_birth : ''?>" name="date_of_birth" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="identify_id">Identify ID <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="number" id="identify_id" value="<?php echo isset($data[0]->identify_id) ? $data[0]->identify_id : ''?>" name="identify_id" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone_number">Phone number <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="number" id="phone_number" value="<?php echo isset($data[0]->phone_number) ? $data[0]->phone_number : ''?>" name="phone_number" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="current_address">Current address<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="current_address" value="<?php echo isset($data[0]->current_address) ? $data[0]->current_address : ''?>" name="current_address" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="permanent_address">Permanent address <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="permanent_address" type="text" value="<?php echo isset($data[0]->permanent_address) ? $data[0]->permanent_address : ''?>" name="permanent_address" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
            </div>
          </div>
          
          <div class="item form-group">
            <label for="graduate_from" class="control-label col-md-3 col-sm-3 col-xs-12">Graduate from</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="graduate_from" type="text" value="<?php echo isset($data[0]->graduate_from) ? $data[0]->graduate_from : ''?>" name="graduate_from" class="form-control col-md-7 col-xs-12" required="required">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="salary">Salary <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="number" id="salary" value="<?php echo isset($data[0]->salary) ? $data[0]->salary : ''?>" name="salary" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bank_account_number">Bank account number <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="bank_account_number" value="<?php echo isset($data[0]->bank_account_number) ? $data[0]->bank_account_number : ''?>" required="required" name="bank_account_number" class="form-control col-md-7 col-xs-12"></input>
            </div>
          </div>
           <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hobby">Hobby <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="hobby" value="<?php echo isset($data[0]->hobby) ? $data[0]->hobby : ''?>" name="hobby" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="family_description">Family description <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="family_description" value="<?php echo isset($data[0]->family_description) ? $data[0]->family_description : ''?>" name="family_description" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="language_skills">Language skills <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="language_skills" value="<?php echo isset($data[0]->language_skills) ? $data[0]->language_skills : ''?>" name="language_skills" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="leave_days">Leave days <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="leave_days" value="<?php echo isset($data[0]->leave_days) ? $data[0]->leave_days : ''?>" name="leave_days" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="role_id">Role<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="number" id="role_id" value="<?php echo isset($data[0]->role_id) ? $data[0]->role_id : ''?>" name="role_id" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="item form-group">
            <label for="gender" class="control-label col-md-3">Team</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select name="team_id" class="form-control">
            <?php foreach ($listteam as $row) {
              # code...
            ?>
              <option <?php echo isset($data[0]->team_id) && $data[0]->team_id == $row->_id ? "selected" : "" ; ?> value="<?php echo $row->_id ?>"><?php echo $row->name ?></option>
            <?php } ?>
            </select>
            </div>
          </div>
          <div class="item form-group">
            <label for="status" class="control-label col-md-3">Status</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select name="status" class="form-control">
                  <option value="1">Đang làm việc</option>
                  <option value="0">Đã nghỉ việc</option>
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
