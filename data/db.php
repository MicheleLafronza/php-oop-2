<?php

require_once __DIR__ . '/../model/Product.php';
require_once __DIR__ . '/../model/DogProduct.php';
require_once __DIR__ . '/../model/CatProduct.php';
require_once __DIR__ . '/../model/DogFood.php';
require_once __DIR__ . '/../model/CatFood.php';
require_once __DIR__ . '/../model/DogToy.php';
require_once __DIR__ . '/../model/CatToy.php';

$db = [
    new DogProduct('Box per cani', 20.00, 'Piccolo box per piccoli cani', 'https://www.bfgcdn.com/1500_1500_90/057-0291/hunter-h-box-foldable-accessori-per-cani-detail-2.jpg', 'Taglia piccola', 'Cuccioli'),
    new CatProduct('Torretta per Gatti', 35.00, 'Torretta per far divertire e saltare i tuoi gatti', 'https://www.zooplus.it/magazine/wp-content/uploads/2023/07/gatto-si-arrampica-su-tiragraffi.jpeg', 'Per tutte le taglie', 'Per tutte le età'),
    new DogFood('Cibo per cani', 10.99, 'Croccantini sfiziosi per il tuo amico a quattro zampe', 'https://media.dm-static.com/images/f_auto,q_auto,c_fit,h_440,w_500/v1716447371/products/pim/5900951253461_CesarDelizieGiornoPolloVerdure100gr_12745_IT/cesar-cibo-umido-in-salsa-per-cani-con-pollo-e-verdure', 'Taglia media', 'Per cani adulti', 'Croccantini', ['Pollo', 'Verdure']),
    new CatFood('Cibo umido per gatti', 5.59, 'Ottimo cibo umido per gatti', 'https://www.loradeglianimali.it/36766-large_default/gourmet-red-tocchetti-e-trancetti-per-gatto-da-195-gr.jpg', 'Per tutte le taglie', 'Adulti', 'Umido', ['Pollo']),
    new DogToy('Gioco finto Pollo per cani', 3.99, 'Pollo giocattolo per cani, suona quando viene morso', 'https://media.zooplus.com/bilder/8/400/j_top_seller_1000x1000_8.jpg', 'Per tutte le taglie', 'Per tutte le età', 'Gomma', 'Giallo'),
    new CatToy('Punching ball per gatti', 11.99, 'Pallina con molla per far divertire il tuo micio', 'https://media.zooplus.com/bilder/6/400/491124_katzenkarussell_flashlight_6.jpg', 'Per tutte le taglie', 'Per tutte le età', 'Vario', 'Rosa')
];