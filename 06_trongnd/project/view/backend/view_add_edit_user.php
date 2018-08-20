
              <div class="title_right">
               
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>ADD EDIT</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form class="form-horizontal form-label-left" method="post" action="<?php echo $form_action;?>" enctype="multipart/form-data">

                      <span class="section">Thông tin nhân viên</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name" >Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="Nhap ten" required="required" type="text" value="<?php echo isset($arr["name"])?$arr["name"]:"";?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" name="email" required="required" placeholder="nhap email" class="form-control col-md-7 col-xs-12" value="<?php echo isset($arr["email"])?$arr["email"]:"";?>" >
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email_Personal <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email2" placeholder="Nhap email ca nhan" name="email_personal" data-validate-linked="email" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo isset($arr["email_personal"])?$arr["email_personal"]:"";?>" >
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gender">gender<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="gender" placeholder="Nhap gender ca nhan" name="gender" data-validate-linked="gender" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo isset($arr["gender"])?$arr["gender"]:"";?>" >
                        </div>
                      </div>
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name" >image<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" name="image" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">date_of_birth <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="occupation" type="date" name="date_of_birth" data-validate-length-range="5,20" placeholder="nhap ngay sinh" class="optional form-control col-md-7 col-xs-12" value="<?php echo isset($arr["date_of_birth"])?$arr["date_of_birth"]:"";?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="password" class="control-label col-md-3">Password</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password" type="password" name="password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required" >
                        </div>
                      </div>
                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name" >remember_token <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="remember_token" placeholder="nhap remember_token" required="required" type="text" value="<?php echo isset($arr["remember_token"])?$arr["remember_token"]:"";?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label  class="control-label col-md-3 col-sm-3 col-xs-12">identify_id</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="identify_id"  name="identify_id"  placeholder=" nhap so chung minh thu" class="form-control col-md-7 col-xs-12" required="required" value="<?php echo isset($arr["identify_id"])?$arr["identify_id"]:"";?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">phone_number <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="tel" id="telephone" name="phone_number" placeholder="nhap so dien thoai" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12" value="<?php echo isset($arr["phone_number"])?$arr["phone_number"]:"";?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">current_address <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" placeholder="nhap current_address" id="current_address" name="current_address" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12" value="<?php echo isset($arr["current_address"])?$arr["current_address"]:"";?>">
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >bank_account_number <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" name="bank_account_number" placeholder="Nhap so tai khoan" required="required" type="text" value="<?php echo isset($arr["bank_account_number"])?$arr["bank_account_number"]:"";?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Hobby <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="hobby" placeholder="Nhap so thich ca nhan" required="required" type="text" value="<?php echo isset($arr["hobby"])?$arr["hobby"]:"";?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">family_description <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="family_description" placeholder="Mo ta gia dinh" required="required" type="text" value="<?php echo isset($arr["family_description"])?$arr["family_description"]:"";?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">language_skills <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="language_skills" placeholder="Ki nang hien co" required="required" type="text" value="<?php echo isset($arr["language_skills"])?$arr["language_skills"]:"";?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">permanent_address <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="permanent_address" class="form-control col-md-7 col-xs-12"  name="permanent_address" placeholder="Ki nang hien co" required="required" type="text" value="<?php echo isset($arr["permanent_address"])?$arr["permanent_address"]:"";?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">graduate_from <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="graduate_from" class="form-control col-md-7 col-xs-12"  name="graduate_from" placeholder="Ki nang hien co" required="required" type="text" value="<?php echo isset($arr["graduate_from"])?$arr["graduate_from"]:"";?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">salary <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="salary" name="salary" required="required" placeholder="nhap luong" class="form-control col-md-7 col-xs-12" value="<?php echo isset($arr["salary"])?$arr["salary"]:"";?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">permanent_address <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="permanent_address" class="form-control col-md-7 col-xs-12"  name="permanent_address" placeholder="Ki nang hien co" required="required" type="text" value="<?php echo isset($arr["permanent_address"])?$arr["permanent_address"]:"";?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Leave_Days <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="number" name="leave_days" required="required" placeholder="nhap so ngay con lai" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12" value="<?php echo isset($arr["leave_days"])?$arr["leave_days"]:"";?>">
                        </div>
                      </div>
                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">role_id <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="tel" id="telephone" name="role_id" required="required" placeholder="Nhap id" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12" value="<?php echo isset($arr["role_id"])?$arr["role_id"]:"";?>">
                        </div>
                      </div>
                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">team_id <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="tel" id="telephone" name="team_id" required="required" placeholder="nhap team id" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12" value="<?php echo isset($arr["team_id"])?$arr["team_id"]:"";?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">status <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="status" placeholder="nhap trang thai" required="required" type="text" value="<?php echo isset($arr["status"])?$arr["status"]:"";?>">
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <input type="submit" value="process" class="btn btn-danger">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        