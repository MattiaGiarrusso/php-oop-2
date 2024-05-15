<?php 
  
  $crocchette = new DogsItem ("Crocchette di Manzo", "Royal Canin", "Cibo"," ", "Cane", "1kg", "12,99$");
  $pallina = new DogsItem ("Pallina di gomma", "Morando", "Gioco"," ", "Cane", "20gr", "5,89$");
  $collare = new DogsItem ("Collare antipulci", "Pro dogs", "Gadget"," ","Cane","20gr","8,59$");

  $pepite = new CatsItem ("Pepite di pollo", "Natural Trainer", "Cibo","https://www.moby-dick.it/foto/prodotti/700/7107_al.jpg", "Gatto", "400gr", "9.90$");
  $lettiera = new CatsItem ("Lettiera per gatti", "Magic Itter", "Cuccia&Pulizia"," ", "Gatto", null, "15.90$");
  $spazzola = new CatsItem ("Spazzola con cuscinetto", "Pet clean", "Gadget"," ","Gatto", "15gr", "5.50$");
 
  $products = [$crocchette, $pallina, $collare, $pepite, $lettiera, $spazzola];
  
?>