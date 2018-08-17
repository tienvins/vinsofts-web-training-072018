<?php foreach ($user as $us_item){?>
<form class="form-horizontal form-label-left" novalidate action="?controller=User&action=update_user&id=<?php echo $us_item['id']?>" method="POST" enctype="multipart/form-data">
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Họ tên <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  class="form-control col-md-7 col-xs-12" name="name" type="text" required="required" value="<?php echo $us_item['name']?>">
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Email <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  class="form-control col-md-7 col-xs-12" name="email" type="email" required="required" value="<?php echo $us_item['email']?>">
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Email cá nhân <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  class="form-control col-md-7 col-xs-12" name="email_personal" type="email" required="required" value="<?php echo $us_item['email_personal']?>">
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pasword <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  class="form-control col-md-7 col-xs-12" name="password" type="password" required="required" value="<?php echo $us_item['password']?>">
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">remember_token <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  class="form-control col-md-7 col-xs-12" name="remember_token" type="password" required="required" value="<?php echo $us_item['remember_token']?>">
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Ảnh <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input name="img_hiden" type="hidden" value="<?php echo $us_item['image']?>">
            <input  class="form-control col-md-7 col-xs-12" name="image" type="file" required="required" >
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
<!--            <input  class="form-control col-md-7 col-xs-12" name="date_of_birth" type="date" required="required" value="--><?php //echo $us_item['name']?><!--">-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="item form-group">-->
<!--        <label class="control-label col-md-3 col-sm-3 col-xs-12">CMT <span class="required">*</span>-->
<!--        </label>-->
<!--        <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--            <input  class="form-control col-md-7 col-xs-12" name="identify_id" type="number" required="required" value="--><?php //echo $us_item['name']?><!--">-->
<!--        </div>-->
<!--    </div>-->
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">SDT <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  class="form-control col-md-7 col-xs-12" name="phone_number" type="number" required="required" value="<?php echo $us_item['phone_number']?>">
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Địa chỉ hiện tại <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  class="form-control col-md-7 col-xs-12" name="current_address" type="text" required="required" value="<?php echo $us_item['current_address']?>">
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Địa chỉ thường trú <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  class="form-control col-md-7 col-xs-12" name="permanent_address" type="text" required="required" value="<?php echo $us_item['permanent_address']?>">
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Trường học <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  class="form-control col-md-7 col-xs-12" name="graduate_from" type="text" required="required" value="<?php echo $us_item['graduate_from']?>">
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Lương <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  class="form-control col-md-7 col-xs-12" name="salary" type="number" required="required" value="<?php echo $us_item['salary']?>">
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">STK <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  class="form-control col-md-7 col-xs-12" name="bank_account_number" type="text" required="required" value="<?php echo $us_item['bank_account_number']?>">
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sở thích
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  class="form-control col-md-7 col-xs-12" name="hobby" type="text" value="<?php echo $us_item['hobby']?>">
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" >GT gia đình
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  class="form-control col-md-7 col-xs-12" name="family_description" type="text" value="<?php echo $us_item['family_description']?>" >
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Kỹ năng
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  class="form-control col-md-7 col-xs-12" name="language_skills" type="text" value="<?php echo $us_item['language_skills']?>">
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Ngày nghỉ còn lại <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  class="form-control col-md-7 col-xs-12" name="leave_days" type="text" required="required" value="<?php echo $us_item['leave_days']?>">
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" >role_id <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  class="form-control col-md-7 col-xs-12" name="role_id" type="text" required="required" value="<?php echo $us_item['role_id']?>">
        </div>
    </div>
       <div class="item form-group">
           <label class="control-label col-md-3 col-sm-3 col-xs-12" >Tình trạng <span class="required">*</span>
           </label>
           <div class="col-md-6 col-sm-6 col-xs-12">
               <input  class="form-control col-md-7 col-xs-12" name="status" type="text" required="required" value="<?php echo $us_item['status']?>">
           </div>
       </div>
    <?php } ?>
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

    <div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
            <button type="submit" class="btn btn-primary">Cancel</button>
            <button id="send" type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
</form>
</div>
