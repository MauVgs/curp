<?php

    if(!empty($_POST)){

        $curp = "";



        $nombre = $_POST["nombre"];
        $primer_apelllido = $_POST["primer_apelllido"];
        $segundo_apelllido = $_POST["segundo_apelllido"];
        $genero = $_POST["genero"];
        $dia = $_POST["dia"];
        $mes = $_POST["mes"];
        $anio = $_POST["anio"];
        $entidad = $_POST["entidad"];

        //Primer argumento  y
        //segundo argumento
        $ape = strtoupper($primer_apelllido);
        $apellido = str_split($ape);
        $paterno = dame_primera_vocal($apellido);

        //Tercer argumento
        $apellido_materno = strtoupper($segundo_apelllido);
        $apellido_m = str_split($apellido_materno);

        //Cuarto argumento
        $nom = strtoupper($nombre);
        $name = str_split($nom);

        //Quinto argumento
        //Anio mes y dia

        $year = dame_anio($anio);
        $month = dame_fecha($mes);
        $day = dame_fecha($dia);

        //Argumento de genero
        //* Argumento de genero se pasa tal cual
        //* Al igual que la entidad

        $datosAP = dame_primera_consonanteAP($apellido);
        $datosAM = dame_primera_consonanteAM($apellido_m);
        $datosN = dame_primera_consonanteN($name);
        $datos = $datosAP . $datosAM . $datosN;

        //Asignacion a la variable curp
        $curp = $apellido[0] . $paterno . $apellido_m[0] . $name[0];

        print_r('La curp es : '.$curp . $year . $month . $day . $genero . $entidad . $datos);


    }

    function dame_primera_vocal($string){
        $vocales = ["A", "E", "I", "O", "U"];

        foreach($string as $item){
            if(in_array($item, $vocales)){
                return $item;
            }
        }

        return null;
    }

    function dame_anio($string){
        $anio = substr($string, 2,2);
        return $anio;
    }

    function dame_fecha($string){
        if(strlen($string) == 1 ){
            return '0' . $string;
        }else{
            return $string;
        }
    }

    function dame_primera_consonanteAP($stringAP){
        $consonantes = ["B", "C", "D", "F", "G", "H", "J", "K", "L", "M", "N", "P", "Q",
                        "R", "S", "T", "V", "W", "X", "Y", "Z"];
        $datos = "";
        $x = 0;
        foreach($stringAP as $item){
            if($x > 0){
                if(in_array($item, $consonantes)){
                    $datos = $datos . $item;
                    return $datos;
                }
            }
            $x++;
        }
        return null;
    }
    function dame_primera_consonanteAM($stringAM){
        $consonantes = ["B", "C", "D", "F", "G", "H", "J", "K", "L", "M", "N", "P", "Q",
                        "R", "S", "T", "V", "W", "X", "Y", "Z"];
        $datos = "";
        $x = 0;
        foreach($stringAM as $item){
            if($x > 0){
                if(in_array($item, $consonantes)){
                    $datos = $datos . $item;
                    return $datos;
                }
            }
            $x++;
        }
        return null; 
    }
    function dame_primera_consonanteN($stringN){
        $consonantes = ["B", "C", "D", "F", "G", "H", "J", "K", "L", "M", "N", "P", "Q",
                        "R", "S", "T", "V", "W", "X", "Y", "Z"];
        $datos = "";
        $x = 0;
        foreach($stringN as $item){
            if($x > 0){
                if(in_array($item, $consonantes)){
                    $datos = $datos . $item;
                    return $datos;
                }
            }
            $x++;
        }
        return null; 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="src/css/main.css" type="text/css">
</head>
<body> 
    <main class="main">
        <div class="formulario">
            <form action="" method="post">
                
                <div class="formA">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="name">
                    </div>
                    <div class="form-group">>
                        <label for="primer_apelllido">Primer apellido</label>
                        <input type="text" name="primer_apelllido" id="apellidoA">
                    </div>
                    <div class="form-group">>
                        <label for="segundo_apelllido">Segundo Apellido</label>
                        <input type="text" name="segundo_apelllido" id="">
                    </div>
                    <div class="form-group">>
                        <label for="">Genero</label>
                        <label>
                            <input type="radio" name="genero" value="M" checked>Mujer
                        </label>
                        <label>
                            <input type="radio" name="genero" value="H">Hombre
                        </label>
                    </div>
                    <div class="form-group">>
                        <label for="">Fecha de nacimiento</label>
                        <select name="dia" id="">
                            <option value="">Elige el dia</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>
                        <select name="mes" id="">
                            <option value="">Elige el mes</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                        <select name="anio" id="">
                            <option value="">Elige el año</option>
                            <option value="1988">2010</option>
                            <option value="2001">2009</option>
                            <option value="1988">2008</option>
                            <option value="2001">2007</option>
                            <option value="1988">2006</option>
                            <option value="2001">2005</option>
                            <option value="1988">2004</option>
                            <option value="2001">2003</option>
                            <option value="1988">2002</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>
                            <option value="1999">1999</option>
                            <option value="1998">1998</option>
                            <option value="1997">1997</option>
                            <option value="1996">1996</option>
                            <option value="1995">1995</option>
                            <option value="1994">1994</option>
                            <option value="1993">1993</option>
                            <option value="1992">1992</option>
                            <option value="1991">1991</option>
                            <option value="1990">1990</option>
                            <option value="1989">1989</option>
                            <option value="1988">1988</option>
                            <option value="1988">1987</option>
                            <option value="1988">1986</option>
                            <option value="1988">1985</option>
                            <option value="1988">1984</option>
                            <option value="1988">1983</option>
                            <option value="1988">1982</option>
                            <option value="1988">1981</option>
                            <option value="1988">1980</option>
                            <option value="1988">1979</option>
                            <option value="1988">1978</option>
                            <option value="1988">1977</option>
                            <option value="1988">1976</option>
                            <option value="1988">1975</option>
                            <option value="1988">1974</option>
                            <option value="1988">1973</option>
                            <option value="1988">1972</option>
                            <option value="1988">1971</option>
                            <option value="1988">1970</option>
                        </select>
                    </div>
                </div>
                <div class="formB">
                    <div class="form-group">>
                    <label for="entidad">Entidad federativa</label>
                    <select name="entidad" id="">
                        <option value="AS">Aguascalientes</option>
                        <option value="BC">Baja California</option>
                        <option value="BS">Baja California Sur</option>
                        <option value="CC">Campeche</option>
                        <option value="CL">Coahuila</option>
                        <option value="CM">Colima</option>
                        <option value="CS">Chiapas</option>
                        <option value="CH">Chihuahua</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="DG">Durango</option>
                        <option value="GT">Guanajuato</option>
                        <option value="GR">Guerrero</option>
                        <option value="HG">Hidalgo</option>
                        <option value="JC">Jalisco</option>
                        <option value="MC">Mexico</option>
                        <option value="MN">Michoacan</option>
                        <option value="MS">Morelos</option>
                        <option value="NT">Nayarit</option>
                        <option value="NL">Nuevo Leon</option>
                        <option value="OC">Oaxaca</option>
                        <option value="PL">Puebla</option>
                        <option value="QT">Queretaro</option>
                        <option value="QR">Quintana Roo</option>
                        <option value="SP">San Luis Potosi</option>
                        <option value="SL">Sinaloa</option>
                        <option value="SR">Sonora</option>
                        <option value="TC">Tabasco</option>
                        <option value="TS">Tamaulipas</option>
                        <option value="TL">Tlaxcala</option>
                        <option value="VZ">Veracruz</option>
                        <option value="YN">Yucatan</option>
                        <option value="ZS">Zacatecas</option>
                    </select>
                    </div>
                    <div class="form-group">>
                        <label for="email">Correo electronico</label>
                    <input type="email" name="email" id="">
                    </div>
                    <div class="boton">
                        <button type="submit" valur="guardar">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </main>    
</body>
</html>