<!--Show data-->
<div div="row">
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>STT</th>
				<th>StudentID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Address</th>
				<th>Phone</th>
				<th>Gender</th>
				<th>Country</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>

		<tbody>
			<?php 
				/*//Neu co du lieu sinh vien
				if(isset($student) and count($student)){
					foreach ($student as $key => $value) {
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
				}*/
			?>
				<tr>
					<th><?php echo "1"; ?></th>
					<th><?php echo "1"; ?></th>
					<th><?php echo "Dương Minh Long"; ?></th>
					<th><?php echo "duongminhlonge@gmail.com"; ?></th>
					<th><?php echo "Hà Nội"; ?></th>
					<th><?php echo "1231312313"; ?></th>
					<th><?php echo "Nam"; ?></th>
					<th><?php echo "Việt Nam"; ?></th>
					<td><a href="" class="btnEdit_student_show" data-toggle="modal" data-target="#modal-edit-student" data-product-id="<?php echo $value['id']; ?>" data-product-name="<?php echo $value['pro_name']; ?>" data-price="<?php echo $value['pro_price']; ?>"><span class="glyphicon glyphicon-download-alt" aria-hidden="true" style="color: red"></span> Sửa</a></td>
					<td><a href="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]".'&id_product='.$value['pro_id']; ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true" style="color: red"></span> Xóa</a></td>
				</tr>
		</tbody>

	</table>
</div>