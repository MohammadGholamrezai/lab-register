<?php
header('Content-Type: text/html; charset=utf-8');
include("connect.php");
function XSS($value)
{
  return htmlspecialchars($value);
}
function fnValidateNumber($value)
{
        return is_numeric($value);
}

       if(isset($_POST["btnsend"]))
       {
         //// first
         if(empty($_POST["t1"]) ||empty($_POST["t3"]) ||empty($_POST["t4"]) ||empty($_POST["t5"]) ||empty($_POST["t6"]) ||empty($_POST["t7"])
         ||empty($_POST["t8"]) ||empty($_POST["t9"]) ||empty($_POST["t10"]) ||empty($_POST["t11"]) ||empty($_POST["t12"]))
       {
         header("location:register-lab.php?empty=1010&t1=".$_POST["t1"]."&t3=".$_POST["t3"]."&t4=".$_POST["t4"]."&t5=".$_POST["t5"]."&t6=".$_POST["t6"]."&t7=".$_POST["t7"]."&t8=".$_POST["t8"].
         "&t9=".$_POST["t9"]."&t10=".$_POST["t10"]."&t11=".$_POST["t11"]."&t12=".$_POST["t12"]."");
     exit;
     }

        else if(isset($_FILES["t2"]["tmp_name"]))
         {

           $lab_name = XSS($_POST["t1"]);

           $picname=$_FILES["t2"]["name"];
           $tmp=$_FILES["t2"]["tmp_name"];
           $type=$_FILES["t2"]["type"];

           $tel = XSS($_POST["t3"]);
           $address = XSS($_POST["t4"]);
           $pstal_code = XSS($_POST["t5"]);
           $username = XSS($_POST["t6"]);
           $pass = XSS($_POST["t7"]);
           $repass = XSS($_POST["t8"]);
           $mobile = XSS($_POST["t9"]);
           $insurance = XSS($_POST["t10"]);
           $azmayesh = XSS($_POST["t11"]);
           $comments = XSS($_POST["t12"]);

       if(is_uploaded_file($tmp))
       {
         $pasvand=array("image/jpeg","image/png","image/jpg","image/gif");
         if(in_array($type,$pasvand))
         {
           $hash=md5($picname.microtime()).substr($picname,-5,5);
           $location="logo/".$hash;
           $move=move_uploaded_file($tmp,$location);
           if($move)
           {

         if($pass!=$repass)
           {
             header("location:register-lab.php?pass-not-equal=1020&t1=".$_POST["t1"]."&t2=".$_POST["t2"]."&t3=".$_POST["t3"]."&t4=".$_POST["t4"]."&t5=".$_POST["t5"]."&t6=".$_POST["t6"]."&t7=".$_POST["t7"]."&t8=".$_POST["t8"].
             "&t9=".$_POST["t9"]."&t10=".$_POST["t10"]."&t11=".$_POST["t11"]."&t12=".$_POST["t12"]."");
             exit;
           }
           else if(fnValidateNumber($_POST["t1"]))
           {
             header("location:register-lab.php?t1-error=2060&t1=".$_POST["t1"]."&t3=".$_POST["t3"]."&t4=".$_POST["t4"]."&t5=".$_POST["t5"]."&t6=".$_POST["t6"]."&t7=".$_POST["t7"]."&t8=".$_POST["t8"].
             "&t9=".$_POST["t9"]."&t10=".$_POST["t10"]."&t11=".$_POST["t11"]."&t12=".$_POST["t12"]."");
             exit;
           }
           else if(!fnValidateNumber($_POST["t3"]))
           {
             header("location:register-lab.php?t3-error=2060&t1=".$_POST["t1"]."&t3=".$_POST["t3"]."&t4=".$_POST["t4"]."&t5=".$_POST["t5"]."&t6=".$_POST["t6"]."&t7=".$_POST["t7"]."&t8=".$_POST["t8"].
             "&t9=".$_POST["t9"]."&t10=".$_POST["t10"]."&t11=".$_POST["t11"]."&t12=".$_POST["t12"]."");
             exit;
           }
           else if(!fnValidateNumber($_POST["t5"]))
           {
             header("location:register-lab.php?t5-error=2060&t1=".$_POST["t1"]."&t3=".$_POST["t3"]."&t4=".$_POST["t4"]."&t5=".$_POST["t5"]."&t6=".$_POST["t6"]."&t7=".$_POST["t7"]."&t8=".$_POST["t8"].
             "&t9=".$_POST["t9"]."&t10=".$_POST["t10"]."&t11=".$_POST["t11"]."&t12=".$_POST["t12"]."");
             exit;
           }
           else if(!fnValidateNumber($_POST["t9"]))
           {
             header("location:register-lab.php?t9-error=2060&t1=".$_POST["t1"]."&t3=".$_POST["t3"]."&t4=".$_POST["t4"]."&t5=".$_POST["t5"]."&t6=".$_POST["t6"]."&t7=".$_POST["t7"]."&t8=".$_POST["t8"].
             "&t9=".$_POST["t9"]."&t10=".$_POST["t10"]."&t11=".$_POST["t11"]."&t12=".$_POST["t12"]."");
             exit;
           }


         else
       {
       $sql="INSERT INTO laboratory
       VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
       $result=$connect->prepare($sql);
       $result->bindValue(1, $lab_name);
       $result->bindValue(2,$location);
       $result->bindValue(3,$address);
       $result->bindValue(4, $pstal_code);
       $result->bindValue(5,$username);
       $result->bindValue(6,$pass);
       $result->bindValue(7,$mobile);
       $result->bindValue(8,$insurance);
       $result->bindValue(9,$tel);
       $result->bindValue(10,$azmayesh);
       $result->bindValue(11,$comments);
       $query=$result->execute();
       if($query)
       {
       header("location:register-lab.php?ok=1610");
       exit;
       }
       else
       {
       header("location:register-lab.php?error=1510&t1=".$_POST["t1"]."&t3=".$_POST["t3"]."&t4=".$_POST["t4"]."&t5=".$_POST["t5"]."&t6=".$_POST["t6"]."&t7=".$_POST["t7"]."&t8=".$_POST["t8"].
       "&t9=".$_POST["t9"]."&t10=".$_POST["t10"]."&t11=".$_POST["t11"]."&t12=".$_POST["t12"]."");
         exit;
       }

         }
       }
           else
           {
                   header("location:register-lab.php?uploaderror=1210&t1=".$_POST["t1"]."&t3=".$_POST["t3"]."&t4=".$_POST["t4"]."&t5=".$_POST["t5"]."&t6=".$_POST["t6"]."&t7=".$_POST["t7"]."&t8=".$_POST["t8"].
                   "&t9=".$_POST["t9"]."&t10=".$_POST["t10"]."&t11=".$_POST["t11"]."&t12=".$_POST["t12"]."");
                   exit;
           }

         }
         else
         {
               header("location:register-lab.php?pasvand-error=9696&t1=".$_POST["t1"]."&t3=".$_POST["t3"]."&t4=".$_POST["t4"]."&t5=".$_POST["t5"]."&t6=".$_POST["t6"]."&t7=".$_POST["t7"]."&t8=".$_POST["t8"].
               "&t9=".$_POST["t9"]."&t10=".$_POST["t10"]."&t11=".$_POST["t11"]."&t12=".$_POST["t12"]."");
               exit;
         }


       }

       else
       {
             header("location:register-lab.php?isnotupload=8080&t1=".$_POST["t1"]."&t3=".$_POST["t3"]."&t4=".$_POST["t4"]."&t5=".$_POST["t5"]."&t6=".$_POST["t6"]."&t7=".$_POST["t7"]."&t8=".$_POST["t8"].
             "&t9=".$_POST["t9"]."&t10=".$_POST["t10"]."&t11=".$_POST["t11"]."&t12=".$_POST["t12"]."");
             exit;
       }


         }
         else
         {
           header("location:register-lab.php?noselectpic=8080&t1=".$_POST["t1"]."&t3=".$_POST["t3"]."&t4=".$_POST["t4"]."&t5=".$_POST["t5"]."&t6=".$_POST["t6"]."&t7=".$_POST["t7"]."&t8=".$_POST["t8"].
           "&t9=".$_POST["t9"]."&t10=".$_POST["t10"]."&t11=".$_POST["t11"]."&t12=".$_POST["t12"]."");
             exit;
         }
         //// end
       }
       else
       {
         header("location:register-lab.php");
       }

 ?>
