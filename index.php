
<?php
include_once 'header.php';
?>
<h1 style="font-size:40px;">Documentation</h1><br><br>
    
<h1 style="font-size:20px;">Login si Register</h1>
    <p> Hashing pentru parola si statements pentru posibile erori.<p>

<p>Initial am avut un form pe pagina principala (home) care dupa logare ar fi trebuit sa modifice header-ul care initial avea login si register in mycollection si logout. Nu puteai accesa mycollection sau AddToMyCollection daca nu erai logat.</p>

<p>De asemenea am incercat sa adaug imagini folosind blob dar am intampinat erori (trebuia sa folosesc un multiform)</p><br>


<h1 style="font-size:20px;">Bottle List</h1><br>

<p>Initial am vrut sa fac o cautare cu tag-uri dar nu am reusit sa realizez un filtru care sa imi returneze sticlele care au toate tag-urile (imi returna toate sticlele care aveau cel putin un tag).</p>
<p>De asemenea ar fi trebuit facut un buton de import pentru adaugarea altor sticle.</p><br>

<h1 style="font-size:20px;">AddToMyCollection</h1><br>

<p>Inserez tipul de sticla pe care vreau sa il adaug (type este primary key) si il adaug in colectie</p><br>

<h1 style="font-size:20px;">Top Bottles</h1><br>

<p> Returneaza Bottle List dar ordonata dupa coloana Fav care ar fi trebuit sa se incrementeze de fiecare data cand un tip de sticla este adaugata intr-o colectie personala.</p><br>

<h1 style="font-size:20px;">My Collection</h1><br>

<p>Initial am vrut sa folosesc mai multe csv-uri, cate una pentru fiecare utilizator (probleme la recunoasterea sesiunii).
afiseaza colectia personala, o poti modifica prin butonul delete sau exporta prin butonul export.</p><br>

<h1 style="font-size:20px;">Logout</h1><br>
<p>Iesim din sesiune inapoi la pagina principala (login in cazul nostru)</p>




<div>
    
</div>

<?php
include_once 'footer.php';
?>