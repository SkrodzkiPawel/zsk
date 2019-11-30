<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Modern Learning</title>
    <link rel="stylesheet" href="style1.css" type="text/css">
    <link rel="stylesheet" href="style2.css" type="text/css">
    <link rel="stylesheet" href="style3.css" type="text/css">
    <link rel="stylesheet" href="style4.css" type="text/css">
    <link rel="stylesheet" href="style5.css" type="text/css">
    <link rel="stylesheet" href="css/fontello.css" type="text/css">
    <link rel="stylesheet" href="logowanieStyle.css" type="text/css">
    <link rel="stylesheet" href="rejestracjaStyle.css" type="text/css">

    <script type="text/javascript" src="skrypt.js"></script>

  </head>
  <body>

    <header>
      <nav id="menu-icon" onclick="menu()">
        MENU
        <i class="icon-menu"></i>
      </nav>
      <a id="img" href="index.php">
      <img src="logo.PNG" alt="Nie wczytano obrazka :(">
      </a>
      <section id="login">
        <span id="zaloguj" class="login" onclick="zaloguj()">Zaloguj</span>
        <span id="zarejestruj" class="login" onclick="zarejestruj()">Zarejestruj</span>
      </section>

    </header>

    <main>

      <aside id="menu">
        <ul>
          <a href="index.php"><li>Strona główna</li></a>
          <a href="zestawy.php"><li>Zestawy</li></a>
          <a href="autor.php"><li id="li">O autorze</li></a>
        </ul>
      </aside>

      <article id="article">
        <h1>Witaj!</h1>
        <p>Tutaj umieszczę informacje o sobie. Już wkrótce...<br><br>Paweł Skrodzki 4D</p>
      </article>

      <section id="logowanie">
        <form id="log" name="formu" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" class="inp">
            <label for="password">Hasło</label>
            <input type="password" name="password" class="inp">
            <input type="submit" name="submitLog" value="Zaloguj" class="button">
        </form>
      </section>

      <section id="rejestracja">
        <form id="rej" name="formu" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" class="inp">
            <label for="password">Hasło</label>
            <input type="password" name="password" class="inp">
            <label for="password">Potwierdź hasło</label>
            <input type="password" name="password" class="inp">
            <label for="username">Nazwa użytkownika</label>
            <input type="text" name="username" class="inp">
            <label for="firstName">Imię</label>
            <input type="text" name="firstName" class="inp">
            <label for="secondName">Nazwisko</label>
            <input type="text" name="secondName" class="inp">
            <label for="age">Wiek</label>
            <input type="number" name="age" class="inp" min="6" max="67">
            <select name="degree">
              <option value="student">Student</option>
              <option value="teacher">Nauczyciel</option>
            <input type="submit" class="button" name="submitRej" value="Zarejestruj">
            </select>
        </form>
      </section>

    </main>
    <footer>
        <section class="footer"><b>Więcej o mnie na:</b>
          <i class="icon-facebook-squared"> Facebook</i>
          <i class="icon-youtube"> YouTube</i>
          <i class="icon-twitter"> Twitter</i>
        </section>
        <section class="footer"><b>Kontakt:</b>
          <i class="icon-warehouse"> Kołata 21</i>
          <i class="icon-phone"> 799 065 364</i>
          <i class="icon-mail"> pawelskrodzki827@gmail.com</i>
        </section>
    </footer>

  </body>
</html>
