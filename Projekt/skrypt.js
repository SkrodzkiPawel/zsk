function menu()
{
  var x = document.getElementById('menu');
  var y = document.getElementById('login');
  var a = document.getElementById('article');
  var w = window.innerWidth;

  if(x.style.display == 'block')
  {
    x.style.display = 'none';
    y.style.visibility = 'visible';
    a.style.display = 'block';
  }
  else
  {
    x.style.display = 'block';
    y.style.visibility = 'hidden';
    if(w < 1000)
    {
      a.style.display = 'none';
      x.style.margin = '50px auto';
    }
    else
    {
      a.style.display = 'block';
      x.style.margin = '50px 40px';
    }
  }
}

function zaloguj()
{
  var x = document.getElementById('logowanie');
  var y = document.getElementById('menu-icon');
  var z = document.getElementById('zarejestruj');
  var a = document.getElementById('article');
  var w = window.innerWidth;

  if(x.style.display == 'block')
  {
    x.style.display = 'none';
    y.style.visibility = 'visible';
    z.style.display = 'block';
    a.style.display = 'block';
    document.getElementById('zaloguj').innerHTML = "Zaloguj";
  }
  else
  {
    x.style.display = 'block';
    y.style.visibility = 'hidden';
    z.style.display = 'none';
    document.getElementById('zaloguj').innerHTML = "Wróć";
    if(w < 1000)
    {
      a.style.display = 'none';
      x.style.margin = '50px auto';
    }
    else
    {
      a.style.display = 'block';
      x.style.margin = '50px 40px';
    }
  }
}

function zarejestruj()
{
  var x = document.getElementById('rejestracja');
  var y = document.getElementById('menu-icon');
  var z = document.getElementById('zaloguj');
  var a = document.getElementById('article');
  var w = window.innerWidth;

  if(x.style.display == 'block')
  {
    x.style.display = 'none';
    y.style.visibility = 'visible';
    z.style.display = 'block';
    a.style.display = 'block';
    document.getElementById('zarejestruj').innerHTML = "Zarejestruj";
  }
  else
  {
    x.style.display = 'block';
    y.style.visibility = 'hidden';
    z.style.display = 'none';
    document.getElementById('zarejestruj').innerHTML = "Wróć";
    if(w < 1000)
    {
      a.style.display = 'none';
      x.style.margin = '50px auto';
    }
    else
    {
      a.style.display = 'block';
      x.style.margin = '50px 40px';
    }
  }
}

var words = ['Bardzooooooooooooooo długie słówko które sprawdza czy nic się nie psuje', 'Słowo2', 'Słowo3'];
var translations = ['Tłumaczenie1', 'Tłumaczenie2', 'Tłumaczenie3'];
var i = 0;
var wordsLength = words.length - 1;

function fiszka()
{
  var x = document.getElementById('sets_area');
  var y = document.getElementById('flashcards_area');
  var a = document.getElementById('login');
  var b = document.getElementById('menu-icon');

  if(x.style.display == 'none')
  {
    x.style.display = 'flex';
    y.style.display = 'none';
    a.style.display = 'flex';
    b.style.display = 'flex';
  }
  else
  {
    x.style.display = 'none';
    y.style.display = 'flex';
    a.style.display = 'none';
    b.style.display = 'none';
    document.getElementById('words').innerHTML = words[0];
    document.getElementById('translations').innerHTML = translations[0];
  }
}

function create()
{
  var x = document.getElementById('sets_area');
  var y = document.getElementById('create_set');
  var a = document.getElementById('login');
  var b = document.getElementById('menu-icon');

  if(x.style.display == 'none')
  {
    x.style.display = 'flex';
    y.style.display = 'none';
    a.style.display = 'flex';
    b.style.display = 'flex';
  }
  else
  {
    x.style.display = 'none';
    y.style.display = 'flex';
    a.style.display = 'none';
    b.style.display = 'none';
  }
}

function lewo()
{
  i--;
  if(i < 0)
  {
    i = 0;
    document.getElementById('words').innerHTML = words[i];
    document.getElementById('translations').innerHTML = translations[i];
  }
  else
  {
    document.getElementById('words').innerHTML = words[i];
    document.getElementById('translations').innerHTML = translations[i];
  }
}

function prawo()
{
  i++;
  if(i > wordsLength)
  {
    i = wordsLength;
    document.getElementById('words').innerHTML = words[i];
    document.getElementById('translations').innerHTML = translations[i];
  }
  else
  {
    document.getElementById('words').innerHTML = words[i];
    document.getElementById('translations').innerHTML = translations[i];
  }
}

function flip()
{
  var x = document.getElementById('words');
  var y = document.getElementById('translations');

  if(x.style.display == 'none')
  {
    x.style.display = 'flex';
    y.style.display = 'none';
  }
  else
  {
    x.style.display = 'none';
    y.style.display = 'flex';
  }
}

function dodaj()
{
  var number_of_rows = document.getElementById('number_of_rows').value;
  var counter = 0;
  var number_to_count = parseInt(number_of_rows);
  for(var i = 0; i<number_of_rows; i++)
  {
    document.getElementById('grid6').innerHTML += '<input type="text" class="flashcards_input" placeholder="Słówko"><input type="text" class="flashcards_input" placeholder="Tłumaczonko">';
  }
  document.getElementById('grid7').innerHTML = '<b>Ilość pojęć:</b>' + counter;
}
