<?php
include 'include/connection.php';
include 'include/include.php';

$datet = date("Y-m-d H:i:s");

    if(isset($_GET['newsid']))
    {
        $id=base64_decode($_GET['newsid']);
       
        $sql="select * from loan_news where n_id='$id'";
        $r=$connection->query($sql);
        $res=$r->fetch_object();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Show News</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'include/alllink.php'; ?>
    
    <style>
        articel img
        {
            width:100% !important;
        }
    </style>

</head>

<body>
   
<div class="ch-container">
   

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
        
        <div class="box-content">
        <div class="page-header">
        <h1 style="background-color: transparent;"><?php echo $res->title; ?></small>
        </h1>
        </div>
        <div class="row ">
        <div class="col-md-12">
            <p><img src="<?php echo HOME_URL; ?>img/news/<?php echo $res->thumb; ?>" class="img-thumbnail"/></p>
            <articel>
            <?php echo $res->descripation; ?>
            </articel>
        </div>
        
</div>

</div>
</div>
</div>
                <?php
                    if(isset($_GET['newsid']))
                    {
                        
                         $id=base64_decode($_GET['newsid']);
                        
                        $sql="select * from loan_news where n_id !='$id' && cate_id='".$res->cate_id."' order by n_id desc limit 5";
                       
                        $r=$connection->query($sql);
                        
                        
                        while($re=$r->fetch_object())
                        {
                            $datetime1 = new DateTime();
                            $end_date = new DateTime($re->news_date);
                           
                            $date_diff =  $datetime1->diff($end_date);
                            
                            $month = $date_diff->format('%m');
                            $days = $date_diff->format('%a');
                            $hour = $date_diff->format('%h');
                            $min = $date_diff->format('%i');
                            $sec = $date_diff->format('%s');
                            
                            if($month == 0)
                            {
                                if($days == 0)
                                {
                                    if($hour == 0)
                                    {
                                        if($min == 0)
                                        {
                                            $pns = $sec." Second ago";
                                        }
                                        else
                                        {
                                            $pns = $min." Min ago";    
                                        }
                                    }
                                    else 
                                    {
                                        $pns = $hour." Hour ago";
                                    }
                                }
                                else 
                                {
                                    $pns = $days." Days ago";
                                }
                            }
                            else 
                            {
                                $pns = $month." Month ago";
                            }
                    
                ?>
                        <div class="box col-md-12">
                            <div class="box-inner">
                                
                                <div class="box-content">
                                    <ul class="dashboard-list" style="padding-left: 0px;">
                                        <li>
                                            
                                               <a href="<?php echo HOME_URL; ?>view_news.php?newsid=<?php echo $re->n_id;?>"> <img src="<?php echo HOME_URL; ?>img/news/<?php echo $re->thumb; ?>" class="img-thumbnail dashboard-avatar" style="width:50px;height:50px"/>
                                           
                                            </a>
                                                <a href="<?php echo HOME_URL; ?>view_news.php?newsid=<?php echo $re->n_id;?>"><strong><?php echo $re->title; ?></strong> </a><br>
                                                <strong>Date:</strong> <?php echo date('d-m-Y',strtotime($re->news_date)); ?><br>
                                                <span class="label-light label label-default"><?php echo $pns; ?></span>
                                           
                                        </li>
                                     </ul>
                                </div>
                              
                            </div>
                        </div>
                <?php
                        }
                    }
                ?>

</div>
   

    <!-- content ends -->
    </div><!--/#content.col-md-0-->



<?php include 'include/footerscript.php'; ?>

</body>
</html>
