<div class="right_col" role="main" style="min-height: 698px;">
	<div class="">
		<div class="page-title">
		<div class="title_left">
			<h3>Shift report</h3>
		</div>
		</div>
	<div class="clearfix"></div>
	<div class="row" style="display: block;">
	<div class="clearfix"></div>
	<div class="col-md-12 col-sm-12  ">
	<div class="x_panel">
	<div class="x_title">
		<div class="col-md-3">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">New Shift</button>
				
		</div>
	<ul class="nav navbar-right panel_toolbox">
	<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
	</li>
	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
		<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
		<a class="dropdown-item" href="#">Settings 1</a>
		<a class="dropdown-item" href="#">Settings 2</a>
		</div>
	</li>
	<li><a class="close-link"><i class="fa fa-close"></i></a>
	</li>
	</ul>
	<div class="clearfix"></div>
	</div>
		<div class="x_content">
			<div class="table-responsive">
				<table class="table table-striped jambo_table bulk_action">
					<thead>
						<tr class="headings">
							<th class="column-title">Date </th>
							<th class="column-title">Hours </th>
							<th class="column-title">Rate </th>
							<th class="column-title">Status </th>
							<th class="column-title">Amount </th>
							<th class="column-title no-link last"><span class="nobr">Action</span>
							</th>
							<th class="bulk-actions" colspan="7">
							<a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
							</th>
						</tr>
					</thead>
					<tbody>
						<tr class="even pointer">
							<td class=" ">02/Marzo/2020</td>
							<td class=" ">8 hrs </td>
							<td class=" ">$13.5 cad</td>
							<td class=" ">To be Paid</td>
							<td class="a-right a-right ">Total</td>
							<td class=" last"><a href="#">View</a>
						</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	</div>
	</div>
	</div>

</div>
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">New Shift</h4>
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="form" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">

					<?php
						echo "<input type='hidden' value=".$_SESSION["nombre"]." class='user'>"
					?>
					
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Hours <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="number" required="required" class="form-control hr">
						</div>
					</div>
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Rate <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="number" required="required" class="form-control rate">
						</div>
					</div>
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Date <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="date" id="date" name="date" required="required" class="form-control date">
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary hours">Save changes</button>
			</div>
		</div>
	</div>
</div>


