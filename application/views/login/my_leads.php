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
          <a class="nav-link" href="<?php echo ('dashboard');?>">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" href="<?php echo ('my_leads');?>">My Leads</a>
        </li>
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <a href="<?php echo ('logout');?>" class="btn btn-primary">Logout</a>
      </form>
    </div>
  </div>
</nav>

<div class="container mt-3">    
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Service Date</th>
        <th>Origin Address</th>
        <th>State </th>
        <th>City</th>
        <th>Destination Address</th>
        <th>State </th>
        <th>City</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data as $key => $value) 
      { ?>
        <tr>
          <td><?php echo $value->first_name;?></td>
          <td><?php echo $value->last_name;?></td>
          <td><?php echo $value->email;?></td>
          <td><?php echo $value->service_date;?></td>
          <td><?php echo $value->origin_address;?></td>
          <td><?php echo $value->state;?></td>
          <td><?php echo $value->city;?></td>
          <td><?php echo $value->destination_address;?></td>
          <td><?php echo $value->dest_state;?></td>
          <td><?php echo $value->dest_city;?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>