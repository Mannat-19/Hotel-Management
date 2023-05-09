
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<title>Hotel Reservation Form</title>
        <style>
html, body, div, input, span, a, select, textarea, option, h1, h2, h3, h4, 
main, aside, article, section, header, p, footer, nav, pre {
    box-sizing: border-box;
    font-family: Tahoma, Geneva, sans-serif;
}
html {
    background-color: #F8F9F9;
    background: linear-gradient(0deg, #f9f8f8 0%, #f9f8f8 80%, #cb5f51 80%, #cb5f51 100%);
    padding: 30px;
    height: 100%;
}
input,textarea,select {
    outline: 0;
}
h1 {
    margin: 0;
    padding: 25px;
    font-size: 20px;
    text-align: center;
    border-bottom: 1px solid #eceff2;
    color: black;
    font-weight: 600;
    background-color: #f9fbfc;
}
h1 i {
    padding-right: 10px;
    font-size: 24px;
}
.hotel-reservation-form {
    background-color: #fff;
    width: 500px;
    margin: 0 auto;
    box-shadow: 0px 0px 5px 0px rgba(0,0,0,.2);
}
.hotel-reservation-form .fields {
    position: relative;
    padding: 20px;
}
.hotel-reservation-form select {
    appearance: none;
    background-image: linear-gradient(45deg, transparent 50%, #c7c9cb 50%), linear-gradient(135deg, #c7c9cb 50%, transparent 50%), linear-gradient(to right, #dfe0e0, #dfe0e0);
    background-position: calc(100% - 20px) 20px, calc(100% - 15px) 20px, calc(100% - 40px) 10px;
    background-size: 5px 5px, 5px 5px, 1px 25px;
    background-repeat: no-repeat;
}
.hotel-reservation-form select option:first-child {
    display: none;
 }
.hotel-reservation-form input[type="date"]::-webkit-calendar-picker-indicator {
    color: #ddd;
    filter: invert(0.8);
}
.hotel-reservation-form input[type="text"], 
.hotel-reservation-form input[type="email"],
.hotel-reservation-form input[type="date"],
.hotel-reservation-form input[type="tel"],
.hotel-reservation-form select {
    display: flex;
    margin-top: 10px;
    padding: 15px;
    border: 1px solid #dfe0e0;
    width: 100%;
    flex-basis: 100%;
    height: 47px;
}
.hotel-reservation-form input[type="text"]:focus, 
.hotel-reservation-form input[type="email"]:focus,
.hotel-reservation-form input[type="tel"]:focus,
.hotel-reservation-form input[type="date"]:focus,
.hotel-reservation-form select:focus {
    border: 1px solid #c6c7c7;
}
.hotel-reservation-form input[type="text"]::placeholder, 
.hotel-reservation-form input[type="email"]::placeholder, 
.hotel-reservation-form input[type="tel"]::placeholder, 
.hotel-reservation-form input[type="date"]:invalid, 
.hotel-reservation-form textarea::placeholder,
.hotel-reservation-form select:invalid {
    color: #858688;
}
.hotel-reservation-form textarea {
    resize: none;
    margin-top: 15px;
    padding: 15px;
    border: 1px solid #dfe0e0;
    width: 100%;
    height: 150px;
}
.hotel-reservation-form textarea:focus {
    border: 1px solid #c6c7c7;
}
.hotel-reservation-form input[type="submit"] {
    display: block;
    margin-top: 15px;
    padding: 15px;
    border: 0;
    background-color: #cb5f51;
    font-weight: bold;
    color: #fff;
    cursor: pointer;
    width: 100%;
}
.hotel-reservation-form input[type="submit"]:hover {
    background-color: #c15b4d;
}
.hotel-reservation-form input[name="email"] {
    position: relative;
    display: block;
}
.hotel-reservation-form .field {
    display: inline-flex;
    position: relative;
    width: 100%;
    padding-bottom: 20px;
}
.hotel-reservation-form label {
    font-size: 14px;
    font-weight: 600;
    color: black;
}
.hotel-reservation-form .field i {
    position: absolute;
    color: #dfe2e5;
    top: 25px;
    left: 15px;
    z-index: 10;
}
.hotel-reservation-form .field i ~ input {
    padding-left: 45px !important;
}
.hotel-reservation-form .responses {
    padding: 15px;
    margin: 0;
}
.hotel-reservation-form .fields .wrapper {
    display: flex;
    justify-content: space-between;
}
.hotel-reservation-form .fields .wrapper > div {
    width: 100%;
}
.hotel-reservation-form .fields .wrapper .gap {
    width: 35px;
}
        </style>
	</head>
	<body>
		<form class="hotel-reservation-form" method="post">
			<h1><i class="far fa-calendar-alt"></i>Hotel Reservation Form</h1>
			<div class="fields">
            <div class="wrapper">
	<div>
		<label for="arrival">Arrival</label>
		<div class="field">
			<input id="arrival" type="date" name="arrival" required>
		</div>
	</div>
	<div class="gap"></div>
	<div>
		<label for="departure">Departure</label>
		<div class="field">
			<input id="departure" type="date" name="departure" required>
		</div>
	</div>
</div>
<div class="wrapper">
	<div>
		<label for="first_name">First Name</label>
		<div class="field">
			<i class="fas fa-user"></i>
			<input id="first_name" type="text" name="first" placeholder="First Name" required>
		</div>
	</div>
	<div class="gap"></div>
	<div>
		<label for="last_name">Last Name</label>
		<div class="field">
			<i class="fas fa-user"></i>
			<input id="last_name" type="text" name="last" placeholder="Last Name" required>
		</div>
	</div>
</div>
<label for="email">Email</label>
<div class="field">
	<i class="fas fa-envelope"></i>
	<input id="email" type="email" name="email" placeholder="Your Email" required>
</div>
<label for="phone">Phone</label>
<div class="field">
	<i class="fas fa-phone"></i>
	<input id="phone" type="tel" name="phone" placeholder="Your Phone Number" required>
</div>
<div class="wrapper">
	<div>
		<label for="adults">Adults</label>
		<div class="field">
			<select id="adults" name="adults" required>
				<option disabled selected value="">--</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
			</select>
		</div>
	</div>
	<div class="gap"></div>
	<div>
		<label for="children">Children</label>
		<div class="field">
			<select id="children" name="children" required>
				<option disabled selected value="">--</option>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
			</select>
		</div>
	</div>
</div>
<label for="room_pref">Room Preference</label>
<div class="field">
	<select id="room_pref" name="preference" required>
		<option disabled selected value="">--</option>
		<option value="Standard">Standard</option>
		<option value="Deluxe">Deluxe</option>
		<option value="Suite">Suite</option>
		<option value="Luxury">Luxury</option>
		<option value="Room with a view">Room with a view</option>
	</select>
</div>
<input type="submit" name="reserve" value="Reserve">
<?php
include "dbconn.php";
if(isset($_POST['reserve']))
{
    $arrival=$_POST['arrival'];
    $departure=$_POST['departure'];
    $first=$_POST['first'];
    $last=$_POST['last'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $adults=$_POST['adults'];
    $children=$_POST['children'];
    $preference=$_POST['preference'];
    updateTable("insert into booking(arrival,departure,first,last,email,phone,adults,children,preference)
    values('$arrival','$departure','$first','$last','$email','$phone',$adults,$children,'$preference')");
    // echo "insert into booking(arrival,departure,first,last,email,phone,adults,children,preference)
    // values('$arrival','$departure','$first','$last','$email','$phone',$adults,$children,'$preference')";
    // mysqli_close($con);
    echo "Your request has been sent successfully.. Please wait for us to call you to confirm your booking!!";
}
?>
			</div>
		</form>
	</body>
</html>