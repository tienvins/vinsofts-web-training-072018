<div class="">

     

            <div class="page-title">
              <div class="title_left">
                <h3>Thông tin nhân viên</h3>
              </div>

              
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Design <small>different form elements</small></h2>
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
                    <br />
<?php print_r($rUser); ?>
                    <?php foreach ($rUser as $v) {
                      # code...
                    } ?>
                    <form method="POST" data-parsley-validate class="form-horizontal form-label-left">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tên <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" required="required" name="txtName" class="form-control col-md-7 col-xs-12" value="<?php echo $v[1]; ?>">
                        </div>
                      </div> 

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="txtEmail"required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $v[2]; ?>">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Mật khẩu <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="txtPassword" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $v[4]; ?>">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> Ảnh đại diện<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" name="image" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $v[6]; ?>">
                        </div>
                      </div>
                      
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Giới tính</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                           
                              <input <?php if($v[7]==0){ ?> checked <?php } ?> type="radio" name="rdGender" value="0"> &nbsp; Male &nbsp;
                            
                            
                              <input <?php if($v[7]==1){ ?> checked <?php } ?> type="radio" name="rdGender" value="1"> Female
                            
                          </div>
                        </div>
                      </div>
              
                     
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ngày sinh <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="txtDate" class="date-picker form-control col-md-7 col-xs-12" required="required" type="date" value="<?php echo $v[8]; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Số CMT <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="txtIdentify" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $v[9]; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Sở thích <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="txtHobbie" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $v[16]; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Quyền hạn <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="txtRole" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $v[20]; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Phòng ban <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="txtTeam" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $v[21]; ?>">
                        </div>
                      </div>
                      


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="?controller=home&action=index" class="btn btn-primary" type="button">Cancel</a>
                          <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" name="btnEdit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                   



                  </div>
                </div>
              </div>
            </div>
        </div>