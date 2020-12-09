<div class="container product_section_container">
	<div class="row">
		<div class="col product_section clearfix">

			<!-- Breadcrumbs -->

			<div class="breadcrumbs d-flex flex-row align-items-center">
				<ul>
					<li><a href="<?= base_url('home'); ?>">Home</a></li>
					<li class="active"><a href="<?= base_url('home/shop'); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i>Shop</a></li>
				</ul>
			</div>

			<!-- Sidebar -->

			<div class="sidebar">
				<div class="sidebar_section">
					<div class="sidebar_title">
						<h5>Product Category</h5>
					</div>
					<ul class="sidebar_categories">
						<li><a href="#">Shirt</a></li>
						<li><a href="#">T-shirt</a></li>
						<li><a href="#">Jacket</a></li>
						<li><a href="#">Pants</a></li>
						<li><a href="#">Shoes</a></li>
						<li><a href="#">Accessories</a></li>
					</ul>
				</div>
			</div>

			<!-- Main Content -->

			<div class="main_content">

				<!-- Products -->

				<div class="products_iso">
					<div class="row">
						<div class="col">

							<!-- Product Sorting -->

							<div class="product_sorting_container product_sorting_container_top">

								<div class="pages d-flex flex-row align-items-center">
									<div class="page_current">
										<span>1</span>
										<ul class="page_selection">
											<li><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
										</ul>
									</div>
									<div class="page_total"><span>of</span> 3</div>
									<div id="next_page" class="page_next"><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
								</div>

							</div>

							<!-- Product Grid -->




							<div class="product-grid">
								<div class="row col-sm-12">
									<!-- Product 1 -->
									<?php foreach ($jual as $j) : ?>
										<div class="product-item men">
											<div class="product discount product_filter">
												<div class="product_image">
													<img src="<?= base_url('assets/images/jual/') . $j['image']; ?>">
												</div>
												<div class=" product_info">
													<a href="<?= base_url('home/detail/') . $j['id_jual']; ?>">
														<h6 class="product_name"><?= $j['nama_barang'] ?></h6>
													</a>
													<div class="product_price">Rp. <?= number_format($j['harga_barang'], 0, ',', '.'); ?></div>
												</div>
											</div>
											<div class="red_button add_to_cart_button">
												<a href="<?= base_url('cart/tambah/') . $j['id_jual']; ?>">add to cart</a>
											</div>
										</div>
									<?php endforeach ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Benefit -->

<div class="benefit">
	<div class="container">
		<div class="row benefit_row">
			<div class="col-lg-3 benefit_col">
				<div class="benefit_item d-flex flex-row align-items-center">
					<div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
					<div class="benefit_content">
						<h6>free shipping</h6>
						<p>Suffered Alteration in Some Form</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 benefit_col">
				<div class="benefit_item d-flex flex-row align-items-center">
					<div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
					<div class="benefit_content">
						<h6>cach on delivery</h6>
						<p>The Internet Tend To Repeat</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 benefit_col">
				<div class="benefit_item d-flex flex-row align-items-center">
					<div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
					<div class="benefit_content">
						<h6>45 days return</h6>
						<p>Making it Look Like Readable</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 benefit_col">
				<div class="benefit_item d-flex flex-row align-items-center">
					<div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
					<div class="benefit_content">
						<h6>opening all week</h6>
						<p>8AM - 09PM</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>