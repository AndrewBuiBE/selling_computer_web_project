<?php
	require_once ROOT . DS . 'services' . DS . 'products' . DS . 'LaptopServices.php';
	require_once ROOT . DS . 'services' . DS . 'products' . DS . 'PCServices.php';
	require_once ROOT . DS . 'services' . DS . 'products' . DS . 'ComputerMouseProductsServices.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="public/css/products.css" >
		<link rel="stylesheet" href="public/css/footer_container.css">
		<link rel="stylesheet" href="public/css/nav_bar.css">
		<title>Products | MTHH</title>
	</head>
	<body>
		<!-- includes nav bar -->
		<?php require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'nav_bar.php'; ?>
		<div class="product-container">
			<div class="left-bar">
				<div class="sidenav">
					<button class="dropdown-btn">Categories<i class = "fa fa-plus"></i></button>
					<div class="dropdown-container">
						<a href="all_products_page.php?view=view&id_categories=1">Tank top<span>(30000)</span></a>
						<a href="all_products_page.php?view=view&id_categories=1">Tank top<span>(30000)</span></a>
						<a href="all_products_page.php?view=view&id_categories=1">Tank top<span>(30000)</span></a>
						<a href="all_products_page.php?view=view&id_categories=1">Tank top<span>(30000)</span></a>
					</div>
					<button class="dropdown-btn">Brands<i class = "fa fa-plus"></i></button>
					<div class="dropdown-container">
						<a href="all_products_page.php?view=view&id_brands=1">Gucci<span>(4000)</span></a>
						<a href="all_products_page.php?view=view&id_brands=1">Gucci<span>(4000)</span></a>
						<a href="all_products_page.php?view=view&id_brands=1">Gucci<span>(4000)</span></a>
						<a href="all_products_page.php?view=view&id_brands=1">Gucci<span>(4000)</span></a>
					</div>
					<button class="dropdown-btn">Size<i class = "fa fa-plus"></i></button>
					<div class="dropdown-container">
						<a href="all_products_page.php?view=view&id_size=1">XL<span>(200)</span></a>
						<a href="all_products_page.php?view=view&id_size=1">XL<span>(200)</span></a>
						<a href="all_products_page.php?view=view&id_size=1">XL<span>(200)</span></a>
						<a href="all_products_page.php?view=view&id_size=1">XL<span>(200)</span></a>
					</div>
					<button class="dropdown-btn">Prices<i class = "fa fa-plus"></i></button>
					<div class="dropdown-container">
						<a href="all_products_page.php?view=view&id_price=200000"><200000đ</a>
						<a href="all_products_page.php?view=view&id_price=200000"><200000đ</a>
						<a href="all_products_page.php?view=view&id_price=200000"><200000đ</a>
						<a href="all_products_page.php?view=view&id_price=200000"><200000đ</a>
					</div>
				</div>
			</div>
			<div class="all-product">
				<div class="title" >
					<h2>Máy tính xách tay</h2>
				</div>
				<a href="search&label=laptop" id = 'xem'><u>Xem tất cả >> </u></a>
				<div class="row">
					<?php
								// get all laptop
								$service = new LaptopServices();
					$listLaptop = $service->getAll();
					$cnt = 0;
					foreach ($listLaptop as $laptop){
									$path = $laptop->getModel();
					$path = str_replace(' ', '-', $path);
					$cnt++;
					?>
					<div class="col-4">
						<div class="product-grid">
							<a href="<?php echo "details/" . $laptop->getProductID() . "/" . $path ?>">
								<div class="product-image">
									<img src=<?php echo "\"" . $laptop->getImage() . "\"" ?> >
									<span class="product-trend-label">Xem sản phẩm</span>
									<span class="product-discount-label">50%</span>
									<ul class="social">
										<li><a href="<?php echo "details/" . $laptop->getProductID() . "/" . $path ?>" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class = "fa fa-shopping-cart" onclick="cart_change()"></i></a></li>
										<li><a href="<?php echo "details/" . $laptop->getProductID() . "/" . $path ?>" data-toggle="tooltip" data-placement="top" title="Wish List"><i class = "fa fa-heart"></i></a></li>
										<li><a href="<?php echo "details/" . $laptop->getProductID() . "/" . $path ?>" data-toggle="tooltip" data-placement="top" title="Compare"><i class = "fa fa-random"></i></a></li>
										<li><a href="<?php echo "details/" . $laptop->getProductID() . "/" . $path ?>" data-toggle="tooltip" data-placement="top" title="Quick View"><i class = "fa fa-search"></i></a></li>
									</ul>
								</div>
							</a>
							<div class="product-content">
								<p><?php echo $laptop->getPrice() . " VNĐ"; ?><sup color='red';>đ</sup></p>
							</div>
						</div>
					</div>
					<?php
						if($cnt > 3) break;
					}
					?>
				</div>
				<div class="title" >
					<h2>Máy tính để bàn</h2>
				</div>
				<a href="search&label=pc" id = 'xem'><u>Xem tất cả >></u></a>
				<div class="row">
					<?php $service = new PCServices();
								$listPC = $service->getAll();
								$cnt = 0;
								foreach ($listPC as $pc){
									$path = $pc->getModel();
									$path = str_replace(' ', '-', $path);
									$cnt++;
					?>
					<div class="col-4">
						<div class="product-grid">
							<a href="<?php echo "details/" . $pc->getProductID() . "/" . $path ?>">
								<div class="product-image">
									<img src=<?php echo "\"" . $pc->getImage() . "\"" ?> >
									<span class="product-trend-label">Xem sản phẩm</span>
									<span class="product-discount-label">50%</span>
									<ul class="social">
										<li><a href="<?php;?>" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class = "fa fa-shopping-cart" onclick="cart_change()"></i></a></li>
										<li><a href="#" data-toggle="tooltip" data-placement="top" title="Wish List"><i class = "fa fa-heart"></i></a></li>
										<li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class = "fa fa-random"></i></a></li>
										<li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class = "fa fa-search"></i></a></li>
									</ul>
								</div>
							</a>
							<div class="product-content">
								<p><?php echo $pc->getPrice() . " VNĐ"; ?><sup color='red';>đ</sup></p>
							</div>
						</div>
					</div>
					<?php
						if($cnt > 3) break;
					}
					?>
				</div>
				<div class="related-items">
					<div class="title">
						<h2>Phụ kiện máy tính</h2>
					</div>
					<a href="search&label=mouse" id = 'xem'><u>Xem tất cả >></u></a>
					<div class="row">
						<?php $service = new ComputerMouseProductsServices();
						$listMouse = $service->getAll();
						$cnt = 0;
						foreach ($listMouse as $mouse){
										$path = $mouse->getModel();
										$path = str_replace(' ', '-', $path);
						$cnt++;
						?>
						<div class="col-4">
							<div class="product-grid">
								<a href="<?php echo "details/" . $mouse->getProductID() . "/" . $path ?>">
									<div class="product-image">
										<img src=<?php echo "\"" . $mouse->getImage() . "\"" ?> >
										<span class="product-trend-label">Xem sản phẩm</span>
										<span class="product-discount-label">50%</span>
										<ul class="social">
											<li><a href="<?php;?>" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class = "fa fa-shopping-cart" onclick="cart_change()"></i></a></li>
											<li><a href="#" data-toggle="tooltip" data-placement="top" title="Wish List"><i class = "fa fa-heart"></i></a></li>
											<li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class = "fa fa-random"></i></a></li>
											<li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class = "fa fa-search"></i></a></li>
										</ul>
									</div>
								</a>
								<div class="product-content">
									<p><?php echo $mouse->getPrice() . " VNĐ"; ?><sup color='red';>đ</sup></p>
								</div>
							</div>
						</div>
						<?php
							if($cnt > 3) break;
						}
						?>
					</div>
				</div>
				<div class="next-pages">
					<ul>
						<li><a href="">1</a></li>
						<li><a href="">2</a></li>
						<li><a href="">3</a></li>
						<li><a href="">4</a></li>
						<a href=""><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
					</ul>
				</div>
			</div>
		</div>

<script type="text/javascript" src = "public/javascript/product.js"></script>