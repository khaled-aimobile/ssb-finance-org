
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/cupertino/jquery-ui.css">      
<?php $__env->startSection('page-title'); ?>
<?php echo e(__('Fixed Asset Management')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></li>
    <li class="breadcrumb-item"><?php echo e(__('Fixed Asset')); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('action-btn'); ?>        
    <div class="float-end">
    
            <a href="#" data-size="lg"  data-bs-toggle="modal" data-bs-target="#add_asset_modal" class="btn btn-sm btn-primary">     
                <i class="ti ti-plus"></i>
            </a>
        
    </div>   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <table class="table datatable">
                            <thead>
                            <tr>
								<th><?php echo e(__('ID')); ?></th>
                                <th><?php echo e(__('Name')); ?></th>
                                <th><?php echo e(__('Code')); ?></th>
                                <th><?php echo e(__('Serial Number')); ?></th>
                                <th><?php echo e(__('Model')); ?></th>
                                <th><?php echo e(__('Supplier Name')); ?></th>
                                <th><?php echo e(__('Description')); ?></th>
                                <th width="200px"><?php echo e(__('Action')); ?></th>
                            </tr>
                            </thead> 
                            <tbody class="font-style" id="show_assets">
                                 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>      
        </div>
    </div>

	<div class="modal fade" id="add_asset_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add New Asset</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="#" method="asset" enctype="multipart/form-data" id="add_asset_form" novalidate>
			<?php echo csrf_field(); ?>
          <div class="modal-body p-5">
			<div class="row">
				<div class="col-md-6">
					<div class="mb-3">  
						<label class="form-label" >Asset Name*</label>
						<input type="text" name="name" class="form-control" placeholder="Name" required>
						<div class="invalid-feedback">asset name is required!</div>
					  </div>
				</div>
				<div class="col-md-6">
					<div class="mb-3">
						<label class="form-label" >Serial number</label>
						<input type="text" name="serial_number" class="form-control" placeholder="Serial number" required>
						<div class="invalid-feedback">Serial number is required!</div>
					  </div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="mb-3">
						<label class="form-label">Class* (IT Devices)</label>
						<select name="class" required class="form-control" required>
						  <option value="Laptop">Laptop</option>
						  <option value="Printers">Printers</option>
						  <option value="Desktop">Desktop</option>
					  </select>
					  <div class="invalid-feedback">asset class is required!</div>
					  </div>
				</div>
				<div class="col-md-6">
					<div class="mb-3">
						<label class="form-label">Status*</label>
						<select name="status" required class="form-control" required>
						  <option value="Available">Available</option>
						  <option value="Disposed">Disposed</option>
						  <option value="Broken">Broken</option>   
						  <option value="Owned">Owned</option>
					  </select>
						<div class="invalid-feedback">status is required!</div>
					  </div>
				</div>
			</div>
            <div class="row">
				<div class="col-md-6">
					<div class="mb-3">
						<label class="form-label">Asset Model</label>
						<input type="text" name="model" class="form-control" placeholder="Model" required>
						<div class="invalid-feedback">Model is required!</div>
					  </div>
				</div>
				<div class="col-md-6">
					<div class="mb-3">
						<label class="form-label">Supplier name</label>
						<input type="text" name="supplier_name" class="form-control" placeholder="Supplier name" required>
						<div class="invalid-feedback">supplier name is required!</div>
					  </div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="mb-3">
						<label class="form-label">Current Value*</label>
						<input type="text" name="current_value" class="form-control" placeholder="Current value" required>
						<div class="invalid-feedback">Current value is required!</div>
					  </div>
				</div>
				<div class="col-md-6">
					<div class="mb-3">
						<label class="form-label">Disposal date</label>   
						<input type="date" name="disposal_date" id="date_picker" class="form-control" placeholder="Disposal date" required>    
						<div class="invalid-feedback">Disposal date is required!</div>
					  </div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="mb-3">
						<label class="form-label">Warranty code</label>
						<input type="text" name="warranty_code" class="form-control" placeholder="Warranty code" required>
						<div class="invalid-feedback">Warranty code is required!</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="mb-3">
						<label class="form-label">Warranty Period</label>
						<select name="warranty_period" required class="form-control" required>
						  <option value="1">1</option>
						  <option value="2">2</option>
						  <option value="3">3</option>   
						  <option value="4">4</option>
						  <option value="5">5</option>   
						  <option value="6">6</option>
						  <option value="7">7</option>   
						  <option value="8">8</option>
						  <option value="7">9</option>   
						  <option value="8">10</option>
					  </select>
						<div class="invalid-feedback">Warranty Period is required!</div>
					  </div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="mb-3">
						<label class="form-label">Warranty start date</label>
						<input type="date" name="warranty_start_date" id="date_picker1" class="form-control" placeholder="Warranty start date" required>
						<div class="invalid-feedback">Warranty start date is required!</div>
					  </div>
				</div>
				<div class="col-md-6">     
					<div class="mb-3">      
						<label class="form-label">Warranty end date</label>
						<input type="date" name="warranty_end_date" id="date_picker2"  class="form-control" placeholder="Warranty end date" required>
						<div class="invalid-feedback">Warranty end date is required!</div>
					  </div>
				</div>
			</div>  	
			<div class="mb-3">
				<label class="form-label" >Asset Description*</label>
				<textarea name="description" class="form-control" rows="4" placeholder="Description" required></textarea>
				<div class="invalid-feedback">asset description is required!</div>
			  </div>
  

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" id="add_asset_btn">Add asset</button>
          </div>
        </form>
      </div>
    </div>
  </div>

   <!-- edit asset modal start -->
   <div class="modal fade" id="edit_asset_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Edit asset</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="#" method="asset" enctype="multipart/form-data" id="edit_asset_form" novalidate>
			<?php echo csrf_field(); ?>
          <input type="hidden" name="id" id="pid"> 
		   
          <div class="modal-body p-5">
			<div class="row">
				<div class="col-md-6">
					<div class="mb-3">
						<label class="form-label">Asset Name*</label>
						<input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
						<div class="invalid-feedback">asset name is required!</div>
					  </div>
				</div>
				<div class="col-md-6">
					<div class="mb-3">
						<label class="form-label">Serial number</label>
						<input type="text" name="serial_number" id="serial_number" class="form-control" placeholder="Serial number" required>
						<div class="invalid-feedback">Serial number is required!</div>
					  </div>
				</div>
			  </div> 
			  <div class="row">
				<div class="col-md-6">
					<div class="mb-3">
						<label class="form-label">Class* (IT Devices)</label>
						<select name="class" id="class" required class="form-control" required>
						  <option value="Laptop">Laptop</option>
						  <option value="Printers">Printers</option>
						  <option value="Desktop">Desktop</option>
					  </select>
					  </div>
				</div>
				<div class="col-md-6">
					<div class="mb-3">
						<label class="form-label">Status*</label>
						<select name="status" id="status" required class="form-control" required>
						  <option value="Available">Available</option>
						  <option value="Disposed">Disposed</option>
						  <option value="Broken">Broken</option>   
						  <option value="Owned">Owned</option>
					  </select>
						<div class="invalid-feedback">status is required!</div>
					  </div>
				</div>
			  </div>
			  <div class="row">
				<div class="col-md-6">
					<div class="mb-3">
						<label class="form-label">Asset Model</label>
						<input type="text" id="model" name="model" class="form-control" placeholder="Model" required>
						<div class="invalid-feedback">Model is required!</div>
					  </div>
				</div>
				<div class="col-md-6">
					<div class="mb-3">
						<label class="form-label">Supplier name</label>
						<input type="text" id="supplier_name" name="supplier_name" class="form-control" placeholder="Supplier name" required>
						<div class="invalid-feedback">supplier name is required!</div>
					  </div>
				</div>
			  </div>
			  <div class="row">
				<div class="col-md-6">
					<div class="mb-3">
						<label class="form-label">Disposal date</label>   
						<input type="text" name="disposal_date" id="date_picker" class="form-control" placeholder="Disposal date" required>    
						<div class="invalid-feedback">Disposal date is required!</div>
					  </div>
				</div>
				<div class="col-md-6">
					<div class="mb-3">
						<label class="form-label">Current Value*</label>
						<input type="text" name="current_value" id="current_value" class="form-control" placeholder="Current value" required>
						<div class="invalid-feedback">Current value is required!</div>
					  </div>
				</div>
			  </div>
			  <div class="row">
				<div class="col-md-6">
					<div class="mb-3">
						<label class="form-label">Warranty start date</label>
						<input type="text" name="warranty_start_date" id="date_picker1" class="form-control" placeholder="Warranty start date" required>
						<div class="invalid-feedback">Warranty start date is required!</div>
					  </div>
				</div>
				<div class="col-md-6">
					<div class="mb-3">      
						<label class="form-label">Warranty end date</label>
						<input type="text" name="warranty_end_date" id="date_picker2"  class="form-control" placeholder="Warranty end date" required>
						<div class="invalid-feedback">Warranty end date is required!</div>
					  </div>
				</div>
			  </div>
			  <div class="row">
				<div class="col-md-6">
					<div class="mb-3">
						<label class="form-label">Warranty code</label>
						<input type="text" name="warranty_code" id="warranty_code" class="form-control" placeholder="Warranty code" required>
						<div class="invalid-feedback">Warranty code is required!</div>
					  </div>
				</div>
				<div class="col-md-6">
					<div class="mb-3">
						<label class="form-label">Warranty Period</label>
						<select name="warranty_period" id="warranty_period" required class="form-control" required>
						  <option value="1">1</option>
						  <option value="2">2</option>
						  <option value="3">3</option>   
						  <option value="4">4</option>
						  <option value="5">5</option>   
						  <option value="6">6</option>
						  <option value="7">7</option>   
						  <option value="8">8</option>
						  <option value="7">9</option>   
						  <option value="8">10</option>
					  </select>
						<div class="invalid-feedback">Warranty Period is required!</div>
					  </div>
				</div>
			  </div>     
			  <div class="mb-3">
				<label class="form-label">Asset Description*</label>
				<textarea name="description" id="description" class="form-control" rows="4" placeholder="Description" required></textarea>
				<div class="invalid-feedback">asset description is required!</div>
		    </div>
    
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" id="edit_asset_btn">Update asset</button>
          </div>
		</div>
        </form>
      </div>
    </div>
  </div>
  <!-- edit asset modal end -->

  <!-- detail asset modal start -->
  <div class="modal fade" id="detail_asset_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Details of asset</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
		<div class="row">
			<div class="col-md-6">Asset Name :<h5 id="detail_asset_name" class="mt-3"></h5> <br></div>
			<div class="col-md-6"> Asset Code :<h5 id="detail_asset_code"></h5> <br></div>
		</div>
		  Asset Description :<p id="detail_asset_description"></p> <br>
		  <div class="row">
			<div class="col-md-6">
				Serial number :<p id="detail_asset_serial_number"></p> <br>
			</div>
			<div class="col-md-6">
				Asset class :<p id="detail_asset_class"></p> <br>
			</div>
		  </div>
		  <div class="row">
			<div class="col-md-6">
				Asset status :<p id="detail_asset_status"></p> <br>
			</div>
			<div class="col-md-6">
				Asset model :<p id="detail_asset_model"></p> <br>
			</div>
		  </div>
		  <div class="row">
			<div class="col-md-6">
				Asset supplier name :<p id="detail_asset_supplier_name"></p> <br>
			</div>
			<div class="col-md-6">
				Current value :<p id="detail_asset_value"></p> <br>
			</div>
		  </div>
		  <div class="row">
			<div class="col-md-6">
				Disposal Date :<p id="detail_asset_disposal_date"></p> <br>
			</div>
			<div class="col-md-6">
				Warranty code :<p id="detail_asset_warranty_code"></p> <br>
			</div>
		  </div>
		  <div class="row">
			<div class="col-md-6">
				Warranty start date :<p id="detail_asset_warranty_start_date"></p> <br>
			</div>
			<div class="col-md-6">
				Warranty end date :<p id="detail_asset_warranty_end_date"></p> <br>
			</div>
		  </div>
		  <div class="row">
			<div class="col-md-6">
				Warranty period : <p id="detail_asset_warranty_period"></p> <br>
			</div>
			<div class="col-md-6">
				Created date :<p id="detail_asset_created" class="fst-italic"></p>
			</div>
		  </div>
		          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- detail asset modal end -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
  <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>   
  <script>  
 
	 $(function() {
		$("#add_asset_form").submit(function(e) {
        e.preventDefault();
        const formData = new FormData(this);
        if (!this.checkValidity()) {
          e.preventDefault(); 
          $(this).addClass('was-validated');
        } else {
          $("#add_asset_btn").text("Adding...");
          $.ajax({
			headers: { 'csrftoken' : '<?php echo e(csrf_token()); ?>' },
            url: "<?php echo e(url('fixedasset/add')); ?>",
            method: 'post',
            data: formData,     
            contentType: false,
            cache: false,
            processData: false,
            dataType: 'json',
            success: function(response) {
              if (response.error) {
                // $("#image").addClass('is-invalid');
                // $("#image").next().text(response.message.image);
              } else {
                $("#add_asset_modal").modal('hide');
                $("#add_asset_form")[0].reset();
                // $("#image").removeClass('is-invalid');
                // $("#image").next().text('');
                $("#add_asset_form").removeClass('was-validated');
                Swal.fire(
                  'Added',
                  response.message,
                  'success'
                );
                fetchAllassets();
              }
              $("#add_asset_btn").text("Add asset");
            }
          });       
        }
      });

	  $(document).delegate('.asset_edit_btn', 'click', function(e) {
        e.preventDefault();
        const id = $(this).attr('id');
        $.ajax({
			headers: { 'csrftoken' : '<?php echo e(csrf_token()); ?>' },     
          url: "<?php echo e(url('fixedasset/edit/')); ?>"+"/"+id, 
          method: 'get',
          success: function(response) {
            $("#pid").val(response.message.id);
            $("#name").val(response.message.name);
            $("#description").val(response.message.description);
			$("#serial_number").val(response.message.serial_number);
            $("#class").val(response.message.class);
            $("#status").val(response.message.status);
			$("#model").val(response.message.model);
            $("#supplier_name").val(response.message.supplier_name);
            $("#current_value").val(response.message.current_value);
			$("#date_picker").val(response.message.disposal_value);
            $("#warranty_code").val(response.message.warranty_code);
            $("#date_picker1").val(response.message.warranty_start_date);
            $("#date_picker2").val(response.message.warranty_end_date);
			$("#warranty_period").val(response.message.warranty_period);
          }
        });
      });      

      $("#edit_asset_form").submit(function(e) {
        e.preventDefault();
        const formData = new FormData(this);
        if (!this.checkValidity()) {
          e.preventDefault();
          $(this).addClass('was-validated');
        } else {
          $("#edit_asset_btn").text("Updating...");
          $.ajax({
			headers: { 'csrftoken' : '<?php echo e(csrf_token()); ?>' },
            url: "<?php echo e(url('fixedasset/update')); ?>",
            method: 'post',
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            dataType: 'json',
            success: function(response) {
              $("#edit_asset_modal").modal('hide');
              Swal.fire(
                'Updated',
                response.message,
                'success'
              );  
              fetchAllassets();
              $("#edit_asset_btn").text("Update asset");
            }
          });
        }
      });

      $(document).delegate('.asset_delete_btn', 'click', function(e) {
        e.preventDefault();
        const id = $(this).attr('id');
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
				headers: { 'csrftoken' : '<?php echo e(csrf_token()); ?>' },
              url: "<?php echo e(url('fixedasset/delete/')); ?>"+"/"+id, 
              method: 'get',
              success: function(response) {
                Swal.fire(
                  'Deleted!',
                  response.message,
                  'success'
                )
                fetchAllassets();    
              }
            });
          }
        })
      });
      $(document).delegate('.asset_detail_btn', 'click', function(e) {
        e.preventDefault();
        const id = $(this).attr('id');
        $.ajax({
			headers: { 'csrftoken' : '<?php echo e(csrf_token()); ?>' },
          url: "<?php echo e(url('fixedasset/detail/')); ?>"+"/"+id, 
          method: 'get',
          dataType: 'json',   
          success: function(response) {
			$("#pid").text(response.message.id);
            $("#detail_asset_name").text(response.message.name);
			$("#detail_asset_code").text(response.message.code);    
            $("#detail_asset_description").text(response.message.description);
			$("#detail_asset_serial_number").text(response.message.serial_number);
            $("#detail_asset_class").text(response.message.class);
            $("#detail_asset_status").text(response.message.status);
			$("#detail_asset_model").text(response.message.model);
            $("#detail_asset_supplier_name").text(response.message.supplier_name);
            $("#detail_asset_current_value").text(response.message.current_value);
			$("#detail_asset_date_picker").text(response.message.disposal_value);
            $("#detail_asset_warranty_code").text(response.message.warranty_code);
            $("#detail_asset_date_picker1").text(response.message.warranty_start_date);
            $("#detail_asset_date_picker2").text(response.message.warranty_end_date);
			$("#detail_asset_warranty_period").text(response.message.warranty_period);
			$("#detail_asset_created").text(response.message.created_at);
          }
        });
      });
        
      fetchAllassets();

      function fetchAllassets() { 
        $.ajax({
			headers: { 'csrftoken' : '<?php echo e(csrf_token()); ?>' },
          url: "<?php echo e(url('fixedasset/fetch/')); ?>",
          method: 'get',
          success: function(response) {
            $("#show_assets").html(response.message);
          }
        });     
      }
     
	});
	</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\another_xampp\htdocs\ssb-finance-org\resources\views/fixedAsset/index.blade.php ENDPATH**/ ?>