<?php 
	include 'include/connection.php';
	define( 'API_ACCESS_KEY', 'AAAAkj1womI:APA91bGCm4Fh1vpzdBzJHbmLGbwCtLOWPTuv7N7Hh_V5HgR6txYHhmDzuGk8_e167r94Toi_9gzHJyIs4CFyc017eaJwLoRP6TNbFBddq95DeO5HHl2KPH0GFTwnEciEWhwuvxVb_1dD' );
	
	if (isset($_POST['submit_news'])) 
	{
    	$title = mysqli_real_escape_string($connection,$_POST['title']);

		$re_title = str_replace(' ', '-', strtolower($_POST['title']));

		$ftitle=mysqli_real_escape_string($connection,$re_title);

		$description =mysqli_real_escape_string($connection, $_POST['description']);

		$new_date = date('Y-m-d H:i:s',strtotime($_POST['new_date'].$_POST['new_time']));

		$cate_id = $_POST['cate_id'];

		$date = date('Y-m-d H:i:s');

		$i=$_FILES['thumbline']['name'];
		
		$edit_id = $_POST['edit_id'];
		
	    if($edit_id != '')
	    {
	        if($i != '')
	        {
    	        $ii="img/news/".$i;
        		$tmp=$_FILES['thumbline']['tmp_name'];
        		
        		move_uploaded_file($tmp,$ii);
        
        	    $sql="UPDATE loan_news set title='".$title."',slug='".$ftitle."',cate_id='".$cate_id."',descripation='".$description."',thumb='".$i."',news_date='".$new_date."',created_at='".$date."' where n_id='".$edit_id."' ";
        	
        
        		$query=$connection->query($sql);
        
        		if(count($query)> 0)
        		{
        			header("Location: shownewslist.php");
        		}
	        }
	        else
	        {
	           $sql="UPDATE loan_news set title='".$title."',slug='".$ftitle."',cate_id='".$cate_id."',descripation='".$description."',news_date='".$new_date."',created_at='".$date."' where n_id='".$edit_id."'";
        	
        
        		$query=$connection->query($sql);
        
        		if(count($query)> 0)
        		{
        			header("Location: shownewslist.php");
        		} 
	        }
	    }
	    else
	    {
    	
    		$ii="img/news/".$i;
    		$tmp=$_FILES['thumbline']['tmp_name'];
    		
    		move_uploaded_file($tmp,$ii);
    
    	    $sql="INSERT into loan_news (title,slug,cate_id,descripation,thumb,news_date,created_at) values ('$title','$ftitle','$cate_id','$description','$i','$new_date','$date')";
    	
    
    		$query=$connection->query($sql);
    
    		if(count($query)> 0)
    		{
    		     $msg= array (
                	"content_available"=> true,
                	"data" =>  array (
                		"body" =>  "",
                		"title" =>  "$title"
                	),
                	/**"data"=>  array (
                		
                	),**/
                	"to" =>  "/topics/news",
                	"priority" =>  "high",
                );
                
                // $fields = array
                // (
                //     "to" =>  "/topics/news",
                // 	'data'	=> $msg
                // );
                
                $fields = $msg;
                 
                $headers = array
                (
                	'Authorization: key=' . API_ACCESS_KEY,
                	'Content-Type: application/json'
                );
                
                $url = "https://fcm.googleapis.com/fcm/send";
        
                $ch = curl_init();

                curl_setopt($ch, CURLOPT_URL,$url);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
                curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
                // receive server response ...
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                
                $server_output = curl_exec ($ch);
                
                if($server_output === false ){echo curl_error($ch);}
                
                curl_close ($ch);
                
    			header("Location: shownewslist.php");
    		}
	    }
	}

 ?>