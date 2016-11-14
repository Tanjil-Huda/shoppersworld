<!DOCTYPE HTML>
<html>
    <title>Read Data From Database Using PHP</title>
	<meta name="robots" content="noindex, nofollow" />
    <head>

    </head>
    
    <style>

    a{	text-decoration:none;font-size:14px; margin:2px 0 0 30px; padding:3px;color:#000;}
	h2{ text-align:center}
    span{ padding-left:20px;}
	tr{ height:25px;}
	tr td{width:250px;}
    </style>
    
    <body style=" margin:auto;padding-top:50px;width:70%; height:auto; font-family:Verdana; font-size:14px;">
		
					<table width="80%">	
				
                   
                     <tr><td><h2>Click User</h2></td><td colspan="2"><h2>Privilege Card User Details</h2></td></tr>
						<br><tr><td rowspan="15">
						<br>
                        <?php
						//Establishing Connection with Server
                        $connection = mysql_connect("localhost", "root", "");
						
						//Selecting Database
                        $db = mysql_select_db("jom_shop_new", $connection);
						
						//MySQL Query to read data
                        $query = mysql_query("select * from swbd_privilege_regi", $connection);
                        while ($row = mysql_fetch_array($query)) {
                            echo "<a href=\"readphp2.php?id={$row['user_id']}\">{$row['username']}</a>";
                            echo "<br />";
                        }
                        ?>
                       
					</td></tr>
					
					
					
                    <?php
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $query1 = mysql_query("select * from swbd_privilege_regi where user_id=$id", $connection);
                        while ($row1 = mysql_fetch_array($query1)) {
                            ?>                    

                                <!-- Displaying Data Read From Database -->
                                
                           
                                <tr><td><span>Full Name:</span> </td>
                                <td><?php echo $row1['fullname']; ?></td></tr>
                               			
                                <tr><td><span>E-mail:</span></td>
                                <td> <?php echo $row1['email']; ?></td></tr>
                               				
                                <tr><td><span>Name of Privilege Card:</span></td>
                                <td> <?php echo $row1['cardname']; ?></td></tr>
												
                                <tr><td><span>Address:</span></td>
                                <td> <?php echo $row1['address']; ?></td></tr>
												
                                <tr><td><span>City:</span></td>
                                <td> <?php echo $row1['city']; ?></td></tr>
												
                                <tr><td><span>Postal Code:</span></td>
                                <td> <?php echo $row1['poscode']; ?></td></tr>
												
                                <tr><td><span>Country:</span></td>
                                <td> <?php echo $row1['country']; ?></td></tr>
												
                                <tr><td><span>National ID Card:</span></td>
                                <td> <?php echo $row1['idcard']; ?></td></tr>
												
                                <tr><td><span>Mobile No:</span></td>
                                <td> <?php echo $row1['mobile']; ?></td></tr>
												
                                <tr><td><span>Bate of Birth:</span></td>
                                <td> <?php echo $row1['dob']; ?></td></tr>
												
                                <tr><td><span>Blood Group:</span></td>
                                <td> <?php echo $row1['bloodgroup']; ?></td></tr>
												
                                <tr><td><span>Nominee Name:</span></td>
                                <td> <?php echo $row1['nom_name']; ?></td></tr>
												
                                <tr><td><span>Nominee Mobile:</span> </td>
                                <td><?php echo $row1['nom_mobile']; ?></td></tr>
												
                                <tr><td><span>Relation With Nominee:</span></td>
                                <td> <?php echo $row1['rel_nom']; ?></td></tr>
                                </table>  
							
							
                           

        <?php
    }
}
?>
                 
<!-- Right Side Advertisement Div---->				
       
    </body>
</html>
<?php
//Closing Connection with Server
mysql_close($connection);
?>