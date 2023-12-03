<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="booking.css">
    <link rel="stylesheet" href="main.js">
    <title>Room Booking</title>
</head>
<body>
    <div class="book">
        <form action="forbooking.php" class="form" method="post">
            <h2>Room Details</h2>
            <h4>Checkin-date</h4>
            <input type="text" name="userId" id="userId" hidden>
            <input type="text" name="roomId" id="roomId" hidden>
            <div class="input-group">
                <input type="date" min = "2022-05-22" max = "2022-12-31" name="checkin" id="checkin" required>
            </div>
            <h4>Checkout-date</h4>
             <div class="input-group">
                 <input type="date"  min = "2022-05-23" max = "2022-12-31" name="checkout" id="checkout" onchange="getDays()" required>
             </div>
             <script>
               function getDays(){
                var start_date = new Date(document.getElementById('checkin').value);

                var end_date = new Date(document.getElementById('checkout').value);

                var per_price = document.getElementById('price').value;

                //Here we will use getTime() function to get the time difference
                var time_difference = end_date.getTime() - start_date.getTime();

                //Here we will divide the above time difference by the no of miliseconds in a day
                var days_difference = time_difference / (1000*3600*24);

                var total_price = per_price*days_difference;


                //alert(days);

                document.getElementById('days').value = days_difference;

                document.getElementById('price').value = total_price;

               }
             </script>
             <div class="input-group">
                <input type="text" name="name" id="name" required>
                <label for="name">Booker's Name</label>
             </div>
             <h4>Location</h4>
             <br>
             <div class="select-box">
                <div class="options-container">
                  <div class="option">
                    <input
                      type="radio"
                      class="radio"
                      id="automobiles"
                      name="category"
                      value="Chennai"
                    required/>
                    <label for="automobiles">Chennai</label>
                  </div>
                  <div class="option">
                    <input type="radio" class="radio" id="Hyderbad" name="category" value="Hyderabad" />
                    <label for="location">Hyderabad</label>
                  </div>
        
                  <div class="option">
                    <input type="radio" class="radio" id="Banglore" name="category" value="Banglore"/>
                    <label for="location">Bangalore</label>
                  </div>
                </div>
                <br>
             <div class="input-group">
                 <input type="number" name="adults" id="adult" required>
                 <label for="adults">Adults</label>
             </div>
             <div class="input-group">
                 <input type="text" name="room_type" id="room-type" readonly required>
             </div>
             <h4>No of Days</h4>
             <div class="input-group">
                 <input type="number" name="no_of_days" id="days" onchange="forprice()"  readonly required>
             </div>
             <h4>Price</h4>
             <div class="input-group">
             <input type="text" name="price" id="price"  readonly required>
             </div>
             <script>
               document.getElementById("price").value = localStorage.getItem("Price");
               document.getElementById("room-type").value = localStorage.getItem("Room Type");
               document.getElementById("adult").value = localStorage.getItem("Adults");
             </script>
             <button  class="submit-btn">Proceed To Payment</button>
        </form>
               <script>
               
               </script>
    </div>
    <script>
      //document.getElementById('userId').value = sessionStorage.userId;
      let params = (new URL(document.location)).searchParams;
      let id = params.get('id');
      document.getElementById('roomId').value = id;
      
    </script>
</body>
</html>