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

                    <form method="post" enctype="multipart/form-data" action="<?php echo $form_action; ?>" class="form-horizontal form-label-left" novalidate>
                      </p>
                      <span class="section">Personal Info</span>
                      
                      <!-- <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">ID<span style="color: red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input <?php if(isset($arr->pk_team_id)) { ?> disabled <?php } ?> class="form-control col-md-7 col-xs-12" name="pk_team_id" value="<?php echo isset($arr->pk_team_id) ? $arr->pk_team_id : ""; ?>" type="text" required>
                        </div>
                      </div> -->
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tên Phòng Ban<span style="color: red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" name="name" value="<?php echo isset($arr->name) ? $arr->name : "";?>" type="text" required>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Description <span style="color: red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" name="description" value="<?php echo isset($arr->description) ? $arr->description : "";?>" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Leader ID<span style="color: red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="leader_id" class="form-control">
                            <?php  
                              // $category = $this->model->get_all("select * from tbl_user order by pk_user_id asc");
                              $category = $this->model->table(users)->find();
                              foreach($category as $rows)
                              {
                            ?>
                            <option <?php if(isset($arr->leader_id)&&$arr->leader_id==$rows->_id) { ?> selected <?php } ?> value="<?php echo $rows->_id; ?>"> <?php echo $rows->name; ?>
                            </option>
                          <?php } ?>
                          </select>
                          <!-- <input class="form-control col-md-7 col-xs-12" name="leader_id" value="<?php echo isset($arr->leader_id) ? $arr->leader_id : "";?>" type="text" required> -->
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Logo<span style="color: red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" name="logo">
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="reset" class="btn btn-primary">Cancel</button>
                          <input type="submit" class="btn btn-success" value="Submit">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>