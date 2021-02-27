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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content c-modl">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Person</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

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
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>Mark@mdo.com</td>
      <td>San Francisco 01</td>
      <td>0607757802</td>
      <td>Family</td>
      <td><a href="#">Edit</a><a href="#"><i class="fas fa-trash-alt"></i></a></td>
    </tr>
    <tr>
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
    </tr>
  </tbody>
</table>
      </div>
  </div>
</div>

</body>
</html>