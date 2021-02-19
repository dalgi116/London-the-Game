<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>London the Game</title>
    <link rel="stylesheet" href="../layouts/style.css">
  </head>
  <body>
    <header>
      <a class="btn" style="float:left" href="character"><strong>BACK</strong></a>
      <br>
      <h1>Create a character</h1>
    </header>


    <form action="create" method="post">
      <div style="float:left;text-align:left">
        <p>
          <strong>Name:</strong><br>
          <input style="font-size:80%" type="text" name="name" placeholder="What's my name?"><br>
        </p>
        <p>
          <strong>Race:</strong><br>
          <label>
            <input type="radio" name="race" value="human">
            <img style="float:none;height:30px;" src="../images/human.jpg" alt="human">
          </label>
          <br>
          <label>
            <input type="radio" name="race" value="elf">
            <img style="float:none;height:30px;" src="../images/elf.jpg" alt="elf">
          </label>
          <br>
          <label>
            <input type="radio" name="race" value="dwarf">
            <img style="float:none;height:30px;" src="../images/dwarf.jpg" alt="dwarf">
          </label>
          <br>
          <label>
            <input type="radio" name="race" value="ork">
            <img style="float:none;height:30px;" src="../images/ork.jpg" alt="ork">
          </label>
          <br>
          <label>
            <input type="radio" name="race" value="goblin">
            <img style="float:none;height:30px;" src="../images/goblin.jpg" alt="goblin">
          </label>
          <br>
        </p>
        <p>
          <strong>Tribe:</strong><br>
          <label>
            <input type="radio" name="tribe" value="fire">
            <img style="float:none;height:80px;width:80px;" src="../images/fire.gif" alt="fire">
          </label>
          <label>
            <input type="radio" name="tribe" value="water">
            <img style="float:none;height:80px;width:80px;" src="../images/water.gif" alt="water">
          </label>
          <label>
            <input type="radio" name="tribe" value="ground">
            <img style="float:none;height:80px;width:80px;" src="../images/ground.gif" alt="ground">
          </label>
          <label>
            <input type="radio" name="tribe" value="wind">
            <img style="float:none;height:80px;width:80px;" src="../images/wind.gif" alt="wind">
          </label>
        </p>
      </div>
      <div style="float:right;text-align:left">
        <img src="../images/fire.gif" style="text-align: center;height:500px" alt="fire">
      </div>
      <div>
        <h2>Hello world</h2>
        <?php
        if (isset($_POST['tribe'])) {
          echo $_POST['name']."<br>";
          echo $_POST['race']."<br>";
          echo $_POST['tribe']."<br>";
        }
        ?>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        <br><br>
          <button type="submit" style="text-align: center;font-size: 200%;font-family: Georgia;color: black;padding: 25px 15px;display: inline-block;text-decoration: none;background-color: #00b300;" name="start"><strong>PLAY</strong></button>
      </div>
    </form>
    <br>




    <footer>
      <p style="text-align:center;">made by <b>Daniel Franc</b>[<a target="_blank" style="text-decoration: none;" href="https://github.com/dalgi116"><i>dalgi116</i></a>]</p>
    </footer>
  </body>
</html>
