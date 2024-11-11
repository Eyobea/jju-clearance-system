<!DOCTYPE HTML"><html>
 <head>
 <?php 
	include_once('header.php');	 
 ?>
 
 </head>
 <body>
  	<table id="navigation" align="center" style="width:device-width;">
	<tr>
		<td class="time">
			<font  color="white" style="font-family:times new roman">
				<?php
					$Today=date('y:m:d');
					$new=date('l, F d, Y',strtotime($Today));
					echo $new;
				?>
			</font> 
		</td>
		<td class="nav">
			<a href="manage.php"><b>..:: update material information ::..</b></a>
		</td>
		<td class="lio">
			<ul>
				<?php
					session_start();
					if(isset($_SESSION["username"]))
					{
						$userNameD = ucfirst($_SESSION["username"]);
				?>
				<li>
					<?php
						$userNameD = ucfirst($_SESSION["username"]);
						$sql="select * from role where username='$userNameD'";
						$qr=mysql_query($sql);
						while($row = mysql_fetch_array($qr))
						{
							$sfid=$row['staffId'];
							$fn=$row['fullName'];
							$role=$row['role'];
						}
						$sqls="select * from staff where staffId='$sfid'";
						$qrs=mysql_query($sqls);
						while($row = mysql_fetch_array($qrs))
						{
							$sfid=$row['staffId'];
							$fn=$row['Fname'];
							$mn=$row['Mname'];
							$camp=$row['campus'];				
						}
						echo "<a href='$role.php'><div id='un' class='icon-large icon-user'> ".$fn.' '.$mn."</div></a>";
					?>
				</li> 
				<li class="lo"><a href="../index.php?logged=out">Logout</a></li> 
				<?php
				}
				else
				{ 
					?> 
						<li class="lis"><a href="#login">Login</a></li>               
					<?php
				}
				?>
					
			</ul>
		</td>
		</tr>
	</table>
	
<table id="content" align="center" style="width:device-width;"
	<tr>
		<td class="sidebar">
			<div class="menu">
				<font>Menu</font>
				</div>
			<div class="menuList">
				<a href="officer.php"><span class="icon-large icon-home"></span> &nbsp;Home</a></br/>
						<a href="request.php"><span class="icon-large icon-save"></span> &nbsp;Clearance Request
                <?php
              $que = "select count(*) As total from request where status='0' AND dormitory IS NULL";
              
              $res = mysql_query($que);
              $x=mysql_fetch_array($res);
                  $id = $x['total'];              
                  echo "(".$id.")";
                 ?>        
                </a><br/-->		
              	<a href="manageItem.php"><span class="icon-large icon-tags"></span> &nbsp;Registor Material</a><br/-->
				<a href="issuloan.php"><span class="icon-large icon-tags"></span> &nbsp;view issue loan</a><br/-->
				<a href="http://:www.jju.edu.et"><span class="icon-large icon-globe"></span> &nbsp;jju Site </a></br/>
			</div>
		</td>
		<td class="login_area">
			<table width="100%">
				<tr>
				<td class="userl">
					<p><?php echo $role ?> Page</p>		
				</td>
				</tr>
			</table>			
			<div class="regform">
						<?php
			$matid = $_REQUEST['key'];
			$sql=mysql_query("select * from material where materialId='$matid'");
			$result=mysql_num_rows($sql);
			$row=mysql_fetch_array($sql);
			$matrialid=$row['materialId'];
			$materialname=$row['materialName'];
			$quantity=$row['quantity'];
			$price=$row['unitprice'];
		?>
			<form  method="POST" action="#">
				<table   cellpadding='4'  cellspacing="0" style="margin-left:25%;width:50%;border-radius:10px; border:5px solid rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4);">	 
					 <tr  bgcolor="lightblue"><th border="1" colspan="3" style="bgcolor:lightblue"><font><?php echo $materialname;?>&nbsp;<?php echo $quantity;?>&nbsp;&nbsp;&nbsp;</font><a href="manageItem.php"><span style="color:red;margin-left:60%;" class="icon-large icon-remove" align="right" title="close"></span></a></th></tr>
					<tr>

					<tr><td colspan='2'>&nbsp;</td></tr>
						
						<tr><td>material Id:</td><td><input type='text' name='matid' value="<?php echo $matrialid;?>"></td></tr>
						<tr><td>mateerial name:</td><td><input type='text' name='matname' value="<?php echo $materialname;?>"></td></tr>
						<tr><td>quantity :</td><td><input type='text' name='qnt' value="<?php echo $quantity;?>"></td></tr>
						<tr><td>Unit price:</td><td><input  type='text' name='price' value="<?php echo $price;?>"></td></tr>
						
						</td></tr>
						<tr><td colspan='2'>&nbsp;</td></tr>
						<tr><td colspan='2'>&nbsp;</td></tr>
						<tr><td colspan='2' align='center'><input type='submit' name='update' value='Save Changes'></tr></td>
					</table>
				<?php
	  

				?>
 
 <?php
  if(isset($_POST['update']))
  {
	           $matid=$_POST['matid'];
               $matname=$_POST['matname'];
				$qnt=$_POST['qnt'];
				$price=$_POST['price'];
				
  $update = mysql_query("update material set  materialName='$matname',quantity='$qnt',unitprice='$price' WHERE materialId='$matid'") or die(mysql_error());
  if(!$update)
  {
  echo"Error".die(mysql_error());
  }
  else
  {	
echo "<script>window.location='manageItem.php';</script>";
 
  }}
  ?>
  </form> 


			
		</div>
		</td>
		</tr>
    </table>
	<script>
	$("#mydata").dataTable();
	</script>
	<table id="footer" align="center" style="width:device-width;">
	<tr >
		<td><p class="f">Copyright &copy; reserved 2024-jju-CMS </p></td>
	</tr>
	</table>
 </body>
</html>