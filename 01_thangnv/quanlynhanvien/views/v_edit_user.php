<div class="col-md-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Update User <?php echo $tb ?></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Setstings 2</a>
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
            <form class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                        <input name="id" type="number"<?php echo $action=="edit" ? 'readonly="readonly"':"" ?> class="form-control" placeholder="ID" value="<?php echo $user->id ?>">
                    </div>

                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                        <input name="name" type="text" class="form-control" placeholder="Name" value="<?php echo $user->name ?>">
                    </div>

                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                        <input name="email" type="email" class="form-control" placeholder="Email" value="<?php echo $user->email ?>">
                    </div>

                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                        <input name="email_personal" type="email" class="form-control" placeholder="Email Personal" value="<?php echo $user->email_personal ?>">
                    </div>

                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                        <input name="password" type="password" class="form-control" placeholder="Password" value="<?php echo $user->password ?>">
                    </div>

                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                        <input name="image" type="file" class="form-control" placeholder="Image" value="<?php echo $user->image ?>">
                    </div>

                    <div class="form-group col-md-4 col-sm-6 col-xs-12 text-center">
                        <p></p>
                        <input type="radio" class="flat" name="gender" id="genderM" value="1" checked="" required /> Male 
                        <input type="radio" class="flat" name="gender" id="genderF" value="0" <?php echo ($user->gender=="0"?'checked=""':""); ?>  />Female</p>
                    </div>

                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                        <input name="date_of_birth" type="date" class="form-control" placeholder="Date Of Birth" value="<?php echo $user->date_of_birth ?>">
                    </div>

                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                        <input name="identify_id" type="number" class="form-control" placeholder="Indentity ID" value="<?php echo $user->identify_id ?>">
                    </div>

                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                        <input name="phone_number" type="number" class="form-control" placeholder="Phone Number" value="<?php echo $user->phone_number ?>">
                    </div>

                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                        <input name="current_address" type="text" class="form-control" placeholder="Current Address" value="<?php echo $user->current_address ?>">
                    </div>

                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                        <input name="permanent_address" type="text" class="form-control" placeholder="Permanent Address" value="<?php echo $user->permanent_address ?>">
                    </div>

                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                        <input name="graduate_from" type="text" class="form-control" placeholder="Graduate From" value="<?php echo $user->graduate_from ?>">
                    </div>

                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                        <input name="salary" type="number" class="form-control" placeholder="Salary" value="<?php echo $user->salary ?>">
                    </div>

                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                    <input name="bank_account_number" type="number" class="form-control"  placeholder="Bank Account Number" value="<?php echo $user->bank_account_number ?>">
                    </div>

                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                        <input name="hobby" type="text" class="form-control" placeholder="Hobby" value="<?php echo $user->hobby ?>">
                    </div>

                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                        <input name="family_description" type="text" class="form-control" placeholder="Family Description" value="<?php echo $user->family_description ?>">
                    </div>

                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                        <input name="language_skills" type="text" class="form-control" placeholder="Language Skills" value="<?php echo $user->language_skills ?>">
                    </div>

                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                        <input name="leave_days" type="number" class="form-control" placeholder="Leave Day" value="<?php echo $user->leave_days ?>">
                    </div>

                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                        <input name="role_id" type="number" class="form-control" placeholder="Role ID" value="<?php echo $user->role_id ?>">
                    </div>
                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                        <select class="form-control" name="team_id" value="<?php echo $user->team_id ?>">
                            <option value ="0">Choose Team ID</option>
                            <?php
                                foreach($list_id_team as $id){
                            ?>
                            <option value="<?php echo $id->id ?>"><?php echo $id->id ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                        <input name="status" type="number" class="form-control" placeholder="Status" value="<?php echo $user->status ?>">
                    </div>

                    
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <button type="submit" class="btn btn-success"><?php echo $action=="edit" ? 'Update':'Add' ?></button>
                        <button type="reset" class="btn btn-primary">Reset</button>
                        <a href="index.php?controller=c_users"><button type="button" class="btn btn-danger">Cancel</button></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>