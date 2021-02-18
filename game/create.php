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


    <form action="" method="post">
      <p>
        <strong>Name:</strong><br>
        <input style="font-size:80%" type="text" name="name" placeholder="What's my name?"><br>
      </p>
      <p>
        <strong>Race:</strong><br>
        <input type="radio" name="race" value="human">
        <label for="1">Human</label><br>
        <input type="radio" name="race" value="elf">
        <label for="2">Elf</label><br>
        <input type="radio" name="race" value="ork">
        <label for="3">Ork</label><br>
        <input type="radio" name="race" value="dwarf">
        <label for="4">Dwarf</label><br>
        <input type="radio" name="race" value="goblin">
        <label for="5">Goblin</label><br>
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
    </form>
    <br>
    <br>




    <footer>
      <p style="text-align:center;">made by <b>Daniel Franc</b>[<a target="_blank" style="text-decoration: none;" href="https://github.com/dalgi116"><i>dalgi116</i></a>]</p>
    </footer>
  </body>
</html>
