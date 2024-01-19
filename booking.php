<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles3.css">
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <title>Booking</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Italianno&display=swap');
  </style>
<script>
    function increaseValue(element) {
        element.value = parseInt(element.value) + 1;
    }

    function decreaseValue(element) {
        element.value = parseInt(element.value) - 1;
        if (element.value < 0) {
            element.value = 0;
        }     
    }
    
    function refreshPage() {
      window.location.reload();
    }
</script>
<body>
    <h1 onclick="refreshPage()" class="booking">Booking</h1>
    <form method="POST" action="form.php">
        <table border="0">3.
            <tr>
                <td><label>Name:</label></td> 
            </tr>
            <td><input type="text" name="name" placeholder="Enter Name"></td>
            <tr>
                <td><label>Date:</label></td>  
            </tr>
            <td><input type="date" name="date"></td>
            <tr>
                <td><label>Time:</label></td>  
            </tr>
            <td><input type="time" name="time"></td>
            <tr>
                <td><label>Contact:</label></td>
            </tr>
            <td><input type="number" name="contact"></td>
            <tr>
                <td><label>E-mail:</label></td>
            </tr>
            <td><input type="email" name="email"></td>
            <tr>
                <td><label for="ppl">Table for:</label></td>
                <td>
                    <select name="ppl" id="ppl">
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="5+">5+</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label>Comment:</label></td> 
            </tr>
            <td><textarea name="comment" rows="5" cols="40" placeholder="Your comments..."></textarea></td>
            <tr>
                <td><label>Menu 1:</label></td>
                <td>
                    <div class="container">
                        <input type="number" id="number1" value="0" min="0" style="width:50px">
                        <button type="button" class="btn btn-inc" onclick="increaseValue(document.getElementById('number1'))">+</button>
                        <button type="button" class="btn btn-dec" onclick="decreaseValue(document.getElementById('number1'))">-</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td><label>Menu 2:</label></td>
                <td>
                    <div class="container">
                        <input type="number" id="number2" value="0" min="0" style="width:50px">
                        <button type="button" class="btn btn-inc" onclick="increaseValue(document.getElementById('number2'))">+</button>
                        <button type="button" class="btn btn-dec" onclick="decreaseValue(document.getElementById('number2'))">-</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td><label>Menu 3:</label></td>
                <td>
                    <div class="container">
                        <input type="number" id="number3" value="0" min="0" style="width:50px">
                        <button type="button" class="btn btn-inc" onclick="increaseValue(document.getElementById('number3'))">+</button>
                        <button type="button" class="btn btn-dec" onclick="decreaseValue(document.getElementById('number3'))">-</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td><label>Menu 4:</label></td>
                <td>
                    <div class="container">
                        <input type="number" id="number4" value="0" min="0" style="width:50px">
                        <button type="button" class="btn btn-inc" onclick="increaseValue(document.getElementById('number4'))">+</button>
                        <button type="button" class="btn btn-dec" onclick="decreaseValue(document.getElementById('number4'))">-</button>
                    </div>
                </td>
            </tr>
            <br>
            <tr>
                <td><input type="reset" name="Reset" value="Delete booking"></td>
                <td><input type="submit" name="submit" value="Book"></td>
            </tr>
        </table>
    </form>
    <footer>
        <div class="footer">
            <h2 class="motto">Culinary Excellence & Timeless Elegance</h2>
            <div class="row">
                <p> <a name="contact">Phone: (355) 69 000 1001</a></p><br>
                <p onclick="history.back()" class="year">© Veloura  2024</p>
            </div>
        </div>
        </footer>
        
</body>
</html>


