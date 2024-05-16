<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        
header {
    background-color: transparent;
    color: #fff;
    padding: 10px 0;
    position: fixed;
    top: 0;
    width: 100%;
}

header .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

header h1 {
    margin: 0;
}
header h1 a{
    color: white;
    transition: color 0.3s;
}
header h1 a:hover{
    color: #0ae4ad;
}


.nav-links {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
}

.nav-links li {
    margin-right: 20px;
}

.nav-links a {
    color: #fff;
    text-decoration: none;
    transition: 0.3s;
}
.nav-links .active, .nav-links a:hover{
    color: #0ae4ad;
    text-decoration:overline wavy;
}
    </style>
</head>
<body>
<header>
        <nav>
            <div class="container">
                <h1><a href="index.php">GetMed</a></h1>
                <ul class="nav-links">
                    <li><a href="#" class="active">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </nav>
    </header>
</body>
</html>