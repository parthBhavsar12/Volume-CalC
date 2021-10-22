<?php session_start();
    if(!isset($_POST['horizontal_cylinder_btn_calculate']) and !isset($_POST['vertical_cylinder_btn_calculate']) and !isset($_POST['rectangle_btn_calculate']) and !isset($_POST['horizontal_oval_btn_calculate']) and !isset($_POST['vertical_oval_btn_calculate']) and !isset($_POST['horizontal_capsule_btn_calculate']) and !isset($_POST['vertical_capsule_btn_calculate'])){
        header("Location: index.php");
        session_destory();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Calculator</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="icon" href="tab_icon.jpg">
    <style>
        *{
            font-family: 'Ubuntu', 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        /* body::before{
            background: url('bodyBgImage.jpg') repeat-y center center/cover;
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.9;
        } */
        body{
            /* background: url('bodyBgImage.jpg') repeat-y center center/cover;
            height: 100%; */
            /* background-color: #bee0c4; */
            background-color: #e5f3e5;
            /* filter: blur(5px); */
        }
        h1{
            text-align: center;
            color: #121275;
            margin: 40px auto;
            /* margin: 50px 140px; */
            /* margin-left: 180; */
            padding: 10px;
            border: 1px solid;
            border-radius: 20px;
            /* animation-name: gradient-h-one;
            animation-duration: 9s;
            animation-iteration-count: infinite; */
            user-select: none;
        }
        table{
            /* box-sizing: border-box; */
            /* margin: 20px; */
            /* margin: 20px auto; */
            margin: 30px 0px;
            /* margin-top: 20px;
            margin-bottom: 20px; */
            width: 100%;
            box-shadow: none;
            border: none;
        }
        th,td{
            border: 2px solid blue;
            border-radius: 10px;
            padding: 5px;
            font-size: 25px;
            font-family: 'Bree Serif', 'serif';
            text-align: center;
            background-color: #ede0a7;
        }
        input,select,a{
            font-size: 25px;
            text-align: center;
            font-family: 'Bree Serif', 'serif';
            border-radius: 10px;
            border: none;
            /* background-color: #e6e9eb; */
            background-color: white;
            color: black;
        }
        input:hover,select:hover{
            border: 1px solid;
        }
        td.no-border{
            border: none;
            width: 300px;
            background-color: unset;
        }
        /* .container{
            background: url('pageBg.jpg');
            background-size: 100%;
            background-repeat : repeat-y;
            padding: 40px;
            margin: 60px 140px;
            margin-left: 160;
            border-radius: 25px;
            animation-name: gradient-anim;
            animation-duration: 10s;
            animation-iteration-count: infinite;
        } */
        input[type="reset"]{
            background-color: #c87777;
            width: 300px;
            height: 50px;
            font-size: 30px;
            font-weight: bold;
            color: #4d0909;
        }
        input[type="submit"]{
            background-color: #6fc46f;
            width: 300px;
            height: 50px;
            font-size: 30px;
            font-weight: bold;
            color: #042f04;
        }
        input[type="reset"]:hover{
            border: 2px solid red;
        }
        input[type="submit"]:hover{
            border: 2px solid green;
        }
        td.title{
            background-color: #c8cce5;
            /* background-color: #a1a9d8; */
            color: #010a20;
            font-weight: bold;
            user-select: none;
        }
        th.title{
            background-color: #253252;
            /* background-color: #010a20; */
            color: white;
            font-weight: normal;
            user-select: none;
        }
        /* a{
            background-color: #6fc46f;
            background-color: #ade0ad;
            width: 300px;
            height: 50px;
            padding: 10px 15px;
            font-size: 30px;
            font-weight: bold;
            color: #042f04;
            display: block;
            margin: auto;
            user-select: none;
        } */
        img{
            width: 300px;
            height: 100px;
            /* border-radius: 5px; */
            float: left;
            /* position: 10px; */
            cursor: none;
        }
        img[src="logo1.jpg"]{
            float: right;
        }
        img[src="back.jpg"]{
            display: inline;
            width: 50px;
            height: 50px;
            border: 1px solid blue;
            border-radius: 10px;
            background-color: white;
            /* padding: 0px 5px; */
        }
        header{
            text-align: center;
            /* background-color: silver; */
            background-color: white;
            height: 100px;
            font-size: 50px;
            font-weight: bolder;
            padding: 10px;
            border: 2px solid;
            color: #24249a;
            user-select: none;
        }
        header span{
            display: inline-block;
            vertical-align: middle;
            text-decoration: underline;
            font-style: italic;
            text-decoration-color: #df0024;
            line-height: 100px;
        }
        /* @keyframes gradient-anim{
            0%{box-shadow: 5px 5px 1000px blue;}
            20%{box-shadow: 5px 5px 1000px yellow;}
            40%{box-shadow: 5px 5px 1000px green;}
            60%{box-shadow: 5px 5px 1000px pink;}
            80%{box-shadow: 5px 5px 1000px orange;}
            100%{box-shadow: 5px 5px 1000px red;}
        }
        @keyframes gradient-h-one{
            0%{background: linear-gradient(to right, orange, lightgreen, pink);}
            50%{background: linear-gradient(to right, lightgreen, pink, orange);}
            100%{background: linear-gradient(to right, pink, lightgreen, orange);}
        } */      
        a{
            /* background-color: #6fc46f; */
            /* background-color: #ade0ad; */
            background-color: #253252;
            /* width: 300px; */
            width: 150px;
            height: 51px;
            /* padding: 10px 15px; */
            font-size: 30px;
            /* font-weight: bold; */
            /* color: #042f04; */
            color: white;
            display: block;
            margin: auto;
            user-select: none;
        }
        a:hover{
            border: 2px solid blue;
        }
        @media screen and (max-width: 1500px){
            header{
                height: 390px;
                text-align: center;
            }
        }
        @media screen and (max-width: 1500px){
            img{
                /* clear: both; */
                display: block;
                margin: auto;
                padding: 10px;
                border: 2px solid red;
            }
        }
        @media screen and (max-width: 1500px){
            img[src="logo.jpg"],img[src="logo1.jpg"]{
                float: none;
            }
        }
        @media screen and (max-width: 1500px){
            header span{
                /* float: none; */
                display: block;
                margin: 10px auto;
                padding: 10px;
            }
        }
        @media screen and (max-width: 1500px){
            img[src="back.jpg"]{
                padding: 0px;
                /* width: 40px;
                height: 40px; */
            }
        }
    </style>
    <!-- <h1>Tank Volumes ( Answers )</h1> -->
</head>
<body>
    <header>
        <img src="logo.jpg">
        <span>TANK VOLUMES ( Answers )</span>
        <img src="logo1.jpg">
    </header>
    <?php
        /*if(isset($_POST['height_value']) and isset($_POST['width_value']) and isset($_POST['length_value']) and isset($_POST['filled_depth_value'])){
            $h = floatval($_POST['height_value']);
            $w = floatval($_POST['width_value']);
            $l = floatval($_POST['length_value']);
            $f = floatval($_POST['filled_depth_value']);
            $total_capacity = $h*$w*$l;
            $filled_volume = $h*$w*$f;
        }*/
        function convert_into_USgallons($vol){
            //1 cubic mm = 2.6417e-7 US Liquid Gallons
            //1 cubic mm = 0.00000026417 US Liquid Gallons
            // echo 0.00000026417*$vol;
            return round(0.00000026417*$vol,4);
        }
        function convert_into_IMPgallons($vol){
            //1 cubic mm = 2.1997e-7 Imp. Gallons
            //1 cubic mm = 0.00000021997 Imp. Gallons
            return round(0.00000021997*$vol,4);
        }
        function convert_into_Liters($vol){
            //1 cubic mm = 1e-6 Liters
            //1 cubic mm = 0.000001 Liters
            return round(0.000001*$vol,4);
        }
        function convert_into_CubicMeters($vol){
            //1 cubic mm = 1e-9 Cubic Meters
            //1 cubic mm = 0.000000001 Cubic Meters
            return round(0.000000001*$vol,4);
        }
        function convert_into_CubicFeet($vol){
            //1 cubic mm = 3.5315e-8 Cubic Feet
            //1 cubic mm = 0.000000035315 Cubic Feet
            return round(0.000000035315*$vol,4);
        }
        if(isset($_POST['horizontal_cylinder_btn_calculate'])){
            if(isset($_POST['horizontal_cylinder_length_value']) and isset($_POST['horizontal_cylinder_diameter_value']) and isset($_POST['horizontal_cylinder_filled_depth_value'])){
                $l = floatval($_POST['horizontal_cylinder_length_value']);
                $d = floatval($_POST['horizontal_cylinder_diameter_value']);
                $f = floatval($_POST['horizontal_cylinder_filled_depth_value']);
                $r = $d/2;
                $total_capacity = pi()*pow($r,2)*$l;
                $filled_volume = 0;
            echo '
            <table>
                <tr>
                    <th class="title">Shape</th>
                    <td colspan="3">'.$_SESSION['tank_type'].'</td>
                </tr>
                <tr>
                    <th class="title">Length (l)</th>
                    <th class="title">Diameter (d)</th>
                    <th class="title">Filled Depth (f)</th>
                </tr>
                <tr>
                    <td>'.$l.' mm</td>
                    <td>'.$d.' mm</td>
                    <td>'.$f.' mm</td>
                </tr>
            </table>
            ';
            }
        }
        elseif(isset($_POST['vertical_cylinder_btn_calculate'])){
            if(isset($_POST['vertical_cylinder_height_value']) and isset($_POST['vertical_cylinder_diameter_value']) and isset($_POST['vertical_cylinder_filled_depth_value'])){
                $h = floatval($_POST['vertical_cylinder_height_value']);
                $d = floatval($_POST['vertical_cylinder_diameter_value']);
                $f = floatval($_POST['vertical_cylinder_filled_depth_value']);
                $r = $d/2;
                $total_capacity = pi()*pow($r,2)*$h;
                $filled_volume = pi()*pow($r,2)*$f;
            echo '
            <table>
                <tr>
                    <th class="title">Shape</th>
                    <td colspan="3">'.$_SESSION['tank_type'].'</td>
                </tr>
                <tr>
                    <th class="title">Height (h)</th>
                    <th class="title">Diameter (d)</th>
                    <th class="title">Filled Depth (f)</th>
                </tr>
                <tr>
                    <td>'.$h.' mm</td>
                    <td>'.$d.' mm</td>
                    <td>'.$f.' mm</td>
                </tr>
            </table>
            ';
            }
        }
        elseif(isset($_POST['rectangle_btn_calculate'])){
            if(isset($_POST['rectangle_height_value']) and isset($_POST['rectangle_width_value']) and isset($_POST['rectangle_length_value']) and isset($_POST['rectangle_filled_depth_value'])){
                $h = floatval($_POST['rectangle_height_value']);
                $w = floatval($_POST['rectangle_width_value']);
                $l = floatval($_POST['rectangle_length_value']);
                $f = floatval($_POST['rectangle_filled_depth_value']);
                $total_capacity = $h*$w*$l;
                $filled_volume = $l*$w*$f;
            echo '
            <table>
                <tr>
                    <th class="title">Shape</th>
                    <td colspan="3">'.$_SESSION['tank_type'].'</td>
                </tr>
                <tr>
                    <th class="title">Height (h)</th>
                    <th class="title">Width (w)</th>
                    <th class="title">Length (l)</th>
                    <th class="title">Filled Depth (f)</th>
                </tr>
                <tr>
                    <td>'.$h.' mm</td>
                    <td>'.$w.' mm</td>
                    <td>'.$l.' mm</td>
                    <td>'.$f.' mm</td>
                </tr>
            </table>
            ';
            }
        }
        elseif(isset($_POST['horizontal_oval_btn_calculate'])){
            if(isset($_POST['horizontal_oval_height_value']) and isset($_POST['horizontal_oval_width_value']) and isset($_POST['horizontal_oval_length_value']) and isset($_POST['horizontal_oval_filled_depth_value'])){
                $hh = floatval($_POST['horizontal_oval_height_value']);
                $hw = floatval($_POST['horizontal_oval_width_value']);
                $l = floatval($_POST['horizontal_oval_length_value']);
                $f = floatval($_POST['horizontal_oval_filled_depth_value']);
                $r = $hh/2;
                $a = $hw-$hh;
                $total_capacity = ((pi()*pow($r,2))+(2*$r*$a))*$l;
                $filled_volume = 0;
            echo '
            <table>
                <tr>
                    <th class="title">Shape</th>
                    <td colspan="3">'.$_SESSION['tank_type'].'</td>
                </tr>
                <tr>
                    <th class="title">Height (h)</th>
                    <th class="title">Width (w)</th>
                    <th class="title">Length (l)</th>
                    <th class="title">Filled Depth (f)</th>
                </tr>
                <tr>
                    <td>'.$hh.' mm</td>
                    <td>'.$hw.' mm</td>
                    <td>'.$l.' mm</td>
                    <td>'.$f.' mm</td>
                </tr>
            </table>
            ';
            }
        }
        elseif(isset($_POST['vertical_oval_btn_calculate'])){
            if(isset($_POST['vertical_oval_height_value']) and isset($_POST['vertical_oval_width_value']) and isset($_POST['vertical_oval_length_value']) and isset($_POST['vertical_oval_filled_depth_value'])){
                $vh = floatval($_POST['vertical_oval_height_value']);
                $vw = floatval($_POST['vertical_oval_width_value']);
                $l = floatval($_POST['vertical_oval_length_value']);
                $f = floatval($_POST['vertical_oval_filled_depth_value']);
                $r = $vw/2;
                $a = $vh-$vw;
                $total_capacity = ((pi()*pow($r,2))+(2*$r*$a))*$l;
                $filled_volume = 0;
            echo '
            <table>
                <tr>
                    <th class="title">Shape</th>
                    <td colspan="3">'.$_SESSION['tank_type'].'</td>
                </tr>
                <tr>
                    <th class="title">Height (h)</th>
                    <th class="title">Width (w)</th>
                    <th class="title">Length (l)</th>
                    <th class="title">Filled Depth (f)</th>
                </tr>
                <tr>
                    <td>'.$vh.' mm</td>
                    <td>'.$vw.' mm</td>
                    <td>'.$l.' mm</td>
                    <td>'.$f.' mm</td>
                </tr>
            </table>
            ';
            }
        }
        elseif(isset($_POST['horizontal_capsule_btn_calculate'])){
            if(isset($_POST['horizontal_capsule_side_length_value']) and isset($_POST['horizontal_capsule_diameter_value']) and isset($_POST['horizontal_capsule_filled_depth_value'])){
                $a = floatval($_POST['horizontal_capsule_side_length_value']);
                $d = floatval($_POST['horizontal_capsule_diameter_value']);
                $f = floatval($_POST['horizontal_capsule_filled_depth_value']);
                $r = $d/2;
                $total_capacity = pi()*pow($r,2)*(((4/3)*$r)+$a);
                $filled_volume = 0;
            echo '
            <table>
                <tr>
                    <th class="title">Shape</th>
                    <td colspan="3">'.$_SESSION['tank_type'].'</td>
                </tr>
                <tr>
                    <th class="title">Side Length (a)</th>
                    <th class="title">Diameter (d)</th>
                    <th class="title">Filled Depth (f)</th>
                </tr>
                <tr>
                    <td>'.$a.' mm</td>
                    <td>'.$d.' mm</td>
                    <td>'.$f.' mm</td>
                </tr>
            </table>
            ';
            }
        }
        elseif(isset($_POST['vertical_capsule_btn_calculate'])){
            if(isset($_POST['vertical_capsule_side_length_value']) and isset($_POST['vertical_capsule_diameter_value']) and isset($_POST['vertical_capsule_filled_depth_value'])){
                $a = floatval($_POST['vertical_capsule_side_length_value']);
                $d = floatval($_POST['vertical_capsule_diameter_value']);
                $f = floatval($_POST['vertical_capsule_filled_depth_value']);
                $r = $d/2;
                $total_capacity = pi()*pow($r,2)*(((4/3)*$r)+$a);
                $filled_volume = 0;
            echo '
            <table>
                <tr>
                    <th class="title">Shape</th>
                    <td colspan="3">'.$_SESSION['tank_type'].'</td>
                </tr>
                <tr>
                    <th class="title">Side Length (a)</th>
                    <th class="title">Diameter (d)</th>
                    <th class="title">Filled Depth (f)</th>
                </tr>
                <tr>
                    <td>'.$a.' mm</td>
                    <td>'.$d.' mm</td>
                    <td>'.$f.' mm</td>
                </tr>
            </table>
            ';
            }
        }
    ?>
    <!-- </div> -->
<!--
<table>
    <tr>
        <th class="title">Shape</th>
        <td colspan="3">'.$_SESSION['tank_type'].'</td>
    </tr>
    <tr>
        <th class="title">Height</th>
        <th class="title">Width</th>
        <th class="title">Length</th>
        <th class="title">Filled Depth</th>
    </tr>
    <tr>
        <td>'.$h.' '.$_POST['height_options'].'</td>
        <td>'.$w.' '.$_POST['diameter_options'].'</td>
        <td>'.$l.' '.$_POST['length_options'].'</td>
        <td>'.$f.' '.$_POST['filled_depth_options'].'</td>
    </tr>
</table>
-->
<?php
    if(isset($_POST['vertical_cylinder_btn_calculate']) and $h<$f){
        echo '
        <table>
            <tr>
                <td>It Seems Your Tank is Over Filled...</td>
            </tr>
        <table>';
    }
    elseif(isset($_POST['rectangle_btn_calculate']) and $h<$f){
        echo '
        <table>
            <tr>
                <td>It Seems Your Tank is Over Filled...</td>
            </tr>
        <table>';
    }
    elseif(isset($_POST['horizontal_oval_btn_calculate']) and $hw<$hh){
        echo '
        <table>
            <tr>
                <td>Width must be greater than Height...</td>
            </tr>
        <table>';
    }
    elseif(isset($_POST['vertical_oval_btn_calculate']) and $vw>$vh){
        echo '
        <table>
            <tr>
                <td>Height must be greater than Width...</td>
            </tr>
        <table>';
    }
    else{
?>
<table>
    <tr>
        <th class="title">-</th>
        <th class="title">Total Capacity</th>
        <th class="title">Filled Volume</th>
    </tr>
    <tr>
        <td class="title">U.S. Gallons</td>
        <td>
            <?php echo convert_into_USgallons($total_capacity);?>
        </td>
        <td>
            <?php echo convert_into_USgallons($filled_volume);?>
        </td>
    </tr>
    <tr>
        <td class="title">Imp. Gallons</td>
        <td>
            <?php echo convert_into_IMPgallons($total_capacity);?>
        </td>
        <td>
            <?php echo convert_into_IMPgallons($filled_volume);?>
        </td>
    </tr>
    <tr>
        <td class="title">Liters</td>
        <td>
            <?php echo convert_into_Liters($total_capacity);?>
        </td>
        <td>
            <?php echo convert_into_Liters($filled_volume);?>
        </td>
    </tr>
    <tr>
        <td class="title">Cubic Meters</td>
        <td>
            <?php echo convert_into_CubicMeters($total_capacity);?>
        </td>
        <td>
            <?php echo convert_into_CubicMeters($filled_volume);?>
        </td>
    </tr>
    <tr>
        <td class="title">Cubic Feet</td>
        <td>
            <?php echo convert_into_CubicFeet($total_capacity);?>
        </td>
        <td>
            <?php echo convert_into_CubicFeet($filled_volume);?>
        </td>
    </tr>
</table>
<?php }?>
    <!-- <a onclick="history.back()" title="Go Back"><img src="back.jpg">&larr; Back</a> -->
    <a onclick="history.back()" title="Go Back"><img src="back.jpg">Back</a>
</body>
</html>