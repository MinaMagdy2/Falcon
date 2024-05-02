<?php
 $servername = "sql107.infinityfree.com";
 $username = "if0_36475147";
 $password = "7LojK3CNK5T685j ";
 $db="if0_36475147_facl";
 $name;
 // Create connection
 $conn = mysqli_connect($servername, $username, $password,$db);
 // Check connection
 if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
 }
// استلام قيمة الـ ID من الـ GET
$id = $_GET['id'];

// قم بتنفيذ استعلام SQL لاسترداد البيانات المرتبطة بالـ ID المحدد
$selectQuery = "SELECT * FROM book WHERE ID = $id";
$result = mysqli_query($conn, $selectQuery);

// التحقق مما إذا كان هناك نتائج من الاستعلام
if (mysqli_num_rows($result) > 0) {
  // استرداد البيانات كصف واحد فقط لأننا نستخدم ID فريد
  $row = mysqli_fetch_assoc($result);
} else {
  echo 'لا توجد بيانات متاحة للعرض.';
}

mysqli_close($conn);
?>
<html>
    <head>

    </head>
    <body>
        <form action="" method="post">
            <section class="form">
                <div  class="main" ><br>
                <label class="save" for=""><?php echo 'Data: ' . $row['begin']; ?><span><i class="material-icons right-arrow">&#8594;</i></span><span><?php echo $row['end']; ?></span></label> 
         
                    <label class="save" for=""><?php echo 'Route: ' . $row['route']; ?></label>
                    <label class="save" for=""><?php echo 'Start\End: ' . $row['start']; ?><span><i class="material-icons right-arrow">&#8594;</i></span><span><?php echo $row['endTrip']; ?></span></label> 


                    <label class="save" for=""><?php echo 'Available: ' . $row['available']; ?></label>
                    <label class="save" for=""><?php echo 'Total Price: ' . $row['price']; ?></label>

                    <label class="save" for=""><?php echo 'Option: ' . $row['option']; ?></label>

                    <label class="save" for="price" id="priceLabel">price:100</label>
                    <select name="room" class="option" onchange="updatePriceLabel()">
                      <option value="double">double</option>
                      <option value="sweat">sweat</option>
                    </select>
                    
                    <script>
                    function updatePriceLabel() {
                      var priceLabel = document.getElementById("priceLabel");
                      var roomSelect = document.getElementsByName("room")[0];
                      var selectedRoom = roomSelect.value;
                      
                      if (selectedRoom === "double") {
                        priceLabel.textContent = "price: 100";
                      } else if (selectedRoom === "sweat") {
                        priceLabel.textContent = "price: 200";
                      }
                    }
                    </script>
                    <input class="input" type="text" placeholder="name">

                    <input class="input" type="email" placeholder="Email">
                     <input class="input" type="text"placeholder="phone">
                    <input class="input" type="text" placeholder="Country">

                    <input class="input" type="text"placeholder="Divers">
                     <input class="input" type="text" placeholder="Non Divers">
                     <input class="but" type="button" value="BOOK">
                                        

                </div>

            </section>
        </form>
        <style>
       .main {
  width: 30%;
  background-color: #d5c5c5;
  height: 700px;
  margin: 10px;
}

@media only screen and (max-width: 1000px) {
  .main {
    width: 31%;
    height: 800px;

  }
}

.save,
.option,
.input {
  display: block;
  margin: 0 auto;
  padding: 10px;
  width: 90%;
}

.input {
  margin-top: 20px;
  padding: 13px;
}

.but {
  display: block;
  width: 228px;
  margin: 33px auto;
  height: 38px;
  border-radius: 36px;
}

@media only screen and (max-width: 800px) {
  .save,
  .option,
  .input {
    width: 90%;
  }
}

@media only screen and (max-width: 800px) {
  .input {
    width: 90%;
  }
}          
        </style>
    </body>
</html>