<?php

    header("Content-Type: application/json; charset=UTF-8");

    $renglon = "";

    $conexion = mysqli_connect( "localhost", "root", "", "datos");
    $sql = "SELECT nombre FROM datos";
    $resultado = $conexion->query( $sql);

    //echo mysqli_num_rows( $resultado); //número de filas

    while( $fila = mysqli_fetch_array( $resultado))
    {
        $renglon .= '{"nombre":"'.$fila[0].'"},';
    }

    //$salida = '{"records":[{"nombre":"Deimi"},{"nombre":"Maria"},{"nombre":"Pablo"}]}';
    $salida = '{"records":['.$renglon.']}';

    $salida = str_replace( "},]}", "}]}", $salida);

    echo $salida;