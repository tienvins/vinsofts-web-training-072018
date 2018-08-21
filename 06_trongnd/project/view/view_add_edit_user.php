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
                    <input class="form-control col-md-7 col-xs-12" name="c_name" required="required" value="<?php echo isset($arr->c_name) ? $arr->c_name : "";?>" type="text">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span style="color: red;">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="email" name="c_email" value="<?php echo isset($arr->c_email) ? $arr->c_email : "";?>" required class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Email Personal <span style="color: red;">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="email" name="c_email_personal" value="<?php echo isset($arr->c_email_personal) ? $arr->c_email_personal : "";?>" required class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" >Password<span style="color: red;">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="password" id="email2" name="c_password" data-validate-linked="email" required="required"  class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Remenber Token
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="number" name="c_remember_token" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender<span style="color: red;">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="c_gender" value="<?php echo isset($arr->c_gender) ? $arr->c_gender : "";?>" required class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Date of Birth<span style="color: red;">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="date" type="date" name="c_date_of_birth" class="optional form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3">Identify_id</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="password" type="text" name="c_identify_id" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Phone_number<span style="color: red;">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="tel" name="c_phone_number" value="<?php echo isset($arr->c_phone_number) ? $arr->c_phone_number : "";?>" class="form-control col-md-7 col-xs-12" required>
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Current_address
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="tel" name="c_current_address"  class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Permanent_address 
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea id="textarea" name="c_permanent_address" class="form-control col-md-7 col-xs-12"></textarea>
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Graduate_from <span style="color: red;">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="textarea" name="c_graduate_from" value="<?php echo isset($arr->c_graduate_from) ? $arr->c_graduate_from : "";?>" required class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Salary<span style="color: red;">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="c_salary" value="<?php echo isset($arr->c_salary) ? $arr->c_salary : "";?>" class="form-control col-md-7 col-xs-12" required>
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
                    <textarea id="textarea" name="c_hobby" class="form-control col-md-7 col-xs-12"></textarea>
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Family_description
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea id="textarea" name="c_family_description" class="form-control col-md-7 col-xs-12"></textarea>
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Languege skill
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea id="textarea" name="c_language_skills" class="form-control col-md-7 col-xs-12"></textarea>
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Leave_day <span style="color: red;">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="c_leave_days" value="<?php echo isset($arr->c_leave_days) ? $arr->c_leave_days : "";?>" required class="form-control col-md-7 col-xs-12">
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
                        $category = $this->model->get_all("select * from tbl_teams order by pk_team_id asc");
                        foreach($category as $rows)
                        {
                        ?>
                        <option <?php if(isset($arr->team_id)&&$arr->team_id==$rows->pk_team_id) { ?> selected <?php } ?> value="<?php echo $rows->pk_team_id; ?>"> <?php echo $rows->c_name; ?>
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
                    <input required name="c_status" type="text" value="<?php echo isset($arr->c_status) ? $arr->c_status : "";?>" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Image<span style="color: red;">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="file" name="c_img">
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