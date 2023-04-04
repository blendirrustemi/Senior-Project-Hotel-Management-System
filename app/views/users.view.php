<?php
    //include('../controllers/Users.php');
    
    // We need to implement the select function here on the Users Admin page and fill out the table.
    // I suggest we get a loop and loop through an array of objects from the result of the query.
    // Go see Users.php for more info on the controller side of things.
    
    // PS: not sure where to implement the code on this page yet but the rest of the template should be good to use.
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Admin page </title>
    <link rel="stylesheet" href="<?=ADMIN?>/assets/css/style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="admin-sidebar">
    <div class="admin-details">
        <i class='bx bxs-user'></i>
        <span class="admin-name">Hello, Admin</span>
    </div>
    <ul class="admin-links">
        <li>
            <a href="admin">
                <i class='bx bx-book-add'></i>
                <span class="admin-link-name">Bookings</span>
            </a>
        </li>
        <li>
            <a href="users" class="active" >
                <i class='bx bxs-user-detail'></i>
                <span class="admin-link-name">Users</span>"
            </a>
        </li>
        
        <li class="admin-logout">
            <a href="login">
                <i class='bx bx-log-out'></i>
                <span class="admin-link-name">Log out</span>
            </a>
        </li>
    </ul>
</div>
<section class="admin-home-section">
    <nav>
        <div class="admin-sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="admin-dashboard">Users</span>
        </div>
        <div class="admin-search-box">
            <input type="text" placeholder="Search...">
            <i class='bx bx-search' ></i>
        </div>
    
    </nav>
    
    <div class="admin-home-content">
        
        
        <div class="admin-card">
            <div class="admin-recent-card">
                <div class="title">Customers</div><br>
                <table class="table table-striped table-bordered table-condensed">
                    <thead>
                    <tr>
                        <th width="5%">ID</th>
                        <th width="25%">Username</th>
                        <th width="25%">Password</th>
                        <th width = "20%">ACTION</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    <tr>
                        <td>1</td>
                        <td>Daniel123</td>
                        <td>Password</td>
                        <td class = "button-td">
                            <a href="usersedit">
                                <i class="bx bxs-edit"></i>
                            </a>
                            <a href="#">
                                <i class="bx bxs-user-minus"></i>
                            </a>
                        
                        </td>
                    </tr>
            
            
            </div>
        </div>
        </tbody>
        </table>
    
    </div>
    
    
    </div>
</section>

<script>
    let sidebar = document.querySelector(".admin-sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
        sidebar.classList.toggle("active");
        if(sidebar.classList.contains("active")){
            sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
        }else
            sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
</script>

</body>
</html>

