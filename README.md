

## Overview
FlyHigh is a comprehensive hotel management system designed to streamline hotel operations and enhance the guest experience. This system includes features such as user and staff authentication, room booking, and facility management.

## Features
- **Authentication:** User and staff login with role-based access control.
- **Room Booking:** Book different types of rooms.
- **Facility Management:** Manage and view facilities like swimming pool, spa, restaurants, gym, and heli service.
- **Responsive Design:** Built with Bootstrap 5 for a responsive layout.
- **Enhanced User Experience:** Utilizes SweetAlert for alerts and AOS (Animate On Scroll) for animations.
- **Admin panel:** admin panel to add hotel services such as staff, rooms and to confirm customer bookings

## Technologies Used
- HTML
- CSS (Bootstrap 5)
- JavaScript
- PHP
- MySQL
- AOS (Animate On Scroll)

## Installation
 **Clone the repository:**
 
 -move to the xampp/htdocs directory using cd(change directory) command
   ```sh
   git clone https://github.com/anisha00207/hotel-fly-high.git
```
## setup


 Open config.php and update the database credentials
 ```sh
 <?php
$servername = "your_server";
$username = "your_username";
$password = "your_password";
$dbname = "hotel_management";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
```
**access the admin panel**

username- admin@gmail.com

password-1234

to change or to add the username and password of the admin/staff , edit the emp_login table of flyhigh database of phpmyadmin
```sh  
http://localhost:8080/phpmyadmin
```

**note - the port number could be different in my case it's 8080**

## Screenshots

![image](https://github.com/anisha00207/hotel-fly-high/assets/90251007/3c73024f-9656-427a-8bfb-2c33c1ad4185)

![image](https://github.com/anisha00207/hotel-fly-high/assets/90251007/15e9759d-6f3c-4598-b36d-5b327585b215)

![image](https://github.com/anisha00207/hotel-fly-high/assets/90251007/f18051b8-12eb-4858-8062-70a5d0fe6e78)

![image](https://github.com/anisha00207/hotel-fly-high/assets/90251007/5e89ca19-4c28-46c6-a62b-34c1370fd37d)

![image](https://github.com/anisha00207/hotel-fly-high/assets/90251007/70dcadc3-c9a0-4caf-becb-61320bdc4707)

![image](https://github.com/anisha00207/hotel-fly-high/assets/90251007/f3f8d003-819e-4f75-8ae3-42cb8973104e)

![image](https://github.com/anisha00207/hotel-fly-high/assets/90251007/57764d0c-0d8b-475b-b288-c96292ec827d)

![image](https://github.com/anisha00207/hotel-fly-high/assets/90251007/f3ea7e58-a416-46f4-a781-f1fba5a821d1)

![image](https://github.com/anisha00207/hotel-fly-high/assets/90251007/c5f657e1-5ade-40e3-8198-64a7d308de69)



















   

