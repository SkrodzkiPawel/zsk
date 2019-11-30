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
        <section id="sets_area">

          <section id="create_new_set" onClick="create()">
            <h2><i class="icon-plus-circled"></i> STWÓRZ NOWY ZESTAW</h2>
          </section>

          <section class="sets" onClick="fiszka()">
            <h3 class="h3_sets">Skrętki</h3>
            <span id="categories">Pracownia Lokalnych Sieci Komputerowych</span>
            <span id="languages">Język Niemiecki</span>
            <span id="users">Od: Jan Kowalski</span>
            <span id="verified"></span>
            <span id="quantity">52 pojęć</span>
            <span id="created_at_sets">23/12/2332</span>
          </section>

          <section class="sets" onClick="fiszka()">
            <h3 class="h3_sets">Kwerendy</h3>
            <span id="categories">Bazy danych</span>
            <span id="languages">Język Angielski</span>
            <span id="users">Od: Sebastian Kubica</span>
            <span id="verified"><i class="icon-thumbs-up-alt"> Zweryfikowany</i></span>
            <span id="quantity">512 pojęć</span>
            <span id="created_at_sets">13/11/1112</span>
          </section>

          <section class="sets" onClick="fiszka()">
            <h3 class="h3_sets">Kwerendy</h3>
            <span id="categories">Bazy danych</span>
            <span id="languages">Język Angielski</span>
            <span id="users">Od: Sebastian Kubica</span>
            <span id="verified"><i class="icon-thumbs-up-alt"> Zweryfikowany</i></span>
            <span id="quantity">512 pojęć</span>
            <span id="created_at_sets">13/11/1112</span>
          </section>

        </section>

        <section id="flashcards_area">
            <button id="flashcards_back_button" class="button" onClick="fiszka()">Wróć do zestawów</button>
            <section class="flashcards" onclick="flip()">
                <span id="words"></span>
                <span id="translations"></span>
            </section>
            <section id="flashcards_buttons">
              <button class="button" onClick="lewo()">&lt;</button>
              <button class="button" onClick="prawo()">&gt;</button>
            </section>
        </section>

        <section id="create_set">

          <form id="flashcards_form" name="addFlashcardForm" method="post">
            <section id="grid1">
              <button class="umieszcz" onClick="create()">Wróć do zestawów</button>
            </section>
            <section id="grid2">
              <select class="flashcards_languages">
                <option value="angielski">Angielski</option>
                <option value="rosyjski">Rosyjski</option>
                <option value="niemiecki">Niemiecki</option>
                <option value="francuski">Francuski</option>
              </select>
            </section>
            <section id="grid3">
              <input type="submit" name="flashcards_submit" class="umieszcz" value="Umieszcz zestaw">
            </section>
            <section id="grid4">
              <label for="sets_name"><h2>Nazwa zestawu</h2></label>
              <input type="text" name="sets_name" id="sets_name">
            </section>
            <section id="grid5">
              <button type="button" id="add_flashcard_button" onClick="dodaj()">Dodaj</button>
              <input type="number" name="rows" placeholder="Podaj liczbę wierszy" id="number_of_rows" min="1">
            </section>
            <section id="grid6"></section>
            <section id="grid7"></section>
          </form>

        </section>
      </article>

      <section id="logowanie">
        <form id="log" name="formu" method="post">
            <label for="email">E-mail</label>
            <input type="email" name="email" class="inp">
            <label for="password">Hasło</label>
            <input type="password" name="password" class="inp">
            <input type="submit" name="submitLog" value="Zaloguj" class="button">
        </form>
      </section>

      <section id="rejestracja">
        <form id="rej" name="formu" method="post">
            <label for="email">E-mail</label>
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
