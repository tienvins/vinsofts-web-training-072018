<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Users <a href="index.php?controller=c_edit_user&action=add"><i class="fa fa-plus-circle"></i></a></h2>
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
            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap table-hover" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Email Personal</th>
              <th>Password</th>
              <th>Remenber Token</th>
              <th>Image</th>
              <th>Gender</th>
              <th>Date Of Birth</th>
              <th>Identify ID</th>
              <th>Phone Number</th>
              <th>Curent Address</th>
              <th>Permanent Address</th>
              <th>Graduate From</th>
              <th>Salary</th>
              <th>Bank Account Skills</th>
              <th>Hobby</th>
              <th>Family Description</th>
              <th>Leave Days</th>
              <th>Role ID</th>
              <th>Team-ID</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach ($users as $user){ ?>
            <tr>
              <td><?php echo $user->id ?></td>
              <td><?php echo $user->name ?></td>
              <td><?php echo $user->email ?></td>
              <td><?php echo $user->email_personal ?></td>
              <td><?php echo $user->password ?></td>
              <td><?php echo $user->remember_token ?></td>
              <td><?php echo $user->image ?></td>
              <td><?php echo $user->gender ?></td>
              <td><?php echo $user->date_of_birth ?></td>
              <td><?php echo $user->identify_id ?></td>
              <td><?php echo $user->phone_number ?></td>
              <td><?php echo $user->current_address ?></td>
              <td><?php echo $user->permanent_address ?></td>
              <td><?php echo $user->graduate_from ?></td>
              <td><?php echo $user->salary ?></td>
              <td><?php echo $user->bank_account_number ?></td>
              <td><?php echo $user->family_description ?></td>
              <td><?php echo $user->language_skills ?></td>
              <td><?php echo $user->leave_days ?></td>
              <td><?php echo $user->role_id ?></td>
              <td><?php echo $user->team_id ?></td>
              <td><?php echo $user->status ?></td>
            </tr>
          <?php } ?>
          </tbody>
          </table>
        </div>
    </div>
</div>