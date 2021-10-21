<?php
session_start();
include 'include/connection.php';

if(isset($_POST['candiregistration']))
{
    $role=$_POST['role'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $status=$_POST['status'];


   $sql="insert into registermember(fname,lname,email,mobile,password,role,status) values('$fname','$lname','$email','$mobile','$password','$role','$status')";

     $s=$conn->query($sql);

    if (count($s)>0) {
        header("location: login.php");
    }
}

if(isset($_POST['companyregi']))
{
    extract($_POST);
    // $role=$_POST['role'];
    // $fname=$_POST['fname'];
    // $lname=$_POST['lname'];
    // $email=$_POST['email'];
    // $mobile=$_POST['mobile'];
    // $password=$_POST['password'];
    // $status=$_POST['status'];
    // $companyname=$_POST['companyname'];
    // $designation=$_POST['designation'];

    $sql="insert into registermember(fname,lname,email,mobile,password,role,status,designation,companyname) values('$fname','$lname','$email','$mobile','$password','$role','$status','$designation','$companyname')";

     $s=$conn->query($sql);

    if (count($s)>0) {
        header("location: login.php");
    }
}

if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $pid = $_POST['pid'];

    $qry="SELECT * FROM registermember WHERE email='$email' AND password='$password'";
    $s=$conn->query($qry);

    $res=$s->fetch_object();

     $o=mysqli_num_rows($s);

    if ($o>0)
    {

        $re=$res->role;
        $st=$res->status;
        $id=$res->reid;
        $_SESSION['userid']=$id;
        $_SESSION['role']=$re;
        if ($re=="candidate") {

            if($st=='100%')
            {
                if (!empty($pid)) 
                    header("Location: jobdetails.php?id=".$pid);
                else
                    header("Location: candidatedashboard.php");
            }
            else
            {
                header("Location: candidateprofile.php");
            }

        }
        else
        {
            if ($st=='100%') {
                header("Location: companydashboard.php");
            }
            else
            {
                header("Location: companyprofile.php");
            }
        }
    }
    else
    {
       $msg="Please Enter Valid Email ID and Password";
       header("Location: login.php");
    }
}

if(isset($_POST['candiupdate']))
{
    $mobile=$_POST['mobile'];
    $bdate=$_POST['bdate'];
    $categorie=$_POST['categorie'];
    $joblocation=$_POST['joblocation'];
    $gender=$_POST['gender'];
    $hometown=$_POST['hometown'];
    $userida=$_POST['userida'];
    $status=$_POST['status'];

    $pi=$_FILES['profilepic']['name'];
    $pii="profilepic/".$pi;
    $ptmp=$_FILES['profilepic']['tmp_name'];
    move_uploaded_file($ptmp,$pii);

    $ci=$_FILES['cv']['name'];
    $cii="cv/".$ci;
    $ctmp=$_FILES['cv']['tmp_name'];
    move_uploaded_file($ctmp,$cii);

     $sql="update registermember set mobile='$mobile',bdate='$bdate',categorie='$categorie',joblocation='$joblocation',gender='$gender',hometown='$hometown',status='$status',profilepic='$pi',cv='$ci' where reid='$userida'";

     $s=$conn->query($sql);

    if (count($s)>0) {
        header("location: candidatedashboard.php");
    }
}

if(isset($_POST['companyupdate']))
{


    extract($_POST);


    $mde=mysqli_real_escape_string($conn, $_POST['cprofile']);


    $pi=$_FILES['campanylogo']['name'];
    $pii="profilepic/".$pi;
    $ptmp=$_FILES['campanylogo']['tmp_name'];
    move_uploaded_file($ptmp,$pii);

    echo $sql="update registermember set mobile='$mobile',hometown='$hometown',noofemployee='$noofemployee',cprofile='$mde',website='$website',categorie='$categorie',status='$status',campanylogo='$pi' where reid='$userida'";


     $s=$conn->query($sql);

        if (count($s)>0) {
            header("location: companydashboard.php");
        }

}


if(isset($_POST['postregister']))
{
    extract($_POST);

    $locationd=rtrim($location,',');

   $sql="INSERT INTO `jobpost`(`comp_id`,`jobtitle`, `jobdec`, `skill`, `sdate`, `edate`, `poston`, `location`, `eligibility`, `opening`, `salary`, `home`, `parttime`, `certificate`) VALUES ('".$_SESSION['userid']."','".$jobtitle."','".$jobdec."','".$skill."','".$sdate."','".$edate."','".$poston."','".$locationd."','".$eligibility."','".$opening."','".$salary."','".$home."','".$parttime."','".$certificate."')";

     $s=$conn->query($sql);

    if (count($s)>0) {
        header("location: companydashboard.php");
    }
}

if(isset($_GET['st']))
{
    $pid = base64_decode($_GET['id']);
    $uid = $_SESSION['userid'];

    $qry="SELECT * FROM registermember WHERE reid='".$uid."'";
    $s=$conn->query($qry);

    $res=$s->fetch_object();

    if($res->status == "100%")
    {

        $sql="INSERT INTO `applicant`(`jid`, `user_id`,`app_status`) VALUES ('".$pid."','".$uid."','applied')";

         $s=$conn->query($sql);

        if (count($s)>0) {
            header("location: candidatedashboard.php");
        }
    }
    else
    {
        header("location: candidateprofile.php?msg=".base64_encode("flase"));
    }
}

if(isset($_POST['editpost']))
{
    $jobid=base64_decode($_GET['jobid']);
    extract($_POST);

    $locationd=rtrim($location,',');

   $sql="update jobpost set jobtitle='$jobtitle',jobdec='$jobdec',skill='$skill',sdate='$sdate',edate='$edate',poston='$poston',location='$locationd',eligibility='$eligibility',opening='$opening',salary='$salary',home='$home',parttime='$parttime',certificate='$certificate',categorie='$categorie',postdate='$poston'";
     $s=$conn->query($sql);

    if (count($s)>0) {
        header("location: companydashboard.php");
    }
}

if (isset($_GET['did'])) 
{
        $jid=$_GET['did'];
        $sql="delete from jobpost where jobid='$jid'";
        $s=$conn->query($sql);
       if(count($s>0))
       {
          header("location: companydashboard.php");
       }
}


if(isset($_POST['contact']))
{
    extract($_POST);
    // $role=$_POST['role'];
    // $fname=$_POST['fname'];
    // $lname=$_POST['lname'];
    // $email=$_POST['email'];
    // $mobile=$_POST['mobile'];
    // $password=$_POST['password'];
    // $status=$_POST['status'];
    // $companyname=$_POST['companyname'];
    // $designation=$_POST['designation'];
    //


    $sql="INSERT INTO `contactdetails` (`contactid`, `yourname`, `contactemail`, `msg`) VALUES (NULL, '$yourname', '$contactemail', '$msg');";

     $s=$conn->query($sql);

    if (count($s)>0) {
        header("location: login.php");
    }
}
?>