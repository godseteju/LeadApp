<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="nav-link" href="<?php echo ('my_profile');?>">My Account</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="navbar-brand" href="<?php echo ('dashboard');?>">Dashboard</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="<?php echo ('my_leads');?>">My Leads</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <a href="<?php echo ('logout');?>" class="btn btn-primary">Logout</a>
      </form>
    </div>
  </div>
</nav>

<div class="container-fluid mt-3">
<?php echo form_open('user/dashboard'); ?>
        <div class="row">
            <div class="col"><b>Add New Opportunity</b></div>
        </div>
        <div class="row">
            <div class="col">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col"><b>Personal Information</b></div>
        </div>
        <br>
        <div class="row">
            <div class="col">
            <input type="text" class="form-control" placeholder="Enter Firstname" name="first_name">
            </div>
            <div class="col">
            <input type="text" class="form-control" placeholder="Enter Lastname" name="last_name">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
            <input type="text" class="form-control" placeholder="Enter Email" name="email">
            </div>
            <div class="col"></div>
            <!-- <div class="col">
            <input type="text" class="form-control" placeholder="Enter Lastname" name="last_name">
            </div> -->
        </div>
        <br>
        <div class="row">
            <div class="col"><b>Service Date</b></div>
        </div>
        <br>
        <div class="row">
            <div class="col">
            <input type="date" class="form-control" placeholder="Enter Service Date" name="service_date">
            </div>
            <div class="col"></div>
        </div>

        <br>
        <div class="row">
            <div class="col"><b>Origin Address</b></div>
            <div class="col"><b>Destination Address</b></div>
        </div>
        <br>
        <div class="row">
            <div class="col">
            <input type="text" class="form-control" placeholder="Origin Address" name="origin_address">
            </div>
            <div class="col">
            <input type="text" class="form-control" placeholder="Destination Address" name="destination_address">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
            <input type="text" class="form-control" placeholder="State" name="state">
            </div>
            <div class="col">
            <input type="text" class="form-control" placeholder="City" name="city">
            </div>
            <div class="col">
            <input type="text" class="form-control" placeholder="State" name="state1">
            </div>
            <div class="col">
            <input type="text" class="form-control" placeholder="City" name="city1">
            </div>
        </div>

        <br>
        <div class="row">
            <div class="col"></div>
            <div class="col"></div>
            <div class="col">
            <input type="submit" class="form-control btn btn-primary"  name="submit">
            </div>
            <div class="col"></div>
            <div class="col"></div>
        </div>

        <!-- <div class="row">
            <div class="col">
            <input type="email" class="form-control" placeholder="Enter Email" name="email">
            </div>
            <div class="col"></div>
            
        </div> -->
<?php form_close(); ?>
</div>

</body>
</html>