
<form class="form-horizontal form-label-left" novalidate action="?controller=User&action=Insert_User" method="POST" enctype="multipart/form-data">
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Họ tên <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  class="form-control col-md-7 col-xs-12" name="name" type="text" required="required">
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Email <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  class="form-control col-md-7 col-xs-12" name="email" type="email" required="required">
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Email cá nhân <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  class="form-control col-md-7 col-xs-12" name="email_personal" type="email" required="required">
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pasword <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  class="form-control col-md-7 col-xs-12" name="password" type="password" required="required">
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">remember_token <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  class="form-control col-md-7 col-xs-12" name="remember_token" type="password" required="required">
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ảnh <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  class="form-control col-md-7 col-xs-12" name="image" type="file" required="required">
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Giới tính <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <label class="radio-inline">
                <input  class=" " name="gender" type="radio" value="0" checked="true">Nam
            </label>
            <label class="radio-inline">
                <input  class=" " name="gender" type="radio" value="1">Nữ
            </label>
            <label class="radio-inline">
                <input  class=" " name="gender" type="radio" value="2">Không xác định
            </label>
        </div>
    </div>
<!--    <div class="item form-group">-->
<!--        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ngày sinh <span class="required">*</span>-->
<!--        </label>-->
<!--        <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--            <input  class="form-control col-md-7 col-xs-12" name="date_of_birth" type="date" required="required">-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="item form-group">-->
<!--        <label class="control-label col-md-3 col-sm-3 col-xs-12">CMT <span class="required">*</span>-->
<!--        </label>-->
<!--        <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--            <input  class="form-control col-md-7 col-xs-12" name="identify_id" type="number" required="required">-->
<!--        </div>-->
<!--    </div>-->
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">SDT <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  class="form-control col-md-7 col-xs-12" name="phone_number" type="number" required="required">
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Địa chỉ hiện tại <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  class="form-control col-md-7 col-xs-12" name="current_address" type="text" required="required">
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Địa chỉ thường trú <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  class="form-control col-md-7 col-xs-12" name="permanent_address" type="text" required="required">
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Trường học <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  class="form-control col-md-7 col-xs-12" name="graduate_from" type="text" required="required">
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Lương <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  class="form-control col-md-7 col-xs-12" name="salary" type="number" required="required">
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">STK <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  class="form-control col-md-7 col-xs-12" name="bank_account_number" type="text" required="required">
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sở thích
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  class="form-control col-md-7 col-xs-12" name="hobby" type="text" >
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" >GT gia đình
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  class="form-control col-md-7 col-xs-12" name="family_description" type="text" >
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Kỹ năng
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  class="form-control col-md-7 col-xs-12" name="language_skills" type="text" >
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Ngày nghỉ còn lại <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  class="form-control col-md-7 col-xs-12" name="leave_days" type="text" required="required">
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" >role_id <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  class="form-control col-md-7 col-xs-12" name="role_id" type="text" required="required">
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Teams<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <select class="form-control col-md-7 col-xs-12"  name="team_id" id="">
                <option value="0">---Selected----</option>
                <?php foreach ($team as $t){?>
                <option value="<?php echo $t['team_id']?>"><?php echo $t['team_name']?></option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Tình trạng <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  class="form-control col-md-7 col-xs-12" name="status" type="text" required="required">
        </div>
    </div>

    <div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
            <button type="submit" class="btn btn-primary">Cancel</button>
            <button id="send" type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
</form>
</div>
