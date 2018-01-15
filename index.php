
<?php 
	
	$conn  = mysqli_connect('localhost', 'root', '', 'h');
	$sql = 'SELECT * from girl';
	$result = mysqli_query($conn,$sql);

	if ($result) {
	    while($row = mysqli_fetch_assoc($result)) {
	        echo '<thead><a href="'.$row["url"].'">'.$row["id"].'</a></thead>
	        ';
	  //    echo '// <thead><a href="'.$row["url"].'">'.$row["id"].'</a></thead>
			// <img src="'.$row["url"].'" alt="" class="img-responsive">
			// <thead><a href="'.$row["url"].'" download>'.$row["id"].'</a></thead>
			    
	  //    ';
	    }
	} else {

	    echo "0 results";
	}
 ?>
