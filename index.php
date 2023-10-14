<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bootstrap-5.3.1/bootstrap.min.css" rel="stylesheet">
    <link href="DataTables/datatables.min.css" rel="stylesheet"/>

    <title>USC Attendance System</title>
  </head>
  <body>
    <h1 class="text-center">USC & Community Multipurpose Cooperative</h1>
    <h1 class="text-center">61st General Assembly</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <button type="button" style="margin-bottom: 40px;" class="btn btn-primary" onclick="showModalV1()">
                            ADD
                        </button>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <table id="datatable" class="table">
                            <thead>
                                <th>ID</th>
                                <th>LASTNAME</th>
                                <th>FIRSTNAME</th>
                                <th>EMAILS (PERSONAL - CORPORATE)</th>
                                <th>SEX</th>
                                <th>TYPE</th>
                                <th>STUB NUMBER</th>
                                <th>ACTIONS</th>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </div>


    <!-- Model for Check Out -->

    <div id="verify2Modal" style="display:none; position:absolute; top:0; left:0; width: 100vw; height: 100vh; background-color: rgba(0,0,0, 0.5); z-index: 100;">
    <div style="-webkit-backdrop-filter: blur(5px); backdrop-filter: blur(5px); width: 100vw; height: 100vh;">
    <div style="display:flex; justify-content:center; align-items: center; z-index: 0;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Are you Sure?</h5>
                    <button type="button" class="close" onclick="hideModalV3()">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Do you want to reset the Check Out status?
                </div>
                <div class="modal-footer">
                    <button type="button" id="yesBtn2" class="btn btn-primary">Yes</button>
                    <button type="button" id="noBtn2" class="btn btn-secondary">No</button>
                </div>
            </div>
        </div>
</div>
</div>
    </div>

    <!-- Model for Check In -->
    <div id="verifyModal" style="display:none; position:absolute; top:0; left:0; width: 100vw; height: 100vh; background-color: rgba(0,0,0, 0.5); z-index: 100;">
    <div style="-webkit-backdrop-filter: blur(5px); backdrop-filter: blur(5px); width: 100vw; height: 100vh;">
    <div style="display:flex; justify-content:center; align-items: center; z-index: 0;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Are you Sure?</h5>
                    <button type="button" class="close" onclick="hideModalV2()">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Do you want to reset the Check In status?
                </div>
                <div class="modal-footer">
                <button type="button" id="yesBtn" class="btn btn-primary">Yes</button>
                    <button type="button" id="noBtn" class="btn btn-secondary">No</button>
                </div>
            </div>
        </div>
</div>
</div>
    </div>

    <!-- Modal For Add-->
    <div id="addModal" style="display:none; position:absolute; top:0; left:0; width: 100vw; height: 100vh; background-color: rgba(0,0,0, 0.5); z-index: 100; overflow:hidden">

    <div style="display:flex; justify-content:center; align-items: center; z-index: 0; -webkit-backdrop-filter: blur(5px); backdrop-filter: blur(5px);">
        <div class="modal-dialog"  style="width: 100vw; height: 70vw;" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addMemberModalLabel">Add Member</h5>
                    <button type="button" class="close" onclick="hideModalV1()">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addForm">
                        <div class="form-group" style="margin-bottom:3%">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="firstName">
                        </div>
                        <div class="form-group" style="margin-bottom:3%">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="lastName">
                        </div>
                        <div class="form-group" style="margin-bottom:3%">
                            <label for="email">E-mail Address</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group" style="margin-bottom:3%">
                            <label for="alt_email">Alt E-mail</label>
                            <input type="text" class="form-control" id="alt_email" name="alt_email">
                        </div>
                        <div class="form-group" style="margin-bottom:3%">
                            <label for="type">Type</label>
                            <input type="text" class="form-control" id="type" name="type">
                        </div>
                        <div class="form-group" style="margin-bottom:3%">
                            <label for="sex">Sex</label>
                            <input type="text" class="form-control" id="sex" name="sex">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="hideModalV1()">Close</button>
                    <button type="button" class="btn btn-primary" onclick="addMember(event)">Save</button>
                </div>
            </div>
        </div>
</div>

    </div>

    <!--- MODAL FOR EDIT EMAIL -->
    <div id="editEmailModal" style="display: none;" class="modal" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Email</h5>
                <button type="button" class="close closeEditEmailBtn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editEmailForm">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="editEmail" name="editEmail">
                    </div>
                    <div class="form-group">
                        <label for="alt_email">Alt Email</label>
                        <input type="text" class="form-control " id="editAltEmail" name="editAltEmail">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary closeEditEmailBtn" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveEmailChanges">Save Changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal For Edit Remarks -->
<div id="editRemarksModal" style="display: none;" class="modal" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Remarks</h5>
                <button type="button" class="close closeEditRemarksBtn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editRemarksForm">
                    <div class="form-group">
                        <label for="editRemarks">Remarks</label>
                        <textarea class="form-control" id="editRemarks" name="editRemarks" rows="4"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary closeEditRemarksBtn" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveRemarksChanges">Save Changes</button>
            </div>
        </div>
    </div>
</div>

    <script src="bootstrap-5.3.1/jquery-3.7.0.min.js"></script>
    <script src="DataTables/datatables.min.js"></script>
    <script src="bootstrap-5.3.1/js/bootstrap.bundle.min.js"></script>
    
    <script type="text/javascript">
        $('#datatable').DataTable({
            'serverSide': true,
            'processing': true,
            'paging': true,
            'order': [],
            'ajax': {
                'url': 'fetch_data.php',
                'type': 'post',
            },
            'fnCreateRow': function(nRow, aData, iDataIndex)
            {
                $(nRow).attr('id', aData[0]);
            },
            'columnDefs': [{
                'target': [0,5],
                'orderable': false, 
            },
            {
            // Add the "Edit Email" button to the email column (index 3)
            'targets': 3,
            'render': function (data, type, full, meta) {
                var email = full[3].split(" -- ")[0]; // Extract the email part
                var alt_email = full[3].split(" -- ")[1];
                return '<button class="btn btn-sm btn-primary editEmailBtn" data-id="' + full[0] + '" data-email="' + email + '" data-alt-email="' + alt_email + '" data-backdrop="static" data-keyboard="false" data-bs-target="#editEmailModal">Edit</button> &emsp;' + email + ' -- ' + alt_email;

            }
            },
            {
                'targets': 0,
                'render': function (data, type, full, meta) {
                    var userId = data; 
                    var remarks = full[8];
                    return '<button class="btn btn-sm btn-info editRemarksBtn" data-id=' + userId + ' data-remarks=' + remarks + '>' + data + '</button>' ;
                }
            }
        ],
            
        });
    </script>

    <script type="text/javascript">
        var stubNumber = '';

        $(document).on('click', '.checkInBtn', function(event){
            //console.log("WENT IN HERE")
            var id = $(this).data('id');

            storeStubNumber(id, stubNumber);

            $.ajax({
                url: "checkin.php",
                data: {id: id},
                type: "post",
                success: function(data)
                {
                    var json = JSON.parse(data);
                    var status = json.status;
                    var action = json.action;

                    if (status === 'success') {
                        if (action === 'alreadyCheckedIn') {
                            verifyModal.style.display = 'block';
                            // console.log(yesBtn,noBtn);


                            if(yesBtn || noBtn){
                                yesBtn.addEventListener('click', function() {
                                    revertStubNumber(id);
                                    $.ajax({
                                        url: "setnull.php",
                                        data: { id: id, type: "timeIn" },
                                        type: "post",
                                        success: function(response) {
                                            console.log(response);
                                            location.reload();
                                        }
                                    });
                                });
                                noBtn.addEventListener('click', function() {
                                    verifyModal.style.display = 'none';
                                });
                            }
                        }
                        table = $('#datatable').DataTable();
                        table.draw(); 
                    }
                    else
                    {
                        alert('Error checking in.');
                    }
                } 
            });
        });

        $(document).on('click', '.checkOutBtn', function(event){
            var id = $(this).data('id');
            $.ajax({
                url: "checkout.php",
                data: {id:id},
                type: "post",
                success: function(data)
                {
                    var json = JSON.parse(data);
                    var status = json.status;
                    var action = json.action;

                    if(status == 'success')
                    {
                        if (action === 'alreadyCheckedOut') {
                            verify2Modal.style.display = 'block';
                            
                            if(yesBtn2 || noBtn2){
                                yesBtn2.addEventListener('click', function() {
                                    $.ajax({
                                        url: "setnull.php",
                                        data: { id: id, type: "timeOut" },
                                        type: "post",
                                        success: function(response) {
                                            // console.log(response);
                                            location.reload();
                                        }
                                    });
                                });
                                noBtn2.addEventListener('click', function() {
                                    verify2Modal.style.display = 'none';
                                });
                            }
                        }
                        table = $('#datatable').DataTable();
                        table.draw(); 
                    }
                    else
                    {
                        alert('Error checking out.');
                    }
                } 
            });
        });

        function addMember(e){
            var data = $("#addForm").serialize();
            $.ajax({
                type : 'POST',
                url : 'add_member.php',
                data : data,
                success : function(response) {
                    console.log(response);
                    var res = JSON.parse(response);
                    alert(res["status"]);
                    if(res["status"] == 'success'){
                        $('#addForm')[0].reset();
                        location.reload();
                    }
                }
            });
            e.preventDefault();
        }


    $(document).on('click', '.editEmailBtn', function () {
    var id = $(this).data('id');
    var email = $(this).data('email');
    var altEmail = $(this).data('alt-email');
    
    // Populate the modal fields with the current values
    $('#editEmail').val(email);
    $('#editAltEmail').val(altEmail);
    
    // Open the edit email modal
    $('#editEmailModal').modal('show');
    
    //Close Edit Email Modal

    $(document).on('click', '.closeEditEmailBtn', function (){
        $('#editEmailModal').modal('hide');
        location.reload(); //reload the email after the edit
    })

    // Handle the save button click
    $('#saveEmailChanges').on('click', function () {
        var editedEmail = $('#editEmail').val();
        var editedAltEmail = $('#editAltEmail').val();
        
        // Send the data to the server to update the email and alt_email for the user
        $.ajax({
            url: 'edit_emails.php',
            method: 'POST',
            data: {
                id: id,
                email: editedEmail,
                alt_email: editedAltEmail
            },
            success: function (response) {
                // Handle success or error here
                if (response === 'success') {
                    alert('Emails updated successfully');
                    $('#editEmailModal').modal('hide');
                    location.reload(); // Reload the table after the edit
                } else {
                    alert('Error updating emails');
                }
            }
        });
    });
});


        // Close Edit Remarks Modal and Reload Page
        $(document).on('hidden.bs.modal', '#editRemarksModal', function () {
            location.reload(); // Reload the page when the modal is closed
        });


        // Open the edit remarks modal
        $(document).on('click', '.editRemarksBtn', function () {
            var id = $(this).data('id');
            var remarks = $(this).data('remarks');
            
            // Populate the modal field with the current remarks
            $('#editRemarks').val(remarks);
            
            // Open the edit remarks modal
            $('#editRemarksModal').modal('show');
            
            // Close Edit Remarks Modal
            $(document).on('click', '.closeEditRemarksBtn', function (){
                $('#editRemarksModal').modal('hide');
            });

            // Handle the save button click
            $('#saveRemarksChanges').on('click', function () {
                var editedRemarks = $('#editRemarks').val();
                
                // Send the data to the server to update the remarks for the user
                $.ajax({
                        url: 'remarks.php',
                        type: 'POST',
                        data: {
                            id: id,
                            remarks: editedRemarks
                        },
                        success: function (response) {
                            // Handle success or error here
                            console.log(response);
                            var res = JSON.parse(response);
                            alert(res["status"]);
                            if(res["status"] == 'success'){
                                //alert("Remark Added!");
                                location.reload();
                            }else{
                                alert("Failed to add Remark");
                            }
                        }
                    });

            });
        });

        // Stores Control Number of Stub

        function updateStubNumber(value) {
            stubNumber = value;
        }

        $(document).on('change', '.stub-number', function () {
            var value = $(this).val();
            updateStubNumber(value);
        });

        function storeStubNumber(id,stubNumber) {
            // console.log("Data Values: ",id,stubNumber);
            $.ajax({
                type: 'POST',
                url: 'add_stub_no.php',
                data: {id:id,stubNumber:stubNumber},
                success: function (response){
                    console.log("Response: ",response);
                    table = $('#datatable').DataTable();
                    table.draw();
                }
            })
        }
        
        function revertStubNumber(id){
            $.ajax({
                type: 'POST',
                url: 'setnull.php',
                data: {id:id,type:"stub_number"},
                success: function (response){}
            })
        }

        function showModalV1() {addModal.style.display = 'block';}
        function hideModalV1() {addModal.style.display = 'none';}
        function hideModalV2() {verifyModal.style.display = 'none';}
        function hideModalV3() {verify2Modal.style.display = 'none';}

    </script>
</div>
</body>
</html>