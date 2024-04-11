<div class="input content" id="input-content">
  <div class="container">
    <h3>Input</h3>
    <div style="float:left; width:48%; background-color: rgba(255, 255, 255, 0.5)">
      <form method="post" style="margin:10px">
        <fieldset>
          <legend>Personal Information</legend>
          <p><label>First Name:</label><br>
            <input type="text" name="first-name" value="">
          </p>
          <p>
            <label>Last Name:</label><br>
            <input type="text" name="last-name" value="">
          </p>
          <p>
            <label>Telephone Number:</label><br>
            <input type="number" name="tel-number" placeholder="(XXX)XXX-XXXX">
          </p>
          <p>
            <label>Email:</label><br>
            <input type="email" name="email" placeholder="XXXX@XXX.XX">
          </p>
          <p>
            <label>Birth Day:</label><br>
            <input type="date" name="birthday" value="">
          </p>
        </fieldset>
        <fieldset>
          <legend>Profession</legend>
          <input type="radio" name="profession" value="Student">Student <br>
          <input type="radio" name="profession" value="Doctor">Doctor <br>
          <input type="radio" name="profession" value="Farmer">Farmer <br>
          <input type="radio" name="profession" value="Engineer">Engineer <br>
        </fieldset>
        <fieldset>
          <legend>Favourite Sports</legend>
          <select id="sports" name="sports[]" multiple>
            <option value="Football">Football</option>
            <option value="Tennis">Tennis</option>
            <option value="Jogging">Jogging</option>
            <option value="Basketball">Basketball</option>
          </select>
        </fieldset>
        <br>
        <input type="submit">&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="reset">
      </form>
    </div>
    <div style="float:right; width:48%; background-color: rgba(255, 255, 255, 0.5); padding: 10px">
      <h4>Your input information:</h4>
      <?php

        echo "<table>";
        echo "<tr><td width='300px'>First Name: </td><td>".(empty($_POST['first-name'])?"<i style='color: red'>*MISSING</i>":$_POST['first-name'])."</td></tr>";
        echo "<tr><td>Last Name: </td><td>".(empty($_POST['last-name'])?"<i style='color: red'>*MISSING</i>":$_POST['last-name'])."</td></tr>";
        echo "<tr><td>Telephone Number: </td><td>".(empty($_POST['tel-number'])?"<i style='color: red'>*MISSING</i>":$_POST['tel-number'])."</td></tr>";
        echo "<tr><td>Email: </td><td>".(empty($_POST['email'])?"<i style='color: red'>*MISSING</i>":$_POST['email'])."</td></tr>";
        echo "<tr><td>Birth Day: </td><td>".(empty($_POST['birthday'])?"<i style='color: red'>*MISSING</i>":$_POST['birthday'])."</td></tr>";
        echo "<tr><td>Profession: </td><td>".(empty($_POST['profession'])?"<i style='color: red'>*MISSING</i>":$_POST['profession'])."</td></tr>";
        echo "<tr><td>Favourite Sports: </td><td>";
        if(empty($_POST['sports'])){
          echo "<i style='color: red'>*MISSING</i></td></tr>";
        }else{
          foreach($_POST['sports'] as $key => $value){
            if($key == 0){
              echo $value."</td></tr>";
            }else{
              echo "<tr><td></td><td>".$value."</td></tr>";
            }
          }
        }
        echo "</table>";
       ?>
    </div>
    <div style="clear:left">
    </div>

  </div>
  <br>
</div>
