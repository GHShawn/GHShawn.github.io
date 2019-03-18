<?php
	require("../../240dbConn.php");
	
	if($conn){
		//if there is sent in name and comment, add to the db
		if(!empty($_POST['iname'])&& !empty($_POST['icomment'])){
			//add to the db
			$stmt=$conn->prepare('INSERT INTO `comments` (name, comment) VALUES (?,?)');
			$stmt->bind_param("ss", $_POST['iname'], $_POST['icomment']);
			$stmt->execute();
			$stmt->close();
		}
				//need to be in the html to dump out the table.
		//go get all of the contents of the db
		$q="SELECT * FROM `comments`";
		$re=$conn->query($q);
		if($re){
			while($rowHolder = mysqli_fetch_array($re, MYSQLI_ASSOC)){
				$records[]=$rowHolder;
			}
		}
	}
	$page="comment1";
	$header="Comment";
	$image="assets/images/bg.jpg";
	include('assets/includes/header.php');
?>

	<h3>Comment</h3>
	<form style="margin-left:34%" action = "comment.php" method="POST" onsubmit="return validate()">
		Name: <input type="text" id="name" name="iname"/>
		Comment: <input type="text" id="comment" name="icomment"/>
		<input type="submit" value="Enter" />
	</form>
	<hr/>
	<div id="list">
	<?php
		//step 5!
		
		$output = '<table>';
		$th= array();
		
		foreach($records as $currRecord){  //grep each row for results
			//to write out just one table header 
			if(empty($th)){
				$th = array_keys($currRecord);
				$output.= '<tr><th>'.implode('</th><th>',$th).'</th></tr>';
			}
			$output .= '<tr>';
			foreach($currRecord as $name=>$val){   //grep each col of the row
				$output .= '<td>' .$val . '</td>';
			}
			$output.= '</tr>';
		}
		echo $output.'</table>';
	?>
	</div>
<?php include('assets/includes/footer.php');?>