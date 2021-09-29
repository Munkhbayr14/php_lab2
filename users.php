<html>
    <body>
  <form>
				<table border = "1">
			<tr>
                <th>Нэр</th>
                <th>Овог</th>
                <th>Майл</th>
                <th>Нууц үг</th>
			</tr>
			
			<?php	  
		
			if ( isset( $_POST['fname']) && isset( $_POST['name']) && isset( $_POST['gmail']) && isset( $_POST['password']) )
			{
				$data1 = array();
			 $data = array( $_POST['fname'], $_POST['name'],$_POST['gmail'], $_POST['password'] );
			 foreach((array) $data as $value){
				 array_push($data1, $value);
				 }
				 echo "
				 <tr>
				 <td>".$data1['fname']."</td>
				 <td>".$data1['name']."</td>
				 <td>".$data1['gmail']."</td>
				 <td>".$data1['password']."</td>
				 </tr>
				";
			}
			
			
			 ?>
			</table>
</form>
			</body>
			</html>