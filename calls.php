<?php


    session_start();    
    include('dbconnect.php');
    
    if(isset($_POST["category"])){
		$category_query="select * from categories";
		$run_query=mysqli_query($conn,$category_query);
        echo "
                    <ul class='list-group'>
					<li class='list-group-item ' style='background-color:black;'><a href='shop.php'><h4 style='color:white'>Categories</h4></a></li>";
		if(mysqli_num_rows($run_query)){
			while($row=mysqli_fetch_array($run_query)){
				$cid=$row['cat_id'];
				$cat_name=$row['category_name'];
				echo "<a href='#' class='category hyplnk' cid='$cid'><li class='list-group-item litm'>$cat_name</li></a>";
			}
			echo "</ul><br>";
		}
	}
	
	if(isset($_POST["brand"])){
		$category_query="SELECT * FROM companies";
		$run_query=mysqli_query($conn,$category_query);
        echo "
                <ul class='list-group'>
					<li class='list-group-item 'style='background-color:black;'><a href='shop.php'><h4 style='color:white'>Brands</h4></a></li>";
		if(mysqli_num_rows($run_query)){
			while($row=mysqli_fetch_array($run_query)){
				$bid=$row['comp_id'];
				$brand_name=$row['comp_name'];
				echo "<a href='#' class='brand hyplnk' bid='$bid'><li class='list-group-item litm'>$brand_name</li></a>";
			}
			echo "</ul>";
		}
    }



	if(isset($_POST['addToProduct'])){
		$gid=$_POST['gid'];
		$uid=$_SESSION['uname'];
		$sql = "SELECT * FROM cart WHERE gameid = '$gid' AND uname = '$uid'";
		$run_query=mysqli_query($conn,$sql);
		$count=mysqli_num_rows($run_query);
		if($count>0)
		{
			echo "<div class='alert alert-danger' role='alert'>
				  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
				  <strong>Success!</strong> Already added!
					</div>";
					exit();
		}
		else
		{
			$sql = "SELECT * FROM games WHERE gid = '$gid'";
			$run_query = mysqli_query($conn,$sql);
			$row = mysqli_fetch_array($run_query);
			$id = $row["gid"];
			$pro_title = $row["name"];
			$pro_image = $row["gameimg"];
			$pro_price = $row["price"];

			
			$sql="INSERT INTO cart(uname,gameid,image,name,price,totprice) VALUES('$uid','$gid','$pro_image','$pro_title','$pro_price','$pro_price')";
			$run_query = mysqli_query($conn,$sql);
			if($run_query){
				echo "true";
			}
		}
		
	}




	if(isset($_POST['get_selected_Category']) || isset($_POST['get_selected_brand']))
	{
		if(isset($_POST['get_selected_Category'])){
			$cid=$_POST['cat_id'];
			$sql="SELECT * FROM games WHERE catid='$cid'";
			$run_query=mysqli_query($conn,$sql);
		if(mysqli_num_rows($run_query)){
		while($row=mysqli_fetch_array($run_query)){
			$gid=$row['gid'];
				$catid=$row['catid'];
				$compid=$row['compid'];
				$name=$row['name'];
				$price=$row['price'];
				$img=$row['gameimg'];

				echo "
				<div class='col-md-5 w3-card ml-5 mb-5' style='display:inline-block;background-color:rgba(85, 85, 85, 0.141)'>
				<div class='row justify-content-center'>
				<a href='#' class='imageproduct  mt-3 mb-3' gid='$gid'>
						<img src='prodimages/$img' class='gamima' style='width:200px; height:250px;' >
				</a>
				<div class='row justify-content-center mb-2'>
				<button gid='$gid' class='quicklook py-4  mr-2'>Quick look</button>
				<button gid='$gid' class='product py-4 ml-2'>Add to Cart</button>
				</div>
				</div>
					<div class='row' style='background-color:black;color:white;height:40px;'><h4 class='usrhed ml-2'>$name</h4></div>
					<div class='row' style='background-color:black;color:white;height:40px;'><h5 class='ml-2'style='font-weight:300'>Rs $price</h5></div>
				</div>";
		}
		
	}
		}
		elseif(isset($_POST['get_selected_brand'])){
			$bid=$_POST['bid'];
			$sql="SELECT * FROM games WHERE compid='$bid'";
			$run_query2=mysqli_query($conn,$sql);
			if(mysqli_num_rows($run_query2)){
			while($row=mysqli_fetch_array($run_query2)){
			$gid2=$row['gid'];
				$catid2=$row['catid'];
				$compid2=$row['compid'];
				$name2=$row['name'];
				$price2=$row['price'];
				$img2=$row['gameimg'];

				echo "<div class='col-md-5 w3-card ml-5 mb-5' style='display:inline-block;background-color:rgba(85, 85, 85, 0.141)'>
				<div class='row justify-content-center'>
				<a href='#' class='imageproduct  mt-3 mb-3' gid='$gid2'>
						<img src='prodimages/$img2' class='gamima' style='width:200px; height:250px;' >
				</a>
				<div class='row justify-content-center mb-2'>
				<button gid='$gid2' class='quicklook py-4 mr-2'>Quick look</button>
				<button gid='$gid2' class='product py-4 ml-2'>Add to Cart</button>
				</div>
				</div>
					<div class='row' style='background-color:black;color:white;height:40px;'><h4 class='usrhed ml-2'>$name2</h4></div>
					<div class='row' style='background-color:black;color:white;height:40px;'><h5 class='ml-2'style='font-weight:300'>Rs $price2</h5></div>
				</div>"
				;
		}
		
	}
		}

		
	}













	if(isset($_POST['removeFromCart']))
	{
		$gid=$_POST['gid'];
		$uid=$_SESSION['uname'];
		$sql="DELETE FROM cart WHERE gameid='$gid' AND uname='$uid'";
		$run_query=mysqli_query($conn,$sql);
		if($run_query){
			echo "
				<div class='alert alert-danger' role='alert'>
  					<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  					<strong>Success!</strong> Item removed from cart!
				</div>
			";
		}	
	}




    if(isset($_POST['cartcount'])){
		if(!(isset($_SESSION['uname']))){echo "0";}else{
		$uid=$_SESSION['uname'];
		$sql="SELECT * FROM cart WHERE uname='$uid'";
		$run_query=mysqli_query($conn,$sql);
		$count=mysqli_num_rows($run_query);
		echo $count;
		}
	}








    if(isset($_POST['page']))
	{
		$sql="SELECT * FROM games";
		$run_query=mysqli_query($conn,$sql);
		$count=mysqli_num_rows($run_query);
		$pageno=ceil($count/6);
		for($i=1;$i<=$pageno;$i++)
		{
			echo "
				<li><a href='#' page='$i' class='page py5'>$i</a></li>
			";
		}
    }
    



	if(isset($_POST['getProduct'])){

		$limit=	6;
		if(isset($_POST['setPage'])){
			$pageno=$_POST['pageNumber'];
			$start=($pageno * $limit)-$limit;
		}
		else{$start=0;}
		if(isset($_POST['price_sorted'])){
			$product_query="SELECT * FROM games ORDER BY price";
		}
		elseif(isset($_POST['pop_sorted'])){
			$product_query="SELECT * FROM games ORDER BY RAND()";
		}
		else{
		$product_query="SELECT * FROM games LIMIT $start,$limit";
		}
		$run_query=mysqli_query($conn,$product_query);
		if(mysqli_num_rows($run_query)){
			while($row=mysqli_fetch_array($run_query)){
				$gam_id=$row['gid'];
				$cat_id=$row['catid'];
				$compid=$row['compid'];
				$name=$row['name'];
                $price=$row['price'];
                $cpu=$row['cpu'];
				$gui=$row['gui'];
                $ram=$row['ram'];
                $os=$row['os'];
				$size=$row['size'];
				$img=$row['gameimg'];

				echo "
				<div class='col-md-5 w3-card ml-5 mb-5' style='display:inline-block;background-color:rgba(85, 85, 85, 0.141)'>
				<div class='row justify-content-center'>
				<a href='#' class='imageproduct  mt-3 mb-3' gid='$gam_id'>
						<img src='prodimages/$img' class='gamima' style='width:200px; height:250px;' >
				</a>
				<div class='row justify-content-center mb-2'>
				<button gid='$gam_id' class='quicklook py-4 mr-2'>Quick look</button>
				<button gid='$gam_id' class='product py-4 ml-2'>Add to Cart</button>
				</div>
				</div>
					<div class='row' style='background-color:black;color:white;height:40px;'><h4 class='usrhed ml-2'>$name</h4></div>
					<div class='row' style='background-color:black;color:white;height:40px;'><h5 class='ml-2'style='font-weight:300'>Rs $price</h5></div>
				</div>
				";
							
			}
		}
    }
    



    if(isset($_POST['product_detail'])){
		$gid=$_POST['gid'];
		$sql="SELECT * FROM games WHERE gid='$gid'";
		$run_query=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($run_query);
        $gam_id=$row['gid'];
		$name=$row['name'];
        $price=$row['price'];
        $cpu=$row['cpu'];
		$gui=$row['gui'];
        $ram=$row['ram'];
        $os=$row['os'];
		$size=$row['size'];
        $image=$row['gameimg'];
        

		echo "
				<div class='row'>
					<div class='col-md-6'>
						<div class='row'> <div class='col-md-12'><h1>$name</h1></div></div><br><br>
						<div class='row'> <div class='col-md-12'>Price:<h3 class='text-muted'>$price</h3></div></div>
                        </div>
					<div class='col-md-6'>
						<img src='prodimages/$image' style='width:250px;height:300px;'>
					</div>	
				</div>

				<div class='row'> 

						<div class='col-md-12'>Minimum Requirements:<h4 class='text-muted'></h4></div>

						<table class='table table-striped text-center'>
						  <tr>
							<th>CPU</th>
							<td>$cpu</td>
						  </tr>
						  <tr>
							<th>GUI</th>
							<td>$gui</td>
						  </tr>
						  <tr>
							<th>RAM</th>
							<td>$ram</td>
						  </tr>
						  <tr>
							<th>OS</th>
							<td>$os</td>
						  </tr>
						  <tr>
							<th>SIZE</th>
							<th>$size</th>
						  </tr>
						</table>
				</div>
		";
	}
	
	



	if(isset($_POST['dispcart'])){
		$luidi = $_SESSION['uname'];
	
	
		$seql2 = "select sum(totprice) as maxim from cart where uname='$luidi'";
		$runq=mysqli_query($conn,$seql2);
		$rowss=mysqli_fetch_array($runq);
		$total=$rowss['maxim'];

	
	
		$seql = "select * from cart where uname='$luidi'";
	$run_query=mysqli_query($conn,$seql);
	$count=mysqli_num_rows($run_query);
	if($count == 0){
		echo "<div class='row justify-content-center mt-5'>
        <img src='https://rukminim1.flixcart.com/www/800/800/promos/16/05/2019/d438a32e-765a-4d8b-b4a6-520b560971e8.png?q=90' width='221.91px' height='162px'/>
    </div>
    <div class='row text-center justify-content-center mb-2'>
            <h4>Your cart is empty!</h4>
    </div>
    <div class='row mb-5 pb-5 justify-content-center'>
            <a href='shop.php' class='btn btn-primary py-3'>Start Shopping</a>
    </div>";
	}
	else{

		if(mysqli_num_rows($run_query)){
			echo "<div class='container mt-5'>
			<table class='table table-striped text-center mt-2'>
						<thead>
						  <tr>
							<th>Product</th>
							<th>Name</th>
							<th>Price</th>
							<th></th>
						  </tr>
						</thead>";
			while($row=mysqli_fetch_array($run_query)){
				$gid=$row['gameid'];
				$img=$row['image'];
				$name=$row['name'];
				$price=$row['price'];

				echo "
							<tbody>
							  <tr>
								<td><img src='prodimages/$img' style='width:100px;height:130px;'></td>
								<td class='pt-5'>$name</td>
								<td class='pt-5'> $price</td>
								<td class='pt-5'><button gid='$gid' type='button' class='remove' onclick='cartcount()'  style='background-color:#8b0000;color:white;border:none;border-radius:5px;'>
									x</button>
								</td>
							  </tr>
				
				";

			}
			echo "<tfoot ><td class='text-right'  colspan='3'><b>Sub total</b></td>
					<td>$total</td></tfoot>
			</tbody></table>
			<div class='container text-right'>
			<a href='checkout.php' class='btn btn-primary py-3 mb-5'>Proceed to checkout</a>
			</div>
			";
		}
	}


	}





	if(isset($_POST['payment_checkout'])){
		$uid=$_SESSION['uname'];
		$sql3="DELETE FROM cart WHERE uname='$uid'";
		$run_query3=mysqli_query($conn,$sql3);
		if($run_query3){
			echo "true";
		}
	}

 ?>   