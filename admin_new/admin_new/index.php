<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Admin Dashboard</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
    .logo
    {
        
    width: 4%;
    height: 4%;
    border-radius: 50px;
    }
    .admin
    {
        width: 100px;
        object-fit : contain:
    }
    
    


</style>
</head>
<body>
    <!--navbar-->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-info">
            <div class="container-fluid">
                <img src="jyothigreen.png" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href=""class="nav-link"> Welcome Guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>
        <div class="row">
             <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="p-3">
                    <a href="#"><img src="tamatoo.jpg" class="admin"></a>
                    <p class="text-light text-center">Admin Name</p>
             </div>
             <div class="button text-center">
                <button class="my-3"><a href="" class="nav-link text-light bg-info  my-1">Insert Products</a></button>
                <button class="my-3"><a href="" class="nav-link text-light bg-info  my-1">View Products</a></button>
                <button class="my-3"><a href="insert_categories.php" class="nav-link text-light bg-info  my-1">Insert Categories</a></button>
                <button class="my-3"><a href="" class="nav-link text-light bg-info  my-1"> View Categories</a></button>
                <button class="my-3"><a href="" class="nav-link text-light bg-info  my-1"> Insert Brand</a></button>
                <button class="my-3"><a href="" class="nav-link text-light bg-info  my-1">View Brand</a></button>
                <button class="my-3"><a href="" class="nav-link text-light bg-info  my-1">All orders</a></button>
                <button class="my-3"><a href="" class="nav-link text-light bg-info  my-1">All payments</a></button>
                <button class="my-3"><a href="" class="nav-link text-light bg-info  my-1">List users</a></button>
                <button class="my-3"><a href="" class="nav-link text-light bg-info  my-1">Logout</a></button>
                
                
                   
             </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
