<div class="container">
    <div class="page-header-extended">
      <h2 class="page-title"> <strong>Country Updates </strong></h2>
    </div>

    <div class="starter-template">

      <div class="info-table-header-block">
        <button type="button" class="btn btn-primary add-new-button" data-toggle="modal" data-target="#addnewModal">
        Add New <i class="fa fa-plus" aria-hidden="true"></i>
        </button>
      </div>


      <!-- Add module start -->
      <div class="modal fade" id="addnewModal" tabindex="-1" role="dialog" aria-labelledby="addnewModalTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="addnewModalTitle"><strong>ADD Country</strong> </h4>
            </div>

            <div class="modal-body">
              <form name="myform" id="input_form" enctype="multipart/form-data" onsubmit="return validateForm()" method="post" action="home/add">
                <div class="form-group">
                  <label for="countryname">Country Name
                    <span class="required-field">*</span>
                  </label>
                  <input type="text" class="form-control" placeholder="Enter Country name" id="countryname" name="countryname" />
                </div>
                <div class="form-group">
                  <label for="countrycode">Country Code
                    <span class="required-field">*</span>
                  </label>
                  <input type="text" class="form-control" placeholder="Enter Country Code" id="countrycode" name="countrycode" />
                </div>
                <div class="form-group">
                  <label for="capital">Capital
                    <span class="required-field">*</span>
                  </label>
                  <input type="place" class="form-control" placeholder="Enter Country Capital" id="capital" name="capital" />
                </div>
                <div class="form-group">
                  <label for="population">Population
                    <span class="required-field">*</span>
                  </label>
                  <input type="text" class="form-control" placeholder="Enter Country population" id="population" name="population" />
                </div>
                <div class="form-group">
                  <input type="file" name="photo" id="fileSelect">
                </div>
                <div class="modal-footer-extended">
                  <button class="btn btn-success">Add</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
      <!-- Add Module end -->

      <table id="student_table" class="table table-bordered table-striped table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>
             Country Name
            </th>
            <th>
              Country Code
            </th>
            <th>
              Capital
            </th>
            <th>
              Population
            </th>
            <th>
              Image
            </th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
        <?php
			foreach($viewmodel as $row) :
				echo
				"<tr>
				<td>{$row['id']}</td>
				<td>{$row['countryname']}</td>
				<td>{$row['countrycode']}</td>
				<td>{$row['capital']}</td>
				<td>{$row['population']}</td>
				<td><img src='uploads/{$row['image']}' height='100' width='150'></td>

				<td><button class='btn btn-sm btn-primary editButton')'><i class='fa fa-pencil' aria-hidden='true'></i></button>&nbsp;<button class='btn btn-sm btn-danger deleteButton')'><i class='fa fa-trash' aria-hidden='true'></i></button></td>
				</tr>\n";
			endforeach;
        ?>
        </tbody>
      </table>

      <div class="show-table-info hide">
        <div class="alert alert-info center">
          <strong>No Data Found, Please Enter Some Data</strong>
        </div>
      </div>
    </div>
  </div>


  <!-- User Edit Modal Start -->

  <div id="show_user_info">
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalTitle"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="editModal"><strong>EDIT Country</strong> </h4>
          </div>
          <div class="modal-body">
            <form action="home/update" onsubmit="return validateEditForm()" id="editForm" name="editForm" method="post">
              <input type="hidden" name='update_id' id='update_id'>
              <div class="form-group">
                <label for="edit_countryname">Country Name
                  <span class="required-field">*</span>
                </label>
                <input type="text" class="form-control" name="edit_countryname" placeholder="Enter Country name" id="edit_countryname" />
              </div>
              <div class="form-group">
                <label for="edit_countrycode">Country Code
                  <span class="required-field">*</span>
                </label>
                <input type="text" class="form-control" placeholder="Enter Country Code" id="edit_countrycode" name="edit_countrycode" />
              </div>
              <div class="form-group">
                <label for="edit_capital">Capital
                  <span class="required-field">*</span>
                </label>
                <input type="text" class="form-control" placeholder="Enter Country Capital" id="edit_capital" name="edit_capital" />
              </div>
              <div class="form-group">
                <label for="edit_population">Population
                  <span class="required-field">*</span>
                </label>
                <input type="text" class="form-control" name="edit_population" placeholder="Enter Country population" id="edit_population" />
              </div>

              <div class="form-group">
                <input type="hidden" class="form-control" id="member_id">
              </div>

              <div class="modal-footer-extended">
                <button class="btn btn-success">Update</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- User Edit Modal End -->

  <!-- Delete Confirmation Dialog Start -->
  <div id="show_user_info">
    <div class="modal fade" id="deleteDialog" tabindex="-1" role="dialog" aria-labelledby="deleteDialogTitle"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="deleteDialog">Warning!</h4>
          </div>
          <form action="home/delete" method="post">
            <div class="modal-body">
              <input type="hidden" name='delete_id' id='delete_id'>
              <h4>Delete this Country Data? </h4>
              <input type="hidden" id="deleted-member-id" value="">
              <div class="modal-footer-extended">
                <button class="btn btn-danger">Delete</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Delete Confirmation Dialog End -->