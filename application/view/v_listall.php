<!--Show data-->

<div div="row">
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>STT</th>
				<th>ProductID</th>
				<th>ProductName</th>
				<th>Price</th>
				<th>Edit</th>
				<th>Delete</th>
				<th>Add to cart</th>
			</tr>
		</thead>

		<tbody>
			<?php 
				//Neu co du lieu sinh vien
				if(isset($this->student)){

					foreach ($this->student as $value) {
			?>
						<tr>
							<th><?php echo $value['id']; ?></th>
							<th><?php echo $value['name']; ?></th>
							<th><?php echo $value['email']; ?></th>
							<th><?php echo $value['address']; ?></th>
							<th><?php echo $value['phone']; ?></th>
							<th><?php echo $value['gender']; ?></th>
							<th><?php echo $value['country']; ?></th>
							<td><a href="" class="btnEdit_product_show" data-toggle="modal" data-target="#modal-edit-product" data-product-id="<?php echo $value['pro_id']; ?>" data-product-name="<?php echo $value['pro_name']; ?>" data-price="<?php echo $value['pro_price']; ?>"><span class="glyphicon glyphicon-download-alt" aria-hidden="true" style="color: red"></span> Sửa</a></td>
							<td><a href="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]".'&id_product='.$value['pro_id']; ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true" style="color: red"></span> Xóa</a></td>
						</tr>
			<?php
					}
				}
				//Neu khong co du lieu
				else{
			?>
					<tr>
						<th><?php echo "Không có dữ liệu!"; ?></th>	
					</tr>
			<?php
				}
			?>
		</tbody>

	</table>
</div>