<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--mobile first design tips from W3schools-->
    <!--icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/theme.css" type="text/css"/>
    <link rel="stylesheet" href="./css/add_project.css" type="text/css" />
    <!-- <link rel="stylesheet" href= type="text/css"/> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/theme.js"></script>
    <script src="js/new_project.js" ></script>
    <title>Add New Project</title>
</head>
<body>
    <!-- Top Navigation Menu -->
<div class="topnav primary">
    <a href="./index.php" id="home" class="active">Home</a>
    <div class="myLinks">
        <a href="./projects">Projects</a>
        <div class="dropdown">
            <button class="dropbtn nav-tool">Admin Tools
              <i class="fa fa-caret-down"></i>
            </button>
            <div id="admin" class="dropdown-content tools">
                <a href="./add_project.php">New Project</a>
                <a href="./administration.php">User Administration</a>
                <a href="./logout.php" class="warning">Log Out</a>
            </div>
        </div>
    </div>
    <i class="fa fa-bars fa-3x" id="mobile-menu"></i>
</div>

<h1>Add New Project</h1>

<div class="new-project">
    <fieldset>
        <form method="post">
            <label for="project-name">Name:</label>
            <input id="project-name" type="text" placeholder="Enter your project name" />
            <br />
            <label for="project-database">Database:</label>
            <input id="project-database" type="text" placeholder="Enter the database used" />
            <br />
            <div id="front_end_tools">
                <label for="project-frontend">Front-End:</label>
                <input class="project-frontend" type="text" placeholder="Enter a front-end tool used" /><br />
            </div>
            <i id="add_frontend" class="fa fa-plus add"> Add more Front-End Tools</i>
            <div id="back_end_tools">
                <label for="project-backend">Back-End:</label>
                <input class="project-backend" type="text" placeholder="Enter a back-end tool used" /><br />
            </div>
            <i id="add_backend" class="fa fa-plus add"> Add more Back-End Tools</i><br />

            <label for="project-course-year">Course Year:</label>
            <input class="project-course-year" type="text" placeholder="Enter the course year this project was developed" />
            <br />
            <!-- some javascript is going to be necessary to be able to add more developers -->
            <label for="project-username">Developers:</label>
            <select id="developer_select">
                <!-- php query is going to be necessary here to get all developers here from database -->
                <option disable selected>Select a developer</option>
            </select> <i id="add_developer" class="fa fa-plus add"> Add developer</i><br />
            <div id="developer-list">

            </div>
            <label id="prj-desc" for="project-description">Description:</label>
            <textarea placeholder="Enter your project description"></textarea>
            <br />
            <label id="prj-desc" for="project-link">Links:</label>
            <input class="project-links" type="file" />
            <br />
            <input id="project-submit" type="submit" class="primary" value="Submit" />
        </form>
    </fieldset>
</div>
    
</body>
</html>
