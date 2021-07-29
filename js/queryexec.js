$(document).ready(function(){
	cat();
	brand();
	product();
	cartcont();
	
// category and brand display

	function cat(){
		$.ajax({
			url: "calls.php",
			method: "POST",
			data: {category:1},
			success: function(data){
				$('#get_cat').html(data);
			}
		})
	}


	function brand(){
		$.ajax({
			url: "calls.php",
			method: "POST",
			data: {brand:1},
			success: function(data){
				$('#get_brand').html(data);
			}
		})
	}
	
	function product(){
		$.ajax({
			url: "calls.php",
			method: "POST",
			data: {getProduct:1},
			success: function(data){
				$('#get_product').html(data);
			}
		})
	}



	function cartcont(){
		$.ajax({
			url: "calls.php",
			method: "POST",
			data: {dispcart:1},
			success: function(response){
				$('#cartcontents').html(response);
			}
		})
	}

	
//item removal

$('body').delegate('.remove','click',function(e){
	e.preventDefault();
	var gid=$(this).attr('gid');
	$.ajax({
		url: 'calls.php',
		method: 'POST',
		data: {removeFromCart:1,gid:gid},
		success: function(data){
			cartcont();
		}
	})
})

// checkout


$('#checkout_btn').click(function(){
	$.ajax({
		url: 'calls.php',
		method: 'POST',
		data: {payment_checkout:1},
		success: function(){
			window.location.href = "successcheck.php";
		}
	})
})



// choosing selected category

$("body").delegate(".category","click",function(event){
	event.preventDefault();
	var cid=$(this).attr('cid');
	$.ajax({
		url: "calls.php",
		method: "POST",
		data: {get_selected_Category:1, cat_id:cid},
		success: function(data){
			$('#get_product').html(data);
		}
	})
})

$("body").delegate(".brand","click",function(event){
	event.preventDefault();
	var bid=$(this).attr('bid');
	$.ajax({
		url: "calls.php",
		method: "POST",
		data: {get_selected_brand:1, bid:bid},
		success: function(data){
			$('#get_product').html(data);
		}
	})
})

$('body').delegate('.imageproduct','click',function(e){
	e.preventDefault();
	var gid=$(this).attr('gid');
	$.ajax({
		url: 'calls.php',
		method: 'POST',
		data: {product_detail:1,gid:gid},
		success: function(data){
			//console.log(data);
			$('#dynamic_content').html(data);
			$('#prod_detail').modal('show');
		}
	})
})

















// ===========================================

// ===========================================================================
	// signup and login
	$('#signup_btn').click(function(e){
		e.preventDefault();
		$.ajax({
			url: "register.php",
			method: "POST",
			data: $("form").serialize(),
			success: function(data){
				$("#err_msg").html(data);
				$("form").trigger("reset");
			}
		})
	})



	$('#login').click(function(ev){
		ev.preventDefault();
		$.ajax({
			url: "login.php",
			method: "POST",
			data: $("form").serialize(),
			success: function(response){
				if(response=="sucess"){
					window.location.href="home.php";
				}
				else if(response=="error"){
					$("form").trigger("reset");
					$("#err_msg2").html("<div class='alert alert-danger alert-dismissible' role='alert'>Invalid Credentials!</div>");
					
				}
			}
		})
	})


// -------------------------------------------------------------------------------------------
// cart num display
	cart_count();

	function cart_count(){
		$.ajax({
			url: 'calls.php',
			method: 'POST',
			data: {cartcount:1},
			success: function(data){
				$('.bdje').html(data);
			}
		})
	}

// adding item to cart

	$('body').delegate('.product','click',function(){
		var gid = $(this).attr('gid');
		$.ajax({
			url: "calls.php",
			method: "POST",
			data: {addToProduct:1,gid:gid},
			success: function(resp){
				cart_count();
			}
		})
	})

// add end

// page number  and product on page
	page();
	function page(){
		$.ajax({
			url: 'calls.php',
			method: 'POST',
			data: {page:1},
			success: function(data){
				$('#pageno').html(data);
			}
		})
	}
		
	$('body').delegate('.page','click',function(e){
		e.preventDefault();
		var pno=$(this).attr('page');
		$.ajax({
			url: "calls.php",
			method: "POST",
			data: {getProduct:1, setPage:1, pageNumber:pno},
			success: function(data){
				$('#get_product').html(data);
				$('body').animate({scrollTop:0},500);
			}
		})
	})
// prod and page num end

// modal display
	$('body').delegate('.quicklook','click',function(event){
		event.preventDefault();
		var gid=$(this).attr('gid');
		$.ajax({
			url: 'calls.php',
			method: 'POST',
			data: {product_detail:1,gid:gid},
			success: function(data){
				//console.log(data);
				$('#dynamic_content').html(data);
				$('#prod_detail').modal('show');
			}
		})
	})
// display end












})