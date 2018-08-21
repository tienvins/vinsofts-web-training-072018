<div class="page-title">
  <div class="title_left">
    <h3>Users</h3>
  </div>
</div>
<div class="clearfix"></div>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2><small>Users List</small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up fa-2x"></i></a>
          </li>
          <li><a href="admin.php?controller=AddEditUsers&action=add"><i class="fa fa-plus fa-2x"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <table id="datatable" class="table table-striped table-bordered">
          <thead>
            <tr class="text-center">
              <th>Name</th>
              <th>Email</th>
              <th>Email Personal</th>
              <th>Password</th>
              <th>Team</th>
              <th>Image</th>
              <th>Gender</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data as $row  ) {
            ?>
              <tr>
                <td><?php echo $row->name ?></td>
                <td><?php echo $row->email ?></td>
                <td><?php echo $row->email_personal ?></td>
                <td><?php echo $row->password ?></td>
                <td>
                  <?php
                    $team_id = $row->team_id;
                    $listteam = $this->model->fetch_one("select * from teams where id = $team_id");
                    echo isset($listteam->name) ? $listteam->name : "";
                  ?>
                  </td>
                <td>
                  <?php if ($row->image != "" && file_exists("$row->image")) {
                   ?>
                    <img src="<?php echo $row->image ?>" alt="" style="width: 80px;">
                   <?php } ?>
                </td>
                <td>
                  <?php 
                    if($row->gender==1)
                      echo "Nam";
                    elseif($row->gender==2)
                      echo "Nữ";
                    else
                      echo "Khác";
                  ?> 
                </td>
                <td class="text-center">
                  <a class="showmore" data-toggle="modal" data-target="#<?php echo $row->id ?>"><span><i class="fas fa-search-plus fa-2x"></i></span></a>&nbsp;
                  <a href="admin.php?controller=AddEditUsers&action=edit&id=<?php echo $row->id ?>"><span><i class="fas fa-edit fa-2x"></i></span></a>&nbsp;
                  <a href="admin.php?controller=Users&action=delete&id=<?php echo $row->id ?>"><span><i class="fas fa-trash-alt fa-2x"></i></span></a>
                </td>
              </tr>
              <!-- Modal -->
              
            <?php } ?>
          </tbody>
        </table>
        <?php foreach ($data as $row) {
          # code...
        ?>
        <div class="modal fade" id="<?php echo $row->id ?>" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
              </div>
              <div class="modal-body">
                <table id="datatable" class="table table-striped table-bordered">
                  <tbody>
                    <thead>
                          <h2>Họ và tên: <?php echo $row->name ?><br>
                          Mã nhân viên: <?php echo $row->id ?></h2>
                    </thead>
                    <tr>
                      <th>Date of birth</th><td><?php echo $row->date_of_birth ?></td>
                    </tr>
                    <tr>
                      <th>Identify</th><td><?php echo $row->identify_id ?></td>
                    </tr>
                    <tr>
                      <th>Phone number</th><td><?php echo $row->phone_number ?></td>
                    </tr>
                    <tr>
                      <th>Current address</th><td><?php echo $row->current_address ?></td>
                    </tr>
                    <tr>
                      <th>Permanent address</th><td><?php echo $row->permanent_address ?></td>
                    </tr>
                    <tr>
                      <th>Graduate from</th><td><?php echo $row->graduate_from ?></td>
                    </tr>
                    <tr>
                      <th>Salary</th><td><?php echo $row->salary ?></td>
                    </tr>
                    <tr>
                      <th>Bank account number</th><td><?php echo $row->bank_account_number ?></td>
                    </tr>
                    <tr>
                      <th>Hobby</th><td><?php echo $row->hobby ?></td>
                    </tr>
                    <tr>
                      <th>Family description</th><td><?php echo $row->family_description ?></td>
                    </tr>
                    <tr>
                      <th>Language skills</th><td><?php echo $row->language_skills ?></td>
                    </tr>
                    <tr>
                      <th>Leave days</th><td><?php echo $row->leave_days ?></td>
                    </tr>
                    <tr>
                      <th>Role</th><td><?php echo $row->role_id ?></td>
                    </tr>
                    <tr>
                      <th>Team </th><td><?php echo $row->team_id ?></td>
                    </tr>
                    <tr>
                      <th>Status</th><td><?php echo $row->status ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  $.ajax({
    url:"http://localhost/vinsofts/07_kiendv/PHP_MVC/APIs/api/teamsApi.php/delete",
    type :"get",
    data : {id :5},
    success :function(data){

    },
    error :function (error) {
      // body...
    }
  })
</script>
