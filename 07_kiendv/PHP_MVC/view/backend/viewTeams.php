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
          <li><a class="collapse-link"><i class="fa fa-chevron-up fa-2x"></i></a>
          </li>
          <li><a href="admin.php?controller=AddEditTeams&action=add"><i class="fa fa-plus fa-2x"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <table id="datatable" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th class="clickMe">Name</th>
              <th>Description</th>
              <th>Logo</th>
              <th>Leader</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach ($arr as $row) {
                $row = (object)$row;
            ?>
            <tr>
              <td><?php echo $row->name ?></td>
              <td><?php echo $row->description ?></td>
              <td>
                <?php if ($row->logo != "" && file_exists($row->logo)) {
                 ?>
                  <img src="<?php echo $row->logo ?>" alt="" style="width: 80px;">
                 <?php } ?>
              </td>
              <td>
                <?php  
                  $leader_id = $row->leader_id;
                  $leader_name = $this->model->fetch_one("select name from users where id = $leader_id");
                  echo isset($leader_name->name) ? $leader_name->name : "";
                ?>
              </td>
              <td class="text-center">
                <a href="admin.php?controller=AddEditTeams&action=edit&id=<?php echo $row->id ?>"><span><i class="fas fa-edit fa-2x"></i></span></a>&nbsp;
                <a href="admin.php?controller=Teams&action=delete&id=<?php echo $row->id ?>"><span><i class="fas fa-trash-alt fa-2x"></i></span></a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- <script>
  $(document).ready(function(){
    $('.clickMe').click(function(){
      alert("bat dau goji ajax");
      $.ajax({
        url:"",
        type :"get",
        // data : {name : $("[name='name']").val()},
        success :function(data){
          alert("da goji xong");
          console.log(data);
        },
        error :function (error) {
          // body...
        }
      })
    })
  })
</script> -->