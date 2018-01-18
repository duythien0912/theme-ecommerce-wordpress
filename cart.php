<?php
/*
Template Name: shop cart
*/

/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

get_header();
?>
<div class="wapper-cart">
<div class="cart-page">
</div>
<div class="cart-caculate">
	<table class="table-cart-page">
	<tr>
		<th class="order-items-total">Tổng số sản phẩm:</th>
		<td class="order-items-total"><p class="item-text-total"></p> VND</td>
	</tr>
	<tr>
		<th class="order-delivery-costs">Chi phí giao hàng ước tính:</th>
		<td class="order-delivery-costs">* VND</td>
	</tr>
	<tr>
		<th class="order-total">Tổng:</th>
		<td class="order-total-text"> VND</td>
	</tr>
	<tr>
		<td colspan="2" class="order-vat-costs"><div>* Bao gồm thuế VAT</div></td>
	</tr>
	</table>			
</div>
<div class="btn-return-next-cart">
<button class="btn-return-cart button button-primaryB button-big"><span>Tiếp tục mua sắm</span></button>
<button class="btn-next-cart button button-primaryB button-big"><span>Tiếp tục</span></button>
</div>
<div class="adress-page">
	<div class="ship-cart">
		<div class="logo-ship">
			<img width="64px" src="http://localhost/shop/wp-content/uploads/2018/01/679922.png">
        </div>
        <div class="content-ship"><span>Ship it</span></div>
        <div class="form-addres">
        	<form class="formControls" id="formControls">
        		<li class="formControl">
	        	<label for="firstName" class="labelLeft">
					 Tên <em class="required">*</em>
				</label>
	        	<input type="text" name="visitor_name" id="visitor_name">
	        	</li>
	        	<li class="formControl">
	        	<label for="firstName" class="labelLeft">
					 Số điện thoại (di động) <em class="required">*</em>
				</label>
	        	<input type="text" name="visitor_mobi" id="visitor_mobi">
	        	</li>	
	        	<li class="formControl">
	        	<label for="firstName" class="labelLeft">
					 Tỉnh/Thành phố <em class="required"></em>
				</label>
	        	<input type="text" name="visitor_tinh" id="visitor_city">
	        	</li>
	        	<li class="formControl">
	        	<label for="firstName" class="labelLeft">
					 Quận/Huyện <em class="required"></em>
				</label>
	        	<input type="text" name="visitor_city" id="visitor_county">
	        	</li>
	        	<li class="formControl">
	        	<label for="firstName" class="labelLeft">
					 Phường/Xã <em class="required"></em>
				</label>
	        	<input type="text" name="visitor_city" id="visitor_ward">
	        	</li>
	        	<li class="formControl">
	        	<label for="firstName" class="labelLeft">
					 Địa chỉ cụ thể <em class="required">*</em>
				</label>
	        	<input type="text" name="visitor_address" id="visitor_address">
	        	</li>	
	        	<li class="formControl">
	        	<label for="firstName" class="labelLeft" pal>
					 Lưu ý thêm <em class="required"></em>
				</label>
	        	<input type="text" name="visitor_addinfomition" id="visitor_note" placeholder="Để lại lưu ý..">
	        	</li>
		</form>
        </div>

        <div class="shipping-method">
			    <label>
			    				    <input type="checkbox" name="creadcart" class="checkboxinput" id="checkboxinputcart">

			      <span>Thẻ tín dụng/Ghi nợ</span>
			    </label>

			    <label>
			    				    <input type="checkbox" name="cod" class="checkboxinput" checked="checked" id="checkboxinputcod">

			      <span>Thành toán khi nhận hàng</span>
			    </label>			    
 			<div class="cntr">

			</div>			
        </div>
        <p id="warningcart"></p>
        	<button id="btn-submit-cart" name="btn-submit-cartt" class="btn-submit-cart button button-primaryB button-big" ><span>Tiếp tục</span></button>

	</div>
</div>
</div>
<?php

get_footer();
?>