<?php
// $id = $_SESSION['categoria'];
    
// logro académico
    $query_usr_prototipo="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
    FROM calificacion 
    INNER JOIN datos 
    ON datos.id_ext=calificacion.id_ext1
    WHERE datos.tematica=1 and datos.tipo_usr = 1
    GROUP BY calificacion.id_ext1
    ORDER BY promedio DESC";
    $resultado_usr_prototipo= $conn->query($query_usr_prototipo);
    
// logro académico
    $query_usr_prototipo2="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
    FROM calificacion 
    INNER JOIN datos 
    ON datos.id_ext=calificacion.id_ext1
    WHERE datos.tematica=2 and datos.tipo_usr = 1
    GROUP BY calificacion.id_ext1
    ORDER BY promedio DESC";
    $resultado_usr_prototip2= $conn->query($query_usr_prototip2);
    
// logro académico
    $query_usr_prototipo3="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
    FROM calificacion 
    INNER JOIN datos 
    ON datos.id_ext=calificacion.id_ext1
    WHERE datos.tematica=3 and datos.tipo_usr = 1
    GROUP BY calificacion.id_ext1
    ORDER BY promedio DESC";
    $resultado_usr_prototip3= $conn->query($query_usr_prototip3);
    
// logro académico
    $query_usr_prototipo4="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
    FROM calificacion 
    INNER JOIN datos 
    ON datos.id_ext=calificacion.id_ext1
    WHERE datos.tematica=4 and datos.tipo_usr = 1
    GROUP BY calificacion.id_ext1
    ORDER BY promedio DESC";
    $resultado_usr_prototipo4= $conn->query($query_usr_prototipo4);
    
// logro académico
    $query_usr_prototipo5="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
    FROM calificacion 
    INNER JOIN datos 
    ON datos.id_ext=calificacion.id_ext1
    WHERE datos.tematica=5 and datos.tipo_usr = 1
    GROUP BY calificacion.id_ext1
    ORDER BY promedio DESC";
    $resultado_usr_prototipo5= $conn->query($query_usr_prototipo5);
    
// logro académico
    $query_usr_prototipo6="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
    FROM calificacion 
    INNER JOIN datos 
    ON datos.id_ext=calificacion.id_ext1
    WHERE datos.tematica=6 and datos.tipo_usr = 1
    GROUP BY calificacion.id_ext1
    ORDER BY promedio DESC";
    $resultado_usr_prototip6= $conn->query($query_usr_prototip6);
    
// logro académico
    $query_usr_prototipo7="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
    FROM calificacion 
    INNER JOIN datos 
    ON datos.id_ext=calificacion.id_ext1
    WHERE datos.tematica=7 and datos.tipo_usr = 1
    GROUP BY calificacion.id_ext1
    ORDER BY promedio DESC";
    $resultado_usr_prototipo7= $conn->query($query_usr_prototipo7);
    
// logro académico
    $query_usr_prototipo8="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
    FROM calificacion 
    INNER JOIN datos 
    ON datos.id_ext=calificacion.id_ext1
    WHERE datos.tematica=8 and datos.tipo_usr = 1
    GROUP BY calificacion.id_ext1
    ORDER BY promedio DESC";
    $resultado_usr_prototipo8= $conn->query($query_usr_prototipo8);
    
// logro académico
    $query_usr_prototipo9="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
    FROM calificacion 
    INNER JOIN datos 
    ON datos.id_ext=calificacion.id_ext1
    WHERE datos.tematica=9 and datos.tipo_usr = 1
    GROUP BY calificacion.id_ext1
    ORDER BY promedio DESC";
    $resultado_usr_prototipo9= $conn->query($query_usr_prototipo9);
    
// logro académico
    $query_usr_prototipo10="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
    FROM calificacion 
    INNER JOIN datos 
    ON datos.id_ext=calificacion.id_ext1
    WHERE datos.tematica=10 and datos.tipo_usr = 1
    GROUP BY calificacion.id_ext1
    ORDER BY promedio DESC";
    $resultado_usr_prototipo10= $conn->query($query_usr_prototipo10);
    
// logro académico
    $query_usr_prototipo11="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
    FROM calificacion 
    INNER JOIN datos 
    ON datos.id_ext=calificacion.id_ext1
    WHERE datos.tematica=11 and datos.tipo_usr = 1
    GROUP BY calificacion.id_ext1
    ORDER BY promedio DESC";
    $resultado_usr_prototipo11= $conn->query($query_usr_prototipo11);
    
// logro académico
    $query_usr_prototipo12="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
    FROM calificacion 
    INNER JOIN datos 
    ON datos.id_ext=calificacion.id_ext1
    WHERE datos.tematica=12 and datos.tipo_usr = 1
    GROUP BY calificacion.id_ext1
    ORDER BY promedio DESC";
    $resultado_usr_prototipo12= $conn->query($query_usr_prototipo12);
    
// logro académico
    $query_usr_prototipo13="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
    FROM calificacion 
    INNER JOIN datos 
    ON datos.id_ext=calificacion.id_ext1
    WHERE datos.tematica=13 and datos.tipo_usr = 1
    GROUP BY calificacion.id_ext1
    ORDER BY promedio DESC";
    $resultado_usr_prototipo13= $conn->query($query_usr_prototipo13);
    
// logro académico
    $query_usr_prototipo14="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
    FROM calificacion 
    INNER JOIN datos 
    ON datos.id_ext=calificacion.id_ext1
    WHERE datos.tematica=14 and datos.tipo_usr = 1
    GROUP BY calificacion.id_ext1
    ORDER BY promedio DESC";
    $resultado_usr_prototipo14= $conn->query($query_usr_prototipo14);
    




// logro académico
    // $query_usr="SELECT * FROM datos WHERE tematica = 1 and tipo_usr = 1";
    // $resultado_usr= $conn->query($query_usr);

// logro académico 2
    $query_usr2="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
    FROM calificacion 
    INNER JOIN datos 
    ON datos.id_ext=calificacion.id_ext1
    WHERE datos.tematica=2 and datos.tipo_usr = 1
    GROUP BY calificacion.id_ext1
    ORDER BY promedio DESC";
    $resultado_usr2= $conn->query($query_usr2);

// Discapacidad e Integración
    $query_usr3="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
    FROM calificacion 
    INNER JOIN datos 
    ON datos.id_ext=calificacion.id_ext1
    WHERE datos.tematica=3 and datos.tipo_usr = 1
    GROUP BY calificacion.id_ext1
    ORDER BY promedio DESC";
    $resultado_usr3= $conn->query($query_usr3);

// Ingenio Emprendedor
    $query_usr4="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
    FROM calificacion 
    INNER JOIN datos 
    ON datos.id_ext=calificacion.id_ext1
    WHERE datos.tematica=4 and datos.tipo_usr = 1
    GROUP BY calificacion.id_ext1
    ORDER BY promedio DESC";
    $resultado_usr4= $conn->query($query_usr4);

// Responsabilidad Social
    $query_usr5="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
    FROM calificacion 
    INNER JOIN datos 
    ON datos.id_ext=calificacion.id_ext1
    WHERE datos.tematica=5 and datos.tipo_usr = 1
    GROUP BY calificacion.id_ext1
    ORDER BY promedio DESC";
    $resultado_usr5= $conn->query($query_usr5);

// Mérito Migrante
    $query_usr6="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
    FROM calificacion 
    INNER JOIN datos 
    ON datos.id_ext=calificacion.id_ext1
    WHERE datos.tematica=6 and datos.tipo_usr = 1
    GROUP BY calificacion.id_ext1
    ORDER BY promedio DESC";
    $resultado_usr6= $conn->query($query_usr6);

// Mérito Campesino
    $query_usr7="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
    FROM calificacion 
    INNER JOIN datos 
    ON datos.id_ext=calificacion.id_ext1
    WHERE datos.tematica=7 and datos.tipo_usr = 1
    GROUP BY calificacion.id_ext1
    ORDER BY promedio DESC";
    $resultado_usr7= $conn->query($query_usr7);

// Protección al Medio Ambiente
    $query_usr8="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
    FROM calificacion 
    INNER JOIN datos 
    ON datos.id_ext=calificacion.id_ext1
    WHERE datos.tematica=8 and datos.tipo_usr = 1
    GROUP BY calificacion.id_ext1
    ORDER BY promedio DESC";
    $resultado_usr8= $conn->query($query_usr8);

// Cultura Cívica, Política y Democracia
    $query_usr9="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
    FROM calificacion 
    INNER JOIN datos 
    ON datos.id_ext=calificacion.id_ext1
    WHERE datos.tematica=9 and datos.tipo_usr = 1
    GROUP BY calificacion.id_ext1
    ORDER BY promedio DESC";
    $resultado_usr9= $conn->query($query_usr9);

// Literatura
    $query_usr10="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
    FROM calificacion 
    INNER JOIN datos 
    ON datos.id_ext=calificacion.id_ext1
    WHERE datos.tematica=10 and datos.tipo_usr = 1
    GROUP BY calificacion.id_ext1
    ORDER BY promedio DESC";
    $resultado_usr10= $conn->query($query_usr10);

// Artes Escénicas (musica)
    $query_usr11="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
    FROM calificacion 
    INNER JOIN datos 
    ON datos.id_ext=calificacion.id_ext1
    WHERE datos.tematica=11 and datos.tipo_usr = 1
    GROUP BY calificacion.id_ext1
    ORDER BY promedio DESC";
    $resultado_usr11= $conn->query($query_usr11);

// Artes Escénicas (teatro)
    $query_usr12="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
    FROM calificacion 
    INNER JOIN datos 
    ON datos.id_ext=calificacion.id_ext1
    WHERE datos.tematica=12 and datos.tipo_usr = 1
    GROUP BY calificacion.id_ext1
    ORDER BY promedio DESC";
    $resultado_usr12= $conn->query($query_usr12);

// Artes Escénicas (danza)
    $query_usr13="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
    FROM calificacion 
    INNER JOIN datos 
    ON datos.id_ext=calificacion.id_ext1
    WHERE datos.tematica=13 and datos.tipo_usr = 1
    GROUP BY calificacion.id_ext1
    ORDER BY promedio DESC";
    $resultado_usr13= $conn->query($query_usr13);

// Artes Plásticas, Visuales y Populares
    $query_usr14="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
    FROM calificacion 
    INNER JOIN datos 
    ON datos.id_ext=calificacion.id_ext1
    WHERE datos.tematica=14 and datos.tipo_usr = 1
    GROUP BY calificacion.id_ext1
    ORDER BY promedio DESC";
    $resultado_usr14= $conn->query($query_usr14);

// Arte Urbano (Grafiti)
    $query_usr15="SELECT calificacion.id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
    FROM calificacion 
    INNER JOIN datos 
    ON datos.id_ext=calificacion.id_ext1
    WHERE datos.tematica=15 and datos.tipo_usr = 1
    GROUP BY calificacion.id_ext1
    ORDER BY promedio DESC";
    $resultado_usr15= $conn->query($query_usr15);

// ciencia y tecnología
    $query_usr16="SELECT id_ext1, ROUND(AVG((doc1+doc2+doc3+doc4)/4),1) AS 'promedio'
    FROM calificacion 
    INNER JOIN datos 
    ON datos.id_ext=calificacion.id_ext1
    WHERE datos.tematica=16 and datos.tipo_usr = 1
    GROUP BY id_ext1
    ORDER BY promedio DESC";
    $resultado_usr16= $conn->query($query_usr16);


    // datos generales
    $query_generales="SELECT * FROM datos WHERE tipo_usr = 1 ORDER BY tematica ASC";
    $resultado_generales= $conn->query($query_generales);

    // ganadores
    $query_ganadores="SELECT * FROM datos WHERE tipo_usr = 1 AND medal = 1 ORDER BY tematica ASC";
    $resultado_ganadores= $conn->query($query_ganadores);

    

    ?>