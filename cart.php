<?php
include('server.php');
if(is_array($_POST['quantity']))
{
	if(isset($_POST['submit'])){
		foreach($_POST['quantity'] as $key => $val) {
			if($val==0) {
				unset($_SESSION['cart'][$key]);
			}else{
				$_SESSION['cart'][$key]['quantity']=$val;
			}
		}

	}
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="register.css">
		<title></title>

	</head>
	<body style="background-color:lavender;">



<form method="post" action="index.php?page=cart" style="">

	<table style="width:100%;">

			<tr style="">
					<th style="font-size:16px;width:300px;">Imagine</th>
					<th style="font-size:16px;width:300px;">Nume</th>
					<th style="font-size:16px;width:25px;">Cantitate</th>
					<th style="font-size:16px;width:100px;">Preț/bucata</th>
					<th style="font-size:16px;width:100px;">Preț</th>
			</tr>

			<?php
				if(is_array($_SESSION['cart']))
				{
					$sql="SELECT * FROM products WHERE id_product IN (";

									foreach($_SESSION['cart'] as $id => $value) {
											$sql.=$id.",";
									}

									$sql=substr($sql, 0, -1).") ORDER BY name ASC";
									$query=mysqli_query($db,$sql);
								}

									$totalprice=0;

									if(!empty($query))
									{

									while($row=mysqli_fetch_array($query)){
											$subtotal=$_SESSION['cart'][$row['id_product']]['quantity']*$row['price'];
											$totalprice+=$subtotal;
									?>
											<tr>
													<td><img src="images/<?php echo $row['imagine'] ?> " alt="asd"; class="img-responsive" ></td>
													<td style="font-size:16px;font-weight: bold;"><?php echo $row['name'] ?></td>
													<td style="font-size:16px;"><input type="text" name="quantity[<?php echo $row['id_product'] ?>]" size="5" value="<?php echo $_SESSION['cart'][$row['id_product']]['quantity'] ?>" /></td>
													<td style="font-size:16px;"><?php echo $row['price'] ?>Lei</td>
													<td style="font-size:16px;"><?php echo $_SESSION['cart'][$row['id_product']]['quantity']*$row['price'] ?>Lei</td>

											</tr>
									<?php

									}
								}
			?>
									<tr>
											<td colspan="5">Preț total: <?php echo $totalprice ?> Lei</td>

									</tr>

	</table>
		<br />
	<button type="submit" name="submit">Update Cart</button>
</form>
<br />
<p>Pentru eliminarea unui produs, setati catiatea 0 și apoi apăsați „Update Cart” </p>

</body>
</html>
