  <div class="col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Form Validation</h3>
        </div>
      </div>
      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            
            <div class="x_content">

              <form method="post" enctype="multipart/form-data" action="<?php echo $form_action; ?>" class="form-horizontal form-label-left">
                </p>
                <span class="section">Personal Info</span>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name<span style="color: red;">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input class="form-control col-md-7 col-xs-12" name="name" required="required" value="<?php echo isset($arr->name) ? $arr->name : "";?>" type="text">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span style="color: red;">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="email" name="email" value="<?php echo isset($arr->email) ? $arr->email : "";?>" required class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Email Personal <span style="color: red;">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="email" name="email_personal" value="<?php echo isset($arr->email_personal) ? $arr->email_personal : "";?>" required class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" >Password<span style="color: red;">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="password" name="password" data-validate-linked="email" <?php if(isset($arr->email)) { ?> placeholder="Nhập vào password mới nếu muốn đổi password" <?php }else { ?> required <?php } ?>  class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Remenber Token
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="number" name="remember_token" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender<span style="color: red;">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <!-- <input type="text" name="gender" value="<?php echo isset($arr->gender) ? $arr->gender : "";?>" required class="form-control col-md-7 col-xs-12"> -->
                    <input type="radio" name="gender" value="0">Male
                    <input type="radio" name="gender" value="1">Female
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Date of Birth<span style="color: red;">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="date" type="date" name="date_of_birth" class="optional form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3">Identify_id</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="password" type="text" name="identify_id" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Phone_number<span style="color: red;">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="tel" name="phone_number" value="<?php echo isset($arr->phone_number) ? $arr->phone_number : "";?>" class="form-control col-md-7 col-xs-12" required>
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Current_address
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="tel" name="current_address"  class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Permanent_address 
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea id="textarea" name="permanent_address" class="form-control col-md-7 col-xs-12"></textarea>
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Graduate_from <span style="color: red;">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="textarea" name="graduate_from" value="<?php echo isset($arr->graduate_from) ? $arr->graduate_from : "";?>" required class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Salary<span style="color: red;">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="salary" value="<?php echo isset($arr->salary) ? $arr->salary : "";?>" class="form-control col-md-7 col-xs-12" required>
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Bank_account_number
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea id="textarea" name="bank_account_number" class="form-control col-md-7 col-xs-12"></textarea>
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Hobby
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea id="textarea" name="hobby" class="form-control col-md-7 col-xs-12"></textarea>
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Family_description
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea id="textarea" name="family_description" class="form-control col-md-7 col-xs-12"></textarea>
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Languege skill
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea id="textarea" name="language_skills" class="form-control col-md-7 col-xs-12"></textarea>
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Leave_day <span style="color: red;">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="leave_days" value="<?php echo isset($arr->leave_days) ? $arr->leave_days : "";?>" required class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Role_id <span style="color: red;">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="role_id" value="<?php echo isset($arr->role_id) ? $arr->role_id : "";?>" required class="form-control col-md-7 col-xs-12">     </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Team_id<span style="color: red;">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select name="team_id" class="form-control">
                      <?php  
                        // $category = $this->model->get_all("select * from tbl_teams order by pk_team_id asc");
                        $category = $this->model->table(teams)->find();
                        foreach($category as $rows)
                        {
                        ?>
                        <option <?php if(isset($arr->team_id)&&$arr->team_id==$rows->_id) { ?> selected <?php } ?> value="<?php echo $rows->_id; ?>"> <?php echo $rows->name; ?>
                        </option>
                      <?php } ?>
                    </select>
                    <!-- <input required name="team_id" value="<?php echo isset($arr->team_id) ? $arr->team_id : "";?>" type="text" class="form-control col-md-7 col-xs-12"> -->
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Status <span style="color: red;">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input required name="status" type="text" value="<?php echo isset($arr->status) ? $arr->status : "";?>" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Image<span style="color: red;">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="file" name="img">
                  </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-6 col-md-offset-3">
                    <button type="reset" class="btn btn-primary">Cancel</button>
                    <button id="send" type="submit" class="btn btn-success">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>