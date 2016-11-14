<!DOCTYPE HTML>
<html>
    <title>Read Data From Database Using PHP</title>
	<meta name="robots" content="noindex, nofollow" />
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <style>
	tr{ height:35px;}
    tr td{ width:200px;}
	a{ font-family:Verdana; font-size:14px}
	.form{ font-family:Verdana; font-size:13px}
    </style>
    
    <body>

        <div class="maindiv">
            <div class="divA" >
                <div class="divB">
                    <div class="divD">
                        <p>Click On Menu</p>
                        <hr/>
                        <?php
						//Establishing Connection with Server
                        $connection = mysql_connect("localhost", "root", "");
						
						//Selecting Database
                        $db = mysql_select_db("jom_shop_new", $connection);
						
						//MySQL Query to read data
                        $query = mysql_query("select * from swbd_privilege_regi", $connection);
                        while ($row = mysql_fetch_array($query)) {
                            echo "<a href=\"index.php?id={$row['user_id']}\">{$row['username']}</a>";
                            echo "<br />";
                        }
						
                        ?>
                    </div>
                    <?php
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $query1 = mysql_query("select * from swbd_privilege_regi where user_id=$id", $connection);
                        while ($row1 = mysql_fetch_array($query1)) {
                            ?>                    


                            <div class="form"> 
                                <h2>---Privilege Card User Details---</h2>
                                <hr/>
                                <br><br><table>
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
								
								<tr><td><span>T & C:</span></td>
                                <td> <?php echo $row1['tnc']; ?></td></tr>
                                </table>  
							
                            </div>
<p align="right" style="position:relative; left:50px;"><a href="" style="color:#000;">back to main</a></p>
        <?php
    }
}
?>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
	            </div>  
<!-- Right Side Advertisement Div---->				
            
        </div>
    </body>
</html>
<?php
//Closing Connection with Server
mysql_close($connection);
?>