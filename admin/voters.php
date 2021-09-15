<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php include 'includes/navbar.php'; ?>
    <?php include 'includes/menubar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Voters List
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Voters</li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content">
        <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header with-border">
                <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i>
                  New</a>
                <!-- <a href="javascript:void(0);" onclick="formToggle('importFrm');"
                  class="btn btn-success btn-sm btn-flat"><i class="fa fa-upload"></i>
                  Import</a> -->
                <!-- <form action="importData.php" method="post" enctype="multipart/form-data">
                  <div class="col-xs-9" id="importFrm" style="display:none;">
                    <input type="file" name="file" style="padding:10px;">
                    <input type="submit" class="btn btn-primary" name="importSubmit" value="Upload File">
                  </div>
                </form> -->
              </div>
            </div>

            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>Name</th>
                  <th>Course</th>
                  <th>Year</th>
                  <th>Voters ID</th>
                  <th>Voted</th>
                  <th>Tools</th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT * FROM voters";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      echo "
                        <tr>
                          <td>".$row['fullname']."</td>
                          <td>".$row['course']."</td>
                          <td>".$row['year']."</td>
                          <td>".$row['voters_id']."</td>
                          <td>".$row['voted']."</td>
                          <td>
                            <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['id']."'><i class='fa fa-edit'></i> Edit</button>
                            <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['id']."'><i class='fa fa-trash'></i> Delete</button>
                          </td>
                        </tr>
                      ";
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
    </section>
  </div>

  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/voters_modal.php'; ?>
  </div>
  <?php include 'includes/scripts.php'; ?>
  <script>
    $(function () {
      $(document).on('click', '.edit', function (e) {
        e.preventDefault();
        $('#edit').modal('show');
        var id = $(this).data('id');
        getRow(id);
      });

      $(document).on('click', '.delete', function (e) {
        e.preventDefault();
        $('#delete').modal('show');
        var id = $(this).data('id');
        getRow(id);
      });

      $(document).on('click', '.photo', function (e) {
        e.preventDefault();
        var id = $(this).data('id');
        getRow(id);
      });

    });

    function getRow(id) {
      $.ajax({
        type: 'POST',
        url: 'voters_row.php',
        data: {
          id: id
        },
        dataType: 'json',
        success: function (response) {
          $('.id').val(response.id);
          $('#edit_firstname').val(response.firstname);
          $('#edit_lastname').val(response.lastname);
          $('#edit_password').val(response.password);
          $('.fullname').html(response.firstname + ' ' + response.lastname);
        }
      });
    }

    // function formToggle(ID) {
    //   var element = document.getElementById(ID);
    //   if (element.style.display === "none") {
    //     element.style.display = "block";
    //   } else {
    //     element.style.display = "none";
    //   }
    // }
  </script>
</body>

</html>