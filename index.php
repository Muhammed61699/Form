
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Survey Form</title>
</head>
<body>
    <div class="heading">
        <h1 id="head">Lorem ipsum dolor sit amet cons</h1>
        <h2 id="head2">Lorem ipsum dolor sit amet consLorem ipsum dolor sit amet cons</h2>
        <h3 id="head3">Lorem ipsum dolor sit amet consLorem ipsum dolor sit amet cons</h3>
    </div>
    <form method="post" action="data.php">
        <div id="content1">
            <label for="name">First Name:</label><br><br>
            <input type="text" id="name" name="FirstName" placeholder="Enter Your Name" class="box"><br><br>
            <label for="name"> Last Name:</label><br><br>
            <input type="text" id="name" name="LastName" placeholder="Enter Your Name" class="box"><br><br>
            <label for="email">Email:</label><br><br>
            <input type="email" id="email" name="email" placeholder="Enter your email" class="box"><br><br>
            <label for="tel">Phone Number:</label><br><br>
            <input type="tel" id="tel" name="phone" placeholder="Enter your Phone Number" class="box"><br><br>
            <label for="birthday">Date of Birth:<br><br>
            <input type="date" id="birthday" name="birthday" class="btn1"> <br><br></label>
            <label for="gender">Choose your gender:<br><br>
            <input type="radio" id="gender" name="gender" value="male"> Male
            <input type="radio" name="gender" value="female"> Female
                 <br><br></label>
            <label for="Status">Marital Status:</label><br><br>
            <input type="text" id="Status"  name="status" placeholder="Enter Your Marital Status" class="box"> <br><br>
            <label for="Family">How Many Family Member Do You Have?</label><br><br>
            <input type="number" id="Family" name="family" placeholder="Enter Your Family Number" class="box"> <br><br><br>
            <label>Which Option Best Describes Your Current Role?<br><br>
                <select name="Role" class="btn1">
                    <option value="">--Please choose an option--</option>
                    <option name="Select Your Role">Select Your Role</option>
                    <option value="Student">Student</option>
                    <option value="Full Time Job">Full Time Job</option>
                    <option value="Full Time Learner">Full Time Learner</option>
                    <option value="Prefer Not to Say">Prefer Not to Say</option>
                    <option value="Other">Other</option>
                </select><br><b></b><br></p>
            </label><br><b></b>
            
            <p></p><label for="Nationality">What is Your Nationality?</label><br><br></p>
            <input type="text" id="Nationality" name="Nationality" placeholder="Enter Your Nationality?" class="box"><br><br>
            <p></p><label for="English">What Languages Do You Speak?</label></label><br><b><br>

  <input type="checkbox" id="English" name="languages[]" value="English">
  <label for="English"> English</label><br>
  <input type="checkbox" id="French" name="languages[]" value="French">
  <label for="French"> French</label><br>
  <input type="checkbox" id="Arabic" name="languages[]" value="Arabic">
  <label for="Arabic">Arabic</label><br><br>
           <p><label for="story">You can Leave a Comment in the Box below(Optional):</label></p>
          <textarea id="story" name="Comment" placeholder="Maximum 500 characters" rows="10" cols="80"></textarea><b></b>
   <div class="button">
            <input type="reset" value="Reset" class="btn">
            <input type="submit" name="Send" value="Submit" class="btn">
        </div>
       </div>
        </div>
    </form>
</body>
</html>