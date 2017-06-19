<?php

use yii\helpers\Html;
$this->title = "shoppin cart";
?>


<div class="container">
<?php if($cartstore) : $n = 1; ?>
	<table class="table table-hover" border="1">
		<thead>
			<tr>
				<th>STT</th>
				<th>Image</th>
				<th>Name</th>
				<th>Quantity</th>
				<th>Price</th>
				<th>Total</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>

		<?php 
		if(isset($cartstore) == true){
		foreach ($cartstore as $item) : ?>
			<tr>
				<td><?php echo $n ?></td>
				<td><img src="<?= Yii::$app->request->baseUrl.'/images/home/'.$item->image_product ?>" style="width: 50px;height: 70px;"></td>
				<td style="font-weight: bold;"><?php echo $item->name_product ?></td>
				<form action="<?php echo Yii::$app->request->baseUrl.'/cart/editcart/'.$item->product_id; ?>" method="" id="form-edit">
				<td style="font-weight: bold;width: 300px;"><?php echo $item->qtt ?>
					<div style="display: none;"  id="<?php echo "edit".$item->product_id ?>">
						<input type="number" name="<?php echo "numberquantity_".$item->product_id ?>">
						<a href="#" onclick="submitformedit()"><span class="glyphicon glyphicon-ok"></span></a>
					</div>
				</td>
				</form>
				<td style="font-weight: bold;">$<?php echo $item->price_product ?></td>
				<td style="font-weight: bold;">$<?php echo $item->price_product*$item->qtt; ?></td>
				<td>
					<?php //echo Html::a('Delete',['/cart/remove','id'=>$item->product_id]) ?>
					<a href="<?php echo Yii::$app->request->baseUrl.'/cart/remove/'.$item->product_id; ?>">Xóa</a>
					<a onclick="editaction(<?= $item->product_id; ?>)" href="#">Edit</a>
				</td>
			</tr>
			<?php  $n++; endforeach; }
			?>

		</tbody>
	</table>
	<script type="text/javascript">
		function editaction(id){
			$("#edit"+id).attr("style","display:block;");
		}
		function submitformedit(){
			$("#form-edit").submit();
		}
	</script>
	<div class="row">
		<div class="col-md-8">
			<a href="<?php echo Yii::$app->request->baseUrl; ?>" class="btn btn-success">Tiếp tục mua hàng</a>
			<a href="<?php echo Yii::$app->request->baseUrl.'/cart/deletecart/' ?>" class="btn btn-danger">Xóa giỏ hàng</a>
			<!-- <a href="<?php echo Yii::$app->request->baseUrl.'/cart/pay/' ?>" class="btn btn-info" data-toggle="modal" data-target="#myModal">Thanh toán</a> -->
			<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
			  Thanh toán
			</button>
		</div>
	</div>
	<!-- Button trigger modal -->

<?php endif; ?>
	<?php
		if(isset($cartstore) == false){
			?>
			<div>Hiện tại chưa có sản phẩm nào trong giỏ hàng</div>
			<?php
		}
	?>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="col-md-10" style="margin-left: 100px;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Thông tin mua hàng</h4>
      </div>

      <!-- start form -->
      <form action="<?= Yii::$app->request->baseUrl.'/checkout/docheckout'; ?>" method="">
      <div class="modal-body">
      	<div class="col-md-7">
      		<div class="panel panel-info">
			  <div class="panel-heading">Hàng đã chọn mua</div>
			  <div class="panel-body">
			  		<table class="table table-hover" border="1">
			  			<thead>
							<tr>
								<th>Mã hh</th>
								<th>Name</th>
								<th>Quantity</th>
								<th>Price</th>
								<th>Total</th>
							</tr>
						</thead>
						<tbody>
						<?php $total=0; if(isset($cartstore) == true){ ?>
						<?php foreach ($cartstore as $item) : ?>
							<tr>
								<td style="font-weight: bold;width: 100px;" name="product_id"><?php echo $item->product_id ?></td>
								<td style="font-weight: bold;"><?php echo $item->name_product ?></td>
								<td style="font-weight: bold;"><?php echo $item->qtt ?></td>
								<td style="font-weight: bold;">$<?php echo $item->price_product ?></td>
								<td style="font-weight: bold;">$<?php echo $item->price_product*$item->qtt; ?></td>
								<?php $total = $total + $item->price_product*$item->qtt; ?>
							</tr>
							<?php endforeach; } ?>
							<tr>
								<th style="border-color: white;border-top-color: black"></th>
								<th style="border-color: white;border-top-color: black"></th>
								<th style="border-top-color: black"></th>
								<th style="color: red;border-top-color: black">Tổng tiền thanh toán</th>
								<th style="color: red;border-top-color: black">$<?= $total; ?></th>
							</tr>
						</tbody>
			  		</table>
			  </div>
			</div>
      	</div>
        <div class="col-md-5">
        	<div class="panel panel-info">
			  <div class="panel-heading">Thông tin giao hàng</div>
			  <div class="panel-body">
			  	<div class="row" style="margin: 5px;">
			  		<div class="col-md-4">Họ tên:</div>
				  	<input type="text" required placeholder="Điền Họ và tên" name="username" class="form-control" value="<?php if(!Yii::$app->user->isGuest){ echo Yii::$app->user->identity->username;} ?>">
			  	</div>
			  	<div class="row" style="margin: 5px;">
			  		<div class="col-md-4">Số điện thoại:</div>
				  	<input type="number" required placeholder="Số điện thoại liên hệ" name="phone" class="form-control" value="<?php if(!Yii::$app->user->isGuest){ echo Yii::$app->user->identity->phone;} ?>">
			  	</div>
			  	<div class="row" style="margin: 5px;">
			  		<div class="col-md-4">Email:</div>
				  	<input type="email" required placeholder="Điền địa chỉ mail" name="email" class="form-control" value="<?php if(!Yii::$app->user->isGuest){ echo Yii::$app->user->identity->email;} ?>">
			  	</div>
			  	<div class="row" style="margin: 5px;">
			  		<div class="col-md-5">Địa chỉ giao hàng:</div>
				  	<input type="text" required placeholder="Điền địa chỉ giao hàng" name="address" class="form-control" value="<?php if(!Yii::$app->user->isGuest){ echo Yii::$app->user->identity->address;} ?>">
			  	</div>
			  </div>
			</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="submit" type="button" name="checkout" class="btn btn-info">Tiến hành thanh toán</button>
      </div>
      </form>
      <!-- end form -->

    </div>

  </div>
</div>
