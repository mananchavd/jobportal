<?php
include 'include/adminall.php';
include 'include/include.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Show News List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'include/alllink.php'; ?>

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
            <a href="#">Update News List</a>
        </li>
    </ul>
</div>

    <div class="modal fade news_del" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<div class="modal-header">
    				<button type="button" class="close" data-dismiss="modal">×</button>
    				<h3>Delete Confirmation</h3>
    			</div>
    			<div class="modal-body">
    				<p>Do You Want To Delete News....</p>
    			</div>
    			<div class="modal-footer">
    			    <span style="text-align: left;" class="Result"></span>
    				<a href="//" class="btn btn-primary" id="del">Delete</a>
    				<a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
    			</div>
    		</div>
    	</div>
    </div>
    
	<div class=" row">
		<div class="box col-md-12">
			<div class="box-inner">
			<div class="box-header well" data-original-title="">
				<h2><i class="glyphicon glyphicon-file"></i> News List</h2>

				<div class="box-icon">
					<a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
					<a href="#" class="btn btn-minimize btn-round btn-default"><i
							class="glyphicon glyphicon-chevron-up"></i></a>
					<a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
				</div>
			</div>
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>No</th>
        <th>Image</th>
        <th>Title</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
	<?php
		include 'include/connection.php';
		$sql="select * from loan_news";
		$news=$connection->query($sql);
        $s=1;
		while($fa=$news->fetch_object())
		{	
	?>
    <tr>
		<td><?php echo $s;?></td>
        <td><img src="<?php echo HOME_URL; ?>img/news/<?php echo $fa->thumb;?>" style="width:50px;height: 50px;border:1px solid #000;border-radius: 5px;padding:2px"></td>
        <td><?php echo $fa->title;?></td>
        <td class="center">
             
            <a class="btn btn-info" href="<?php echo HOME_URL; ?>add-news.php?aid=<?php echo $fa->n_id;?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
            <a class="btn btn-danger" href="#" onclick="delete_news('<?php echo $fa->n_id ?>');">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </a>
             <a class="btn btn-success" href="<?php echo HOME_URL; ?>view_news.php?newsid=<?php echo $fa->n_id;?>">
                <i class="glyphicon glyphicon-eye-open icon-white"></i>
                View
            </a>
        </td>
    </tr>
	<?php
    $s++;
		}
	?>
    </tbody>
    </table>
    </div>
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
<script>
function delete_news(id)
{
	$(".news_del").modal();	
	
	$("#del").click( function(){
	
		var url = "del_news.php";
			
		var data = "values="+id;
		
		$.ajax({
			type: 'POST',		
			url: url,
			data: data,
			
			success: function (response)
			{
				if(response.status == 0)
				{
					
					$(".Result").html(response.msg).css("color","red");
					setTimeout(function(){
						location.reload();
					}, 3000);
				}
				else
				{
					
					$(".Result").html(response.msg).css("color","green");
					setTimeout(function(){
						 location.reload();
					}, 1700);
				}
			}
		});
	});
}

</script>
</body>
</html>
