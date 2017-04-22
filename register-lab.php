<?php
session_start();
 ?>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>صفحه ثبت نام آزمایشگاه</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
 	<link href="css/rtl-bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrapValidator.min.css" rel="stylesheet">

  <script src="js/jquery-3.0.0.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrapValidator.min.js"></script>
  <script src="js/validation.js"></script>


  <style type="text/css">
   @font-face{
   font-family:bhoma;
   src:url(fonts/bhoma.ttf);
   }
    body{
	font-family:bhoma;
	font-size:14px;
  background-color: #f3f3f3;
    }
    .txtcbody{
      font-size:14px;
    	float:right;
    	margin-top:10px;
    	margin-bottom:5px;
      margin-right: 300px;
      text-align: justify;
      padding: 15px;
      padding-left: 125px;
      padding-right: 95px;
      border:1px solid brown;
      border-radius: 5px;
      width:800px;
      height:6S00px;

    }
  </style>
  </head>
  <body>

    <?php
    header('Content-Type: text/html; charset=utf-8');

    if(isset($_GET["empty"]))
      echo ' <div class="alert alert-warning" role="alert" align="center">لطفا فیلدهای خالی را پر کنید</div> ';
    if(isset($_GET["ok"]))
      echo ' <div class="alert alert-success" role="alert" align="center">اطلاعات با موفقیت ثبت شد</div> ';
    if(isset($_GET["error"]))
      echo ' <div class="alert alert-danger" role="alert" align="center"> خطا در ثبت اطلاعات</div> ';
      if (isset($_GET["pass-not-equal"]))
      echo '<div class="alert alert-danger" role="alert" align="center">کلمه عبور با تکرار آن مطابقت ندارد</div>
      <style type="text/css">
      #t7{
        border:1px solid red;
      }
      #t8{
        border:1px solid red;
      }
      </style>
      ';
     if(isset($_GET["uploaderror"]))
      echo ' <div class="alert alert-danger" role="alert" align="center">خطا در آپلود تصویر</div>
      <style type="text/css">
      #t2{
        border:1px solid red;
      }
      #t7{
        border:1px solid red;
      }
      #t8{
        border:1px solid red;
      }
      </style>
       ';
     if(isset($_GET["pasvand-error"]))
      echo ' <div class="alert alert-danger" role="alert" align="center">پسوند فایل تصویر نامعتبر می باشد</div>
      <style type="text/css">
      #t2{
        border:1px solid red;
      }
      #t7{
        border:1px solid red;
      }
      #t8{
        border:1px solid red;
      }
      </style>
       ';
     if(isset($_GET["isnotupload"]))
      echo ' <div class="alert alert-danger" role="alert" align="center">تصویر لوگو آپلود نشده است</div>
      <style type="text/css">
      #t2{
        border:1px solid red;
      }
      #t7{
        border:1px solid red;
      }
      #t8{
        border:1px solid red;
      }
      </style>
      ';
      if(isset($_GET["noselectpic"]))
      echo ' <div class="alert alert-warning" role="alert" align="center">تصویری برای لوگو انتخاب نشده است</div>
      <style type="text/css">
      #t2{
        border:1px solid red;
      }
      #t7{
        border:1px solid red;
      }
      #t8{
        border:1px solid red;
      }
      </style>
       ';
      if(isset($_GET["t1-error"]))
        echo ' <div class="alert alert-danger" role="alert" align="center">نام آزمایشگاه نمی تواند بصورت عدد وارد شود</div>
        <style type="text/css">
        #t1{
          border:1px solid red;
        }
        #t7{
          border:1px solid red;
        }
        #t8{
          border:1px solid red;
        }
        </style>
        ';


            if(isset($_GET["t3-error"]))
              echo ' <div class="alert alert-danger" role="alert" align="center">تلفن باید بصورت عدد وارد شود </div>
              <style type="text/css">
              #t3{
                border:1px solid red;
              }
              #t7{
                border:1px solid red;
              }
              #t8{
                border:1px solid red;
              }
              </style>
              ';
              if(isset($_GET["t5-error"]))
                echo ' <div class="alert alert-danger" role="alert" align="center">کد پستی باید بصورت عدد وارد شود </div>
                <style type="text/css">
                #t5{
                  border:1px solid red;
                }
                #t7{
                  border:1px solid red;
                }
                #t8{
                  border:1px solid red;
                }
                </style>
                ';
                if(isset($_GET["t9-error"]))
                  echo ' <div class="alert alert-danger" role="alert" align="center"> تلفن همراه باید بصورت عدد وارد شود</div>
                  <style type="text/css">
                  #t9{
                    border:1px solid red;
                  }
                  #t7{
                    border:1px solid red;
                  }
                  #t8{
                    border:1px solid red;
                  }
                  </style>
                  ';
?>


    <div class="txtcbody">
      <div style="font-size:14px;margin-bottom:10px;background-color:#6b6ba0;width:100%;" align="center">
        <span style="color:white;padding:5px;">فرم ثبت نام آزمایشگاه</span>
      </div>
    <form id="register" name="register"  action="check-register-lab.php"  method="post" class="form-horizontal" enctype="multipart/form-data">
    <div class="form-group">
      <label class="col-lg-5 col-md-5 col-sm-5 col-xs-12 control-label"><span style="color:gray;font-size:12px;">نام آزمایشگاه: </span></label>
      <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
          <input type="text" class="form-control persian" name="t1" id="t1" <?php if(isset($_GET["t1"])) echo "value=".$_GET["t1"].""; ?>>
      </div>
    </div>

    <div class="form-group">
      <label class="col-lg-5 col-md-5 col-sm-5 col-xs-12 control-label"><span style="color:gray;font-size:12px;">آپلود لوگو:  </span></label>
      <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
          <input type="file" name="t2" id="t2" <?php if(isset($_GET["t2"])) echo "value=".$_GET["t2"].""; ?>>
      </div>
    </div>

    <div class="form-group">
      <label class="col-lg-5 col-md-5 col-sm-5 col-xs-12 control-label"><span style="color:gray;font-size:12px;"> نام کاربری: </span></label>
      <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
          <input type="text" class="form-control persian" name="t6" id="t6" <?php if(isset($_GET["t6"])) echo "value=".$_GET["t6"].""; ?>>
      </div>
    </div>

    <div class="form-group">
      <label class="col-lg-5 col-md-5 col-sm-5 col-xs-12 control-label"><span style="color:gray;font-size:12px;"> کلمه عبور:   </span></label>
      <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
          <input type="password" class="form-control persian" name="t7" id="t7">
      </div>
    </div>

    <div class="form-group">
      <label class="col-lg-5 col-md-5 col-sm-5 col-xs-12 control-label"><span style="color:gray;font-size:12px;">تکرار کلمه عبور:  </span></label>
      <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
          <input type="password" class="form-control persian" name="t8" id="t8">
      </div>
    </div>

    <div class="form-group">
      <label class="col-lg-5 col-md-5 col-sm-5 col-xs-12 control-label"><span style="color:gray;font-size:12px;">بیمه های طرف قرارداد:   </span></label>
      <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
          <input type="text" class="form-control persian" name="t10" id="t10" <?php if(isset($_GET["t10"])) echo "value=".$_GET["t10"].""; ?>>
      </div>
    </div>

    <div class="form-group">
      <label class="col-lg-5 col-md-5 col-sm-5 col-xs-12 control-label"><span style="color:gray;font-size:12px;">تلفن همراه:  </span></label>
      <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
          <input type="text" class="form-control persian" name="t9" id="t9" maxlength="11" dir="ltr" <?php if(isset($_GET["t9"])) echo "value=".$_GET["t9"].""; ?>>
      </div>
    </div>

    <div class="form-group">
      <label class="col-lg-5 col-md-5 col-sm-5 col-xs-12 control-label"><span style="color:gray;font-size:12px;">تلفن: </span></label>
      <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
          <input type="text" class="form-control persian" name="t3" id="t3" dir="ltr" maxlength="8" <?php if(isset($_GET["t3"])) echo "value=".$_GET["t3"].""; ?>>
      </div>
    </div>

    <div class="form-group">
      <label class="col-lg-5 col-md-5 col-sm-5 col-xs-12 control-label"><span style="color:gray;font-size:12px;">کد پستی (10 رقمی): </span></label>
      <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
          <input type="text" class="form-control persian" name="t5" id="t5" maxlength="10" <?php if(isset($_GET["t5"])) echo "value=".$_GET["t5"].""; ?>>
      </div>
    </div>

    <div class="form-group">
      <label class="col-lg-5 col-md-5 col-sm-5 col-xs-12 control-label"><span style="color:gray;font-size:12px;"> آدرس:  </span></label>
      <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
        <textarea name="t4" id="t4" rows="4" cols="40" ><?php if(isset($_GET["t4"])) echo $_GET["t4"]; ?></textarea>
      </div>
    </div>

    <div class="form-group">
      <label class="col-lg-5 col-md-5 col-sm-5 col-xs-12 control-label"><span style="color:gray;font-size:12px;">آزمایشهای تخصصی:   </span></label>
      <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
        <textarea name="t11" id="t11" rows="4" cols="40" ><?php if(isset($_GET["t11"])) echo $_GET["t11"]; ?></textarea>
      </div>
    </div>

    <div class="form-group">
      <label class="col-lg-5 col-md-5 col-sm-5 col-xs-12 control-label"><span style="color:gray;font-size:12px;">توضییحات:   </span></label>
      <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
        <textarea name="t12" id="t12" rows="4" cols="40" ><?php if(isset($_GET["t12"])) echo $_GET["t12"]; ?></textarea>
      </div>
    </div>

    <!-- #messages is where the messages are placed inside -->
    <div class="form-group">
      <div class="col-md-9 col-md-offset-3">
          <div id="messages"></div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-3 col-md-offset-3" style="margin-right:185px;">


        <script>
        $(document).ready(function() {
            $('#register').bootstrapValidator({
                container: '#messages',
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    t7: {
                        validators: {
                            stringLength: {
                        min: 6,
                        message: 'کلمه عبور باید حداقل 6 رقم باشد'
                    }
                        }
                    },
                    t8: {
                        validators: {
                            stringLength: {
                        min: 6,
                        message: 'کلمه عبور باید حداقل 6 رقم باشد'
                    }
                        }
                    },
                    t3: {
                        validators: {
                            stringLength: {
                        min: 8,
                        message: 'شماره تلفن باید 8 رقمی وارد شود'
                    }
                        }
                    },
                    t9: {
                        validators: {
                            stringLength: {
                        min: 11,
                        message: 'شماره تلفن همراه باید 11 رقمی وارد شود'
                    }
                        }
                    },
                    t5: {
                        validators: {
                            stringLength: {
                        min: 10,
                        message: 'کد پستی باید 10 رقمی وارد شود'
                    }
                        }
                    },
                }
            });
        });
        </script>


          <button type="submit" name="btnsend" id="btnsend" style="width:100px;font-size:12px;" class="btn btn-info text-center" aria-label="Right Align">ثبت </button>

      </div>
    </div>

    </form>
    </div>

  </body>

  </html>
