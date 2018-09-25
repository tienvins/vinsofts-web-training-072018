<div class="page-title">
  <div class="title_left">
    <h3>Teams</h3>
  </div>
</div>
<div class="clearfix"></div>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2><small>Teams List</small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Settings</a>
              </li>
              </li>
            </ul>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
         <a href="index.php?controller=add_edit_teams&act=add" class="btn btn-primary">Add</a>
        <table id="datatable" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>STT</th>
              <th>Name</th>
              <th>Description</th>
              <th>Logo</th>
              <th>Leader_id</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php  
              foreach($data as $rows)
              {
            ?>
            <tr>
              <td><?php echo isset($rows->_id) ? $rows->_id : 0; ?></td>
              <td><?php echo $rows->name; ?></td>
              <td><?php echo $rows->description; ?></td>
              
              <!-- <td><?php echo isset($rows->name_user) ? $rows->name_user : "" ?></td> --> 

              <td>
                  <?php
                    $leader_id = $rows->leader_id;
                    
                    $listteam = $this->model->table(users)->find([
                      '_id' => new MongoDB\BSON\ObjectID($leader_id)
                    ])->toArray();

                    echo isset($listteam[0]->name) ? $listteam[0]->name : "";
                  ?>
                </td>
                <td>
                <img src="../project_mongoDB/public/upload/teams/<?php echo $rows->logo; ?>" style="width: 150px; height: 150px;">
              </td>
              <td class="text-center">
                <a href="index.php?controller=add_edit_teams&act=edit&id=<?php echo $rows->_id ?>">Edit</a>&nbsp;&nbsp;
                <a onclick="return window.confirm('Are you sure')" href="index.php?controller=teams&act=delete&id=<?php echo $rows->_id ?>">Delete</a>
              </td>
            </tr>
          <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>