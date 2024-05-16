<?php 
// categoria servizi

  $toileting = new Toileting("Pulizia del pelo", "Igiene", "56,99 $", 4);
  $toileting->setQuantities(8);

// categoria specie
  $dog = new specie ('Cane', '<i class="fa-solid fa-dog"></i>');
  $cat = new specie ('Gatto', '<i class="fa-solid fa-cat"></i>');

  // categoria cibo
  $crocchette = new Foods ("Crocchette di Manzo", "Royal Canin", "Cibo", $dog,"https://petmarket.it/12135-medium_default/medi-adult-7-kg4-royal-canin.jpg","12,99$", "Manzo con erbe tritate","25/09/2024", 2);
  $pepite = new Foods ("Pepite di pollo", "Natural Trainer", "Cibo", $cat,"https://www.moby-dick.it/foto/prodotti/700/7107_al.jpg", "9.90$", "Pollo con creme di vegetali", "25/09/2024", 2);
  $pepite->setQuantities(15);
  // var_dump($pepite);
  $scatolette = new Foods ("Mousse di pollo", "Natural Trainer", "Cibo", $cat,"https://x.cloudsdata.net/4r/images/products/large/5d3970c69798f_1.png", "8.90$", "Pollo con creme di vegetali", "25/09/2024", 4);
  $scatolette->setQuantities(10);
  // var_dump($scatolette);
  
  // categoria gadget
  $pallina = new Gadjets ("Pallina di gomma", "Morando", "Gadjet", $dog,"https://arcaplanet.vtexassets.com/arquivos/ids/229318/trixie-cane-palla-in-gomma-naturale-con-squittio.jpg?v=637454816312200000", "5,89$",['gomma','lattice'], ['Blu','Rossa','Verde']);
  $collare = new Gadjets ("Collare antipulci", "Pro dogs", "Gadget", $dog,"https://www.thekill.it/9814-large_default/collare-realizzato-in-morbido-cuoio.jpg", "7,89$",['cuoio','metallo'], ['Blu','Rossa','Verde']);
  $spazzola = new Gadjets ("Spazzola con cuscinetto", "Pet clean", "Gadget", $cat,"https://cdn.manomano.com/images/images_products/29631107/P/105814045_1.jpg", "5,89$",['gomma','lattice'], ['Blu','Rossa','Verde']);
  // var_dump($spazzola);
  
  // categoria cuccie e pulizia
  $paletta = new Kennels ("Paletta per gatti", "Magic Itter", "Cuccia&Pulizia", $cat,"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZzHVZjVrFOQG1v4Xy9K0nBk7VHdJX9wWSdQ&s", "15.90$","25 cm",['plastica'],['Blu','Rossa','Verde']);
  $lettiera = new Kennels ("Lettiera per gatti", "Magic Itter", "Cuccia&Pulizia", $cat,"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROUiqdYc_unwJWWf3OpwhxOf-KdBnbHDhENg&s", "15.90$","60x80 cm",['plastica','alluminio'],['Blu','Rossa','Verde']);
  $salviette = new Kennels ("Salviette per gatti", "Inodorina", "Cuccia&Pulizia", $cat,"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQT7P36jOQkcN1uxT9H9G73dWK0RG6dbxNc9A&s", "15.90$","",['plastica','alluminio'] ,['Blu','Rossa','Verde']);
 
  $products = [$crocchette, $scatolette, $pepite, $pallina, $collare, $spazzola, $lettiera, $paletta, $salviette];
  $services = [$toileting];
  $specie = [$dog, $cat];  
?>