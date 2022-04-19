<?php
$i=0;
	if(isset($_GET['action']) && $_GET['action']=="add"){

		$id=intval($_GET['id']);

		if(isset($_SESSION['cart'][$id])){
			$_SESSION['cart'][$id]['quantity']++;
		}
		else{
			$sql_s="SELECT * FROM products
				WHERE id_product={$id}";
			$query_s=mysqli_query($db,$sql_s);
			if(mysqli_num_rows($query_s)!=0){
				$row_s=mysqli_fetch_array($query_s);

				$_SESSION['cart'][$row_s['id_product']]=array(
						"quantity" => 1,
						"price" => $row_s['price']
					);
			}else{
				$message="This product id it's invalid!";
			}
		}
	}
?>
	<?php
		if(isset($message)){
			echo "<h2>$message</h2>";
		}
	?>
			<table>


				<?php
if(isset($_SESSION['username']))
{
					$sql="SELECT * FROM products ORDER BY id_product ASC ";
					$query=mysqli_query($db,$sql);

					while ($row=mysqli_fetch_array($query) ) {
						$i=$i+1;
						if($i==$_SESSION['idx'])
						{

				?>
						<tr>

							<form method="post" action="index.php">

									<button type="submit" class="btn" style="margin-left:170px;" formaction="<?php echo $_get['page'];?>?page=products&action=add&id=<?php echo $row['id_product'] ?>" name="cantitate" ><img src="cos.png" alt="Italian Trulli">
									</button>
							</form>
						</tr>
				<?php

}
}
}
				?>

			</table>
