<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Skills</title>
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
                
                
            </center>
            <a href="/studentDashboard"><i class="fa fa-desktop" aria-hidden="true"></i><span>Dashboard</span></a>
            
           
            
        </div>
        
        <div class="content">
            <div class="tableshow1">
                <table border="1">
                    <tr>
                        <td>ID</td>
                        <td>Title</td>
                        <td>Photo</td>
                        <td>Description</td>
                        <td>Action</td>
                    </tr>
            
                    @for($i=0; $i < count($students); $i++)
                    <tr>
                        <td>{{$students[$i]['id']}}</td>
                        <td>{{$students[$i]['title']}}</td>
                        <td><img src="{{asset('uploads/' . $students[$i]['photo'])}}" width="60px"></td>
                        <td>{{$students[$i]['description']}}</td>
                        <td>
                            <a href="{{route('profile.edit', $students[$i]['id'])}}">Edit</a> | 
                            <a href="{{route('profile.delete', $students[$i]['id'])}}">Delete</a>  
                        </td>
                    </tr>
                    @endfor
                </table>
            </div>
         </div>
    
</body>
</html>