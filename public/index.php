<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';


$products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe'];

echo $twig->render('products.html.twig', ['products' => $products]);

echo $twig->render('home.html.twig');

echo $twig->render('_footer.html.twig');






    
