<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Courses</title>
    <link rel="stylesheet" href="/css/dashboardstyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
            
           
            
        </div>
        
        <div class="content">
            <div class="tableshow1">
                <table border="1">
                    <tr>
                        
                        <td>Course Name</td>
                        <td>Course Id</td>
                        <td>Teacher Id</td>
                        <td>Action</td>
                    </tr>
            
                    @for($i=0; $i < count($showcourses); $i++)
                    <tr>
                        <td>{{$showcourses[$i]['cname']}}</td>
                        <td>{{$showcourses[$i]['courseid']}}</td>
                        <td>{{$showcourses[$i]['instructorid']}}</td>
                        
                        <td>
                           
                            <a href="{{route('course_registration.dropcourse', $showcourses[$i]['enid'])}}">Drop Course</a> 
                      
                        </td>
                    </tr>
                    @endfor
                </table>

                <h3>Notices</h3>
                <button type="submit" id="notice">Show Notice</button>
                <table id="noticetable" class="table table-hover table-condensed" border="1" >
                    <tr>
                        <th>Course Id</th>
                        <th>Notice Name</th>
                        <th>Show</th>
                    </tr>
                     
                </table>

                <h3>Course Teacher</h3>
                <button type="submit" id="teacher">Show Teacher</button>
                <table id="teachertable" class="table table-hover table-condensed" border="1" >
                    <tr>
                        
                        <th>Teacher Name</th>
                        <th>Department</th>
                        <th>Phone</th>
                    </tr>
                     
                </table>

            </div>
         </div>
         <% for(var i=0; i< value.length; i++ ){ %>
         <script>
             
            $('#notice').on('click', function() {
                $.ajax({
                    url: '/notice/<%=value[i].courseid%>',
                    method: 'get',
                    dataType: 'json',
                    success: function(data) {
                        var msg = "";
                        for (var i = 0; i < data.length; i++) {
                            //var msg = data[i].n_details + "  - " + data[i].posted_by;
                            msg = msg + "<tr> <td> " + data[i].cid + " </td> <td> " + data[i].noticename + " </td> <td> " + data[i].noticedescription + " </td>  </tr>";
                        }
                        $('#noticetable').append(msg);
                    },
                    error: function(response) {
                        alert('server error occured')
                    }
                });
            })
        </script>

<script>
             
    $('#teacher').on('click', function() {
        $.ajax({
            url: '/teacher/<%=value[i].instructorid%>',
            method: 'get',
            dataType: 'json',
            success: function(data) {
                var msg = "";
                for (var i = 0; i < data.length; i++) {
                    //var msg = data[i].n_details + "  - " + data[i].posted_by;
                    msg = msg + "<tr> <td> " + data[i].tname + " </td> <td> " + data[i].department + " </td> <td> " + data[i].phone + " </td>  </tr>";
                }
                $('#teachertable').append(msg);
            },
            error: function(response) {
                alert('server error occured')
            }
        });
    })
</script>
 <% } %>
</body>
</html>