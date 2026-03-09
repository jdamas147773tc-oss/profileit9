<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
      body{
    background: grey;
}

.form{
    text-align: center;
    background-color: beige;
    border: 2px solid black;
    margin: auto;
    padding: 30px;
    width: 50%;
    border-radius: 20px;
    margin-top: 40px;
}
       
    </style>
</head>
<body>
   
    <div class="form">
    <h1>
        Profile Form Page
    </h1>
    <label for="Name">Full Name: </label>
    <input type="text" maxlength ="50" id = "Name"/>
  <br> <br>
    <label for="Age">Age:</label>
   <input type="Number" id="Age">
    <br>
<br>
    <label for="Course">Course:</label>
    <input type="text" id="Course"/>
<br> <br>
    <label for="Email">Email</label>
    <input type="email" id="Email">
<br> <br>
    <label for="gend_Male">Male</label>
    <input type="radio" name="Gender" value="Male" checked= "checked"id="gend_Male">
    <label for="gend_Female">Female</label>
    <input type="radio" name="Gender" value="Female" id="gend_Female">

<br> <br>
    <label for="Gaming">Gaming</label>
    <input type="checkbox" name="Gaming">
    <label for="Music">Music</label>
    <input type="checkbox" name="Music">
    <label for="Travel">Travel</label>
    <input type="checkbox" name="Travel">
    <label for="Cooking">Cooking</label>
    <input type="checkbox" name="Cooking">
    <label for="Watching Movies">Watching Movies</label>
    <input type="checkbox" name="Watching Movies">
    <br>
    <br>

    <textarea name="biography" id="biography">Hiiiii welcome to my laypp</textarea> <br>

    <br>
    <input type="file" name="picture"> <br>
    <br>
    <input type="submit" value= "Submit">

    
</div>
 

    
</body>
</html>