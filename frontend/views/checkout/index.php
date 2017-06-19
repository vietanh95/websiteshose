
<?php
	if(Yii::$app->user->isGuest){
		$numbermodel = 0;
	}
	else{
		$numbermodel = Yii::$app->user->identity->id;
	}
?>
    <div class="modal-body">
      	<div class="col-md-12">
      		<div class="panel panel-info">
			  <div class="panel-heading">Hóa đơn đã xác nhận thanh toán</div>
			  <div class="panel-body">
			  		<table class="table table-hover" border="1">
			  			<thead>
							<tr>
								<th>Ngày lập</th>
								<th>Total</th>
								<th>Username</th>
								<th>Địa chỉ Email</th>
								<th>Địa chỉ liên lạc</th>
								<th>Số điện thoại</th>
								
							</tr>
						</thead>
						<tbody>
						<?php
						if(Yii::$app->user->isGuest){
							echo "Vui lòng nhấn "?> <a href="<?php echo yii::$app->request->baseUrl.'/site/login'; ?>">tại đây</a> để đăng nhập
						<?php
						}
						?>

						<?php $total=0; if(isset($model) == true && $numbermodel != 0){ ?>
						<?php foreach ($model as $item) : ?>
							<tr>
								<td style="font-weight: bold;"><?php echo $item->order_date ?></td>
								<td style="font-weight: bold;">$<?php echo $item->total ?></td>
								<td style="font-weight: bold;"><?php echo $item->user_ship; ?></td>
								<td style="font-weight: bold;"><?php echo $item->email_ship; ?></td>
								<td style="font-weight: bold;"><?php echo $item->address_ship; ?></td>
								<td style="font-weight: bold;"><?php echo $item->phone_ship; ?></td>
							</tr>
							<?php endforeach; } ?>
						</tbody>
			  		</table>
			  </div>
			</div>
      	</div>
      	<code></code>.
</p>
