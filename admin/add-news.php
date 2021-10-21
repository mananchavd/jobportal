<?php 
// error_reporting(0);
include 'include/include.php'; 
include 'include/adminall.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Add News</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="#">
    <?php include 'include/alllink.php'; ?>

    <link rel="stylesheet" type="text/css" href="<?php echo HOME_URL;?>css/style.css" />

    <script src="<?php echo HOME_URL;?>ck/ckeditor/ckeditor.js"></script>  

    <script type="text/javascript">

        CKEDITOR.replace( 'editor1' );

    </script>
   
</head>

<body>
    <!-- topbar starts -->
        <?php include 'include/topbar.php'; ?>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <?php include 'include/leftmenu.php'; ?>
        <!--/span-->
        <!-- left menu ends -->


        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Add News</a>
        </li>
    </ul>
</div>
    <?php 
    
        if(isset($_REQUEST['aid']))
        {
            $sql1 = $connection->query('select * from loan_news where n_id = "'.$_REQUEST['aid'].'"');
            
            $f1 = $sql1->fetch_object();
            
            $title = $f1->title;
            $cate_id = $f1->cate_id;
            $des = $f1->descripation;
            $thumb = $f1->thumb;
            
           $date12 = date('Y-m-d',strtotime($f1->news_date));
            $time12 = date('H:i',strtotime($f1->news_date));
            
        }
    
    
    ?>
    <div class=" row">
        <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Add News</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
        <form action="<?php echo HOME_URL; ?>control.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="edit_id" value="<?php echo $_REQUEST['aid']; ?>">
            <div class="box-content">
                <div class="form-group col-md-6">
                    <label class="control-label" for="inputSuccess1">News Title</label>
                    <input class="form-control" name="title" id="title" type="text"  placeholder="Enter News Title" required="required" value="<?php echo $title; ?>">                     
                   
                </div>
                
                
               <div class="form-group col-md-6">
                    <label class="control-label" for="inputSuccess1">Category</label>
                     <select id="selectError" data-rel="chosen" class="form-control" name="cate_id">
                        <option value="">Select Category</option>
                        <?php 
                            $sql = $connection->query('select * from loan_type');

                            while($f = $sql->fetch_object())
                            {
                        ?>
                        <option value="<?php echo $f->id; ?>" 
                            <?php if($cate_id == $f->id){ echo "selected"; } ?>><?php echo $f->loan_type; ?></option>
                        <?php } ?>
                    </select>                     
                   
                </div>
               

                <div class="form-group col-md-12">
                     <label for="exampleTextarea">News Descripation</label>
                    <textarea id="editor1" class="ckeditor" name="description" required="required"><?php echo $des; ?></textarea>
                </div>
                <?php
                    if($_REQUEST['aid'])
                    {
                ?>
               
                <div class="form-group col-md-4">
                    <label class="control-label" for="inputSuccess1">Upload Thumbline Pic</label>
                    <input type="file" class="form-control" name="thumbline" id="exampleInputEmail1" >
                </div>
                 <div class="form-group col-md-2">
                   
                    <img src="img/news/<?php echo $thumb; ?>" alt="" class="img-thumbnail" style="height: 80px;">
                </div>
                <?php }else
                {?>
                <div class="form-group col-md-6">
                    <label class="control-label" for="inputSuccess1">Upload Thumbline Pic</label>
                    <input type="file" class="form-control" name="thumbline" id="exampleInputEmail1" required="required">
                </div>
                <?php } ?>
                <div class="form-group col-md-3">
                    <label class="control-label" for="inputSuccess1">Date</label>
                    <input class="form-control" name="new_date" type="date" style="line-height: inherit" value="<?php echo $date12; ?>">                     
                   
                </div>

                <div class="form-group col-md-3">
                    <label class="control-label" for="inputSuccess1">Time</label>
                    <input class="form-control" name="new_time" type="time" style="line-height: inherit" value="<?php echo $time12; ?>">                     
                   
                </div>

                <div class="clearfix"></div>
                    <input type="submit" name="submit_news" value="Add News" style="text-align:center" class="btn btn-primary btn-lg"/>
                <div class="clearfix"></div>
                
                
            </div>
        </form>
        </div>
    </div>
    <!--/span-->
    </div>

    <div class="row">

    </div><!--/row-->


    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

    

    <hr>

<?php include 'include/footer.php'; ?>

</div><!--/.fluid-container-->
  <?php include 'include/footerscript.php'; ?>

</body>
</html>

