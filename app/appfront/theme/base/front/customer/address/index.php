<div class="main container two-columns-left">
	<div class="col-main account_center">
		<div class="std">
			<div style="margin:19px 0 0">
				<div class="page-title">
					<h2>Customer Address</h2>
				</div>
				<table class="addressbook" width="100%" cellspacing="0" cellpadding="0" border="0">
					<thead>
						<tr class="ress_tit">
							<th width="76" valign="middle" align="center" height="31">First Name</th>  
							<th width="72" valign="middle" align="center" height="31">Last Name</th>                                                                                       
							<th width="167" valign="middle" align="center">Email</th>
							<th width="67" valign="middle" align="center">Country</th>
							<th width="79" valign="middle" align="center">Region</th>
							
							<th width="81" valign="middle" align="center"> Zip Code </th>
							<th width="101" valign="middle" align="center">Telephone </th>
							<th class="th3" width="71" valign="middle" align="center">Operation</th>
						</tr>
					</thead>
					<tbody>
					<?php   if(is_array($coll) && !empty($coll)){   ?>
					<?php 		foreach($coll as $one){ ?>
						<tr class="">
							<td valign="top" align="center"><?= $one['first_name'] ?></td>
							<td valign="top" align="center"><?= $one['last_name'] ?></td>
							<td valign="top" align="center"><?= $one['email'] ?></td>
							<td valign="top" align="center"><?= $one['country'] ?></td>
							<td valign="top" align="center"><?= $one['state'] ?></td>
							<td valign="top" align="center"><?= $one['zip'] ?></td>
							<td valign="top" align="center"><?= $one['telephone'] ?></td>
							<td class="ltp" valign="top ltp" align="center">
								<input onclick="javascript:window.location.href='<?= Yii::$service->url->getUrl('customer/address/edit',['address_id' => $one['address_id']]); ?>'" class="cpointer" value="Modify " name="" type="button">
								<a href="javascript:deleteAddress(<?= $one['address_id'] ?>)">Delete</a>
								<?php  if($one['is_default'] == 1){ ?>
								<span style=" color:#cc0000">Default</span> 
								<?php  } ?>								
							</td>
						</tr>	
					<?php 		} ?>
					<?php 	} ?>
					</tbody>
				</table>
				<div class="product-Reviews">
					<input onclick="javascript:window.location.href='<?= Yii::$service->url->getUrl('customer/address/edit') ?>'" class="submitbutton addnew cpointer" value="Add New Address" name="" type="button">
					
				</div>
			</div>
		</div>

		<script>
		 function deleteAddress(address_id){
			var r=confirm('do you readly want delete this address?'); 
			if (r==true){ 
				url = "<?= Yii::$service->url->getUrl('customer/address') ?>?method=remove&address_id="+address_id;
				
				window.location.href=url;
			}
		 }

		</script>
	</div>
	
	<div class="col-left ">
		<?php
			$leftMenu = [
				'class' => 'fecshop\app\appfront\modules\Customer\block\LeftMenu',
				'view'	=> 'customer/leftmenu.php'
			];
		?>
		<?= Yii::$service->page->widget->render($leftMenu,$this); ?>
	</div>
	<div class="clear"></div>
</div>
	