<?php include('add_person.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

    <title>Add_person</title>
</head>
<body>

<!-- start Modal add -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content c-modl">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Person</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="add_person.php" method="POST">
            <div class="form-group">
                <input id="firstNameInput" type="text" placeholder="First Name" name="fname" class="form-control">  
            </div>
            <div class="form-group">
                <input id="lastNameInput" type="text" placeholder="Last Name" name="lname" class="form-control">  
            </div>
            <div class="form-group">
                <input id="emailInput" type="email" placeholder="Email" name="email" class="form-control">  
            </div>
            <div class="form-group">
                <input id="adressInput" type="text" placeholder="Adress" name="adress" class="form-control">  
            </div>
            <div class="form-group">
                <input id="phoneInput" type="number" placeholder="Phone" name="phone" class="form-control">  
            </div>
            <!-- RADIO -->
            <div class="form-group">
            <label class="inp-chk">
                <input type="radio" name="group" checked value="Family" > Family
            </label>
            <label class="inp-chk">
                <input type="radio" name="group" value="Friend"> Friend
            </label>
            <label class="inp-chk">
                <input type="radio" name="group" value="Business"> Business
            </label>
            </div>
            
            
            <!-- TEXTAREA -->
            <div class="form-group">
            <textarea class="form-control" rows="2" placeholder="Message"></textarea>  
            </div>
            <button type="submit" name="addperson" class="btn btn-primary btn-sub">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
        <button type="submit" name="addperson" class="btn btn-primary btn-sub">Submit</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal add -->

<!-- start Modal edit -->
<div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content c-modl">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Person</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="update.php" method="POST">
          <input type="hidden" name="up_id" id="up_id">
            <div class="form-group">
                <input  type="text" placeholder="First Name" name="fname" id="fname" class="form-control">  
            </div>
            <div class="form-group">
                <input type="text" placeholder="Last Name" name="lname" id="lname" class="form-control">  
            </div>
            <div class="form-group">
                <input type="email" placeholder="Email" name="email" id="email" class="form-control">  
            </div>
            <div class="form-group">
                <input  type="text" placeholder="Adress" name="adress" id="adress" class="form-control">  
            </div>
            <div class="form-group">
                <input  type="number" placeholder="Phone" name="phone" id="phone" class="form-control">  
            </div>
            <!-- RADIO -->
            <div class="form-group">
            <label class="inp-chk">
                <input type="radio" name="group" id="group" checked value="Family" > Family
            </label>
            <label class="inp-chk">
                <input type="radio" name="group" id="group" value="Friend"> Friend
            </label>
            <label class="inp-chk">
                <input type="radio" name="group" id="group" value="Business"> Business
            </label>
            </div>
            
            
            <!-- TEXTAREA -->
            <div class="form-group">
            <textarea class="form-control" rows="2" placeholder="Message"></textarea>  
            </div>
            <button type="submit" name="updatedata" class="btn btn-primary btn-sub">Edit</button>
        </form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
        <!-- <button type="submit" name="addperson" class="btn btn-primary btn-sub">Submit</button> -->
      </div>
    </div>
  </div>
</div>
<!-- end model edit -->



<div class="container">
  <header>
        <nav class="d-flex justify-content-between">
            <h1>YOU<span class="logo">CO</span></h1>
            <input type="submit" class="btn logout" value="Logout">
        </nav>
        <h2>MyWebAdmin</h2>
  </header>
  <div class="container">
      <div class="navbar-tab d-flex justify-content-between">
          <div class="tit">
            <h3>Contact List</h3>
          </div>
          <div class="search-add ">
          <form class="navbar-form d-flex justify-content-between" role="search">
            <div class="input-group ">
                <input type="text" class="form-control inpsch" placeholder="Search" name="q">
                <i class="fas fa-search"></i>
            </div>

            <div class="add">
                <!-- <input type="submit" class="btn logout"  data-bs-toggle="modal" data-bs-target="#exampleModal"> -->
                <button type="button" class="btn logout" data-bs-toggle="modal" data-bs-target="#exampleModal">
                add</button>
            </div>
          </form>
          </div>
      </div>
      <div class="tbl">
      <?php
          $connection = mysqli_connect("localhost","root","",'contactinfo');
          $db = mysqli_select_db($connection,'contactinfo');

          $query = "SELECT * FROM `user`";
          $query_run = mysqli_query($connection, $query);
      ?>
      <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">E-mail</th>
      <th scope="col">Adress</th>
      <th scope="col">Phone</th>
      <th scope="col">Groupe</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <?php
      if($query_run)
      {
          foreach($query_run as $row)
          {
  ?>
  <tbody>
    <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['fname']; ?></td>
      <td><?php echo $row['lname']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['adress']; ?></td>
      <td><?php echo $row['phone']; ?></td>
      <td><?php echo $row['group']; ?></td>
      <td>
      <button type="button" class="btn btnedit">Edit</button>
      <!-- <a href="#">Edit</a> -->
      <a href="#"><i class="fas fa-trash-alt"></i></a>
      </td>
    </tr>
    <!-- <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>Thornton@fat.com</td>
      <td>San Francisco 02</td>
      <td>0637759012</td>
      <td>Friend</td>
      <td><a href="#">Edit</a><a href="#"><i class="fas fa-trash-alt"></i></a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>Bird</td>
      <td>Bird@twitter.com</td>
      <td>San Francisco 03</td>
      <td>0607958832</td>
      <td>Business</td>
      <td><a href="#">Edit</a><a href="#"><i class="fas fa-trash-alt"></i></a></td>
    </tr> -->
  </tbody>
  <?php
          }
      }
      else
      {
          echo 'no record found';
      }
  ?>
</table>
      </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
    $('.btnedit').on('click', function() {
      $('#editmodal').modal('show');

      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function(){
        return $(this).text();
      }).get();
      console.log(data);

      $('#up_id').val(data[0]);
      $('#fname').val(data[1]);
      $('#lname').val(data[2]);
      $('#email').val(data[3]);
      $('#adress').val(data[4]);
      $('#phone').val(data[5]);
      $('#group').val(data[6]);
    });
  });
</script>
</body>
</html>