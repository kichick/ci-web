<div class="container contact_container">
    <div class="row">
        <div class="col">

            <!-- Breadcrumbs -->

            <div class="breadcrumbs d-flex flex-row align-items-center">
                <ul>
                    <li><a href="<?= base_url('home'); ?>">Home</a></li>
                    <li class="active"><a href="<?= base_url('home/dashboard'); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i>Dashboard</a></li>
                </ul>
            </div>
            <div class="site-section">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <div class="border p-4 rounded" role="alert">
                                Returning customer? <a href="<?= base_url('auth') ?>">Click here</a> to login
                            </div>
                        </div>
                    </div>
                    <form action="<?= base_url('checkout/proses') ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 mb-5 mb-md-0">
                                <h2 class="h3 mb-3 text-black">Billing Details</h2>
                                <div class="p-3 p-lg-5 border">

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="name" class="text-black"> Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="name_buy" name="name_buy">
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="province" class="text-black">Province <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="province" name="province" placeholder="Street address">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="address" class="text-black">Address <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="address" name="address" placeholder="Street address">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label for="regency" class="text-black">Regency <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="regency" name="regency">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="disctrict" class="text-black">Sub-disctrict <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="disctrict" name="disctrict">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label for="village" class="text-black">Village <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="village" name="village">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="zip" class="text-black">Zip / Code <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="zip" name="zip">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-5">
                                        <div class="col-md-6">
                                            <label for="email" class="text-black">Email Address <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="email" name="email">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="phone" class="text-black">Phone <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="notes" class="text-black">Order Notes</label>
                                        <textarea name="notes" id="notes" cols="30" rows="5" class="form-control" placeholder="Write your notes here..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row mb-5">
                                    <div class="col-md-12">
                                        <h2 class="h3 mb-3 text-black">Your Order</h2>
                                        <div class="p-3 p-lg-5 border">
                                            <table class="table site-block-order-table mb-5">
                                                <thead>
                                                    <th>Product</th>
                                                    <th>Total</th>
                                                </thead>

                                                <tbody>
                                                    <?php $i = 1; ?>
                                                    <?php foreach ($this->cart->contents() as $items) : ?>
                                                        <tr>
                                                            <td><?= $items['name'] ?><strong class="mx-2">x</strong> <?= $items['qty'] ?></td>
                                                            <td>Rp.<?= number_format($items['price'], 0, ',', '.') ?></td>
                                                        </tr>
                                                        <?php $i++ ?>
                                                    <?php endforeach; ?>


                                                    <tr>
                                                        <td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
                                                        <td class="text-black">Rp. <?= number_format($this->cart->total(), 0, ',', '.'); ?></td>
                                                    </tr>

                                                </tbody>
                                            </table>

                                            <div class="border p-3 mb-3">
                                                <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Pilih Bank Transfer dan Pengiriman</a></h3>
                                                <br>
                                                <div class="collapse" id="collapsebank">
                                                    <div class="py-2">
                                                        <div class="form-group">
                                                            <label>Pilih Bank</label>
                                                            <select>
                                                                <option>BRI - 1234567890234</option>
                                                                <option>BNI - 12345678</option>
                                                                <option>BRI - 1234567890</option>

                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Pilih pengiriman</label>
                                                            <select>
                                                                <option>JNE</option>
                                                                <option>J & T</option>
                                                                <option>POS</option>
                                                                <option>TIKI</option>
                                                            </select>
                                                        </div>
                                                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-dark btn-lg btn-block">Place Order</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- </form> -->
                    </form>

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
</div>