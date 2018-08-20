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
              <th>Teams id</th>
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
              <td><?php echo $row->teams_id ?></td>
              <td>a</td>
              <td><?php echo $row->gender ?></td>
              <td class="text-center">
                <a href=""><span><i class="fas fa-search-plus fa-2x"></i></span></a>&nbsp;
                <a href=""><span><i class="fas fa-edit fa-2x"></i></span></a>&nbsp;
                <a href="admin.php?controller=Users&action=delete&id=<?php echo $row->id ?>"><span><i class="fas fa-trash-alt fa-2x"></i></span></a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
