<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Drop</title>
    <link rel="stylesheet" href="/css/dashboardstyle.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>
<body>
    <input type="checkbox" id="check">
    <!---header-->
    <header>
        <label for="check">
        <i class="fa fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left-area">
            <h3>Student <span>Profile</span></h3>
        </div>
        <div class="right-area">
        <ul class="navbar">
        <li>  <a href="/logout" class="logout_btn">Logout</a></li>
        <li>  <a href="#" class="logout_btn">Edit Tradition</a>
        <ul class="next">
        <li><a href="edit_feature.php" class="logout_btn">Edit Feature</a></li>
        
        </ul>
    </li>
          <li>  <a href="" class="logout_btn">Add Performance</a>
          <ul class="next">
        <li><a href="/file_upload" class="logout_btn">Photography</a></li>
        <li><a href="offeradd.php" class="logout_btn">Add Offer</a></li>
        <li><a href="addchefs.php" class="logout_btn">Chefes Profile</a></li>
        <li><a href="addnews.php" class="logout_btn">LatestNews</a></li>
        </ul>
        </li>
        <li>  <a href="" class="logout_btn">Add Photo</a>
        <ul class="next">
        <li><a href="addslide.php" class="logout_btn">Add Slider</a></li>
        
        <li><a href="gellarypic.php" class="logout_btn">Add Gellary</a></li>
        </ul>
        </li>
         
        </ul>  
        </div>
        
    </header>

    <!---sidebar-->
    
        <div class="sidebar">
            <center>
                

                                   
                <img src="" class="profile-img" alt="">
                <h4><%= data.email %></h4>
                
            </center>
            <a href="/studentDashboard"><i class="fa fa-desktop" aria-hidden="true"></i><span>Dashboard</span></a>
            <a href="admininsert.php"><i class="fa fa-cogs" aria-hidden="true"></i><span>Add Food</span></a>
            <a href="admin_edt_dlt.php"><i class="fa fa-table" aria-hidden="true"></i><span>Update Food</span></a>
            <a href="tradition_user.php"><i class="fa fa-th" aria-hidden="true"></i><span>Tradition User</span></a>
            <a href="showofferlist.php"><i class="fa fa-info-circle" aria-hidden="true"></i><span>Offer List</span></a>
            <a href="employee_reg.php"><i class="fa fa-sliders-h" aria-hidden="true"></i><span>Employee</span></a>
           
            
        </div>
        <form method="post" enctype="multipart/form-data">
            <div class="content">
                <div class="tableshow1">
                    <table>
                        <tr>
                            <td>Course Name :</td>
                            <td><input type="text" name="coursename" value="{{$cname}}"></td>
                        </tr>
                        <tr>
                            <td>Course Id :</td>
                            <td><input type="text" name="price" value="{{$courseid}}"></td>
                        </tr>
                       
                        <tr>
                            <h3>Are you sure?</h3>
                            <td><input type="submit" name="submit" value="Confirm"></td>
                        </tr>
                       
                       
                    </table>
                </div>
             </div>
        </form>
        
    
</body>
</html>