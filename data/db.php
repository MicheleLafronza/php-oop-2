<?php

    require_once __DIR__ . '/../model/Product.php';
    require_once __DIR__ . '/../model/Animal.php';
    require_once __DIR__ . '/../model/Category.php';

// data con prodotti
$products = [
    
    new Category('Orsetto per cani' , 2.55, 'Orsetto da mettere in cuccia, per rendere felice il tuo cane', 'https://www.sleepypets.it/944-home_default/gioco-per-cani-personalizzato.jpg', 'dog', 'Giocattolo'),
    new Category('Tira, tira', 3.55, 'Corda per giocare al tira tira, col tuo cane', 'https://arcaplanet.vtexassets.com/arquivos/ids/223864/trixie-cane-gioco-corda.jpg?v=637454736645100000', 'dog', 'Giocattolo'),
    new Category('Finto passerotto', 4.55, 'Lascia che il tuo gatto si rilassi con questo gioco', 'https://www.dmail.it/on/demandware.static/-/Sites-dret-catalog/default/dw719c0a68/images_dmail/large/509459l_1.jpg', 'cat', 'Giocattolo'),
    new Category('Cibo per cani', 10.99, 'Cibo per cani al gusto di pollo', 'https://media.dm-static.com/images/f_auto,q_auto,c_fit,h_1200,w_1200/v1716447371/products/pim/5900951253461_CesarDelizieGiornoPolloVerdure100gr_12745_IT/cesar-cibo-umido-in-salsa-per-cani-con-pollo-e-verdure', 'dog', 'Cibo'),
    new Category('Cibo per gatti', 8.99, 'Ottimo cibo per il tuo gatto', 'https://www.brekz.it/44262/large_default.jpg', 'cat', 'Cibo')
    
];