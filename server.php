<?php 
  
  $crocchette = new DogsItem ("Crocchette di Manzo", "Royal Canin", "Cibo","https://petmarket.it/12135-medium_default/medi-adult-7-kg4-royal-canin.jpg", "Cane", "1kg", "12,99$");
  $pallina = new DogsItem ("Pallina di gomma", "Morando", "Gioco","https://arcaplanet.vtexassets.com/arquivos/ids/229318/trixie-cane-palla-in-gomma-naturale-con-squittio.jpg?v=637454816312200000", "Cane", "20gr", "5,89$");
  $collare = new DogsItem ("Collare antipulci", "Pro dogs", "Gadget","https://www.thekill.it/9814-large_default/collare-realizzato-in-morbido-cuoio.jpg","Cane","20gr","8,59$");

  $pepite = new CatsItem ("Pepite di pollo", "Natural Trainer", "Cibo","https://www.moby-dick.it/foto/prodotti/700/7107_al.jpg", "Gatto", "400gr", "9.90$");
  $lettiera = new CatsItem ("Lettiera per gatti", "Magic Itter", "Cuccia&Pulizia","https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROUiqdYc_unwJWWf3OpwhxOf-KdBnbHDhENg&s", "Gatto", null, "15.90$");
  $spazzola = new CatsItem ("Spazzola con cuscinetto", "Pet clean", "Gadget","https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwrbVMlub8B-Cag3tdfw63dlQ7J_448bbVOQ&s","Gatto", "15gr", "5.50$");
 
  $products = [$crocchette, $pallina, $collare, $pepite, $lettiera, $spazzola];
  
?>