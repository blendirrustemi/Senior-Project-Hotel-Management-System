<?php
$db = new Database();
$con = $db->connect();

session_start();

$is_logged_in = $_SESSION['is_logged_in'];

if (!$is_logged_in){
    header("Location: login");
}

$query = "SELECT * FROM Customers where isAdmin = 1";
$result = $db->query($query);

if (isset($_POST['del_user_btn'])){
    $customer_id = $_POST['del_user_btn'];
    $delete_user_query = "DELETE FROM Customers WHERE CustomerID = '$customer_id'";

    $delete_user_result = $db->query($delete_user_query);

    header("Refresh:0");
}


if (isset($_POST['search_btn'])){
    $search_customer = $_POST['search_customer'];
    $search_query = "SELECT * FROM Customers WHERE CustomerID='$search_customer' OR FirstName LIKE '%$search_customer%' OR
                              LastName LIKE '%$search_customer%' and isAdmin = 1";
    $result = $db->query($search_query);

}
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
        <span class="admin-name">The Yorkshire Inn</span>
    </div>
    <ul class="admin-links">
        <li>
            <a href="admin">
                <i class='bx bx-book-add'></i>
                <span class="admin-link-name">Bookings & Customers</span>
            </a>
        </li>
        <li>
            <a href="users" class="active" >
                <i class='bx bxs-user-detail'></i>
                <span class="admin-link-name">Admins</span>
            </a>
        </li>
        
        <li class="admin-logout">
            <a href="logout">
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
            <span class="admin-dashboard">Admins</span>
        </div>

        <form method="POST" action="">
            <div class="admin-search-box">
                <input type="text" name="search_customer" placeholder="Search...">
                <button class='bx bx-search' name="search_btn" type="submit"></button>
            </div>
        </form>
    
    </nav>

    
    <div class="admin-home-content">
        
        
        <div class="admin-card">
            <div class="admin-recent-card">
                <div class="title">Admins</div><br>

                <button class="add_admin_button" style="background-color: #4CAF50; color: white; font-size: 16px; padding: 10px 20px; border: none; border-radius: 4px; box-shadow: 0 2px 2px rgba(0, 0, 0, 0.3); margin-bottom: 10px; float: right;">
                    <a href="addadmin" style="color:white; text-decoration: none;">Add an Admin</a>
                </button>


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

                    <?php foreach($result as $row): ?>

                    <tr>
                        <td><?=$row->CustomerID?></td>
                        <td><?=$row->Username?></td>
                        <td><?php echo str_repeat("*", strlen($row->password_hash)); ?></td>
                        <form action="" method="POST">
                            <td class = "button-td">
                                <a href="usersedit?id=<?=$row->CustomerID?>">
                                    <i class="bx bxs-edit"></i>
                                </a>
                                <button class="bx bxs-user-minus" name="del_user_btn" value="<?=$row->CustomerID?>" type="submit"></button>

                            </td>
                        </form>
                    </tr>

                    <?php endforeach; ?>
            
            
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

