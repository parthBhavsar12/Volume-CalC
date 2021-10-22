<?php
    session_start(); 
    if(!isset($_POST['tank_type'])){
        header("Location: index.php");
        session_destory();
    }
    else{
        $_SESSION['tank_type']=$_POST['tank_type'];
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
            user-select: none;
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
            /* margin: 50px 140px;
            margin-left: 180; */
            padding: 10px;
            border: 1px solid;
            border-radius: 20px;
            /* animation-name: gradient-h-one;
            animation-duration: 9s;
            animation-iteration-count: infinite; */
        }
        /* table{
            margin: 20px auto;
            margin-top: 20px;
            margin-bottom: 20px;
            width: 60%;
            box-shadow: none;
            border: none;
        } */
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
            /* background-color: white; */
            background-color: #ede0a7;
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
            background-color: #dea3a3;
            width: 300px;
            height: 50px;
            font-size: 30px;
            font-weight: bold;
            color: #4d0909;
        }
        input[type="submit"]{
            background-color: #ade0ad;
            width: 300px;
            height: 50px;
            font-size: 30px;
            font-weight: bold;
            color: #042f04;
        }
        /* input[name="set_tank_type"]{
            background-color: #6fc46f;
            width: 100px;
            height: 20px;
            font-size: 10px;
            font-weight: bold;
            color: #042f04;
        } */
        input[type="reset"]:hover{
            border: 2px solid red;
        }
        input[type="submit"]:hover{
            border: 2px solid green;
        }
        td.title{
            /* background-color: white; */
            background-color: #c8cce5;
            /* background-color: #a1a9d8; */
            color: #010a20;
            font-weight: bold;
        }
        th.title{
            /* background-color: #010a20; */
            background-color: #253252;
            color: white;
            font-weight: normal;
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
        hr{
            height: 10px;
            background-color: black;
        }
        input[name="set_tank_type"]{
            font-size: 25px;
            text-align: center;
            font-family: 'Bree Serif', 'serif';
            border-radius: 10px;
            border: none;
            background-color: #a1a9d8;
            color: black;
            width: unset;
            height: unset;
        }
        input[name="set_tank_type"]:hover{
            border: 1px solid;
        }
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
        }
        header span{
            display: inline-block;
            vertical-align: middle;
            text-decoration: underline;
            font-style: italic;
            text-decoration-color: #df0024;
            line-height: 100px;
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
        a{
            /* background-color: #6fc46f; */
            /* background-color: #ade0ad; */
            background-color: #253252;
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
</head>
<body> 
        <!-- function set_horizon(){
            echo "<table><tr><td>Hello World</td></tr></table>";
        } -->
    <!-- <h1>Tank Volume & Fill Calculator</h1> -->
    <header>
        <img src="logo.jpg">
        <span>TANK VOLUME & FILL CALCULATOR</span>
        <img src="logo1.jpg">
    </header>
    <!-- <div class="container"> -->
        <!-- <form method="post"> -->
        <form method="post" action="calculate.php">
            <table>
                <!-- <tr>
                    <td class="title">Tank Type</td>
                    <td>
                        <select name="tank_type" title="Select Tank Type">
                            <option value="Horizontal Cylinder"  onclick="set_horizon()">Horizontal Cylinder</option>
                            <option value="Vertical Cylinder">Vertical Cylinder</option>
                            <option value="Rectangle" selected>Rectangle</option>
                            <option value="Horizontal Oval">Horizontal Oval</option>
                            <option value="Vertical Oval">Vertical Oval</option>
                            <option value="Horizontal Capsule">Horizontal Capsule</option>
                            <option value="Vertical Capsule">Vertical Capsule</option>
                            <option value="Horizontal 2:1 Elliptical">Horizontal 2:1 Elliptical</option>
                            <option value="Horizontal Dish Ends">Horizontal Dish Ends</option>
                            <option value="Horizontal Ellipse">Horizontal Ellipse</option>
                        </select>
                    </td>
                    <td class="title">
                        <input type="submit" name="set_tank_type" value="SET" title="Set Tank Type"/>
                    </td>
                </tr>
        </form> -->
            <?php
                if(isset($_POST['set_tank_type'])){
                    // if(isset($_POST['tank_type'])){
                    //     $_SESSION['tank_type']=$_POST['tank_type'];
                    // }
                    if($_POST['tank_type']=='Horizontal Cylinder'){
                        echo '
                            <tr>
                                <td class="title">Tank Type</td>
                                <td colspan="2">'.$_POST['tank_type'].'</td>
                            </tr>
                            <tr>
                                <td class="title">Length (l)</td>
                                <td><input type="number" name="horizontal_cylinder_length_value" placeholder="Value of Length" min="0" required title="Value of Length"/></td>
                                <td rowspan="3">
                                    NOTE : Enter All Values in \'mm\' Unit
                                </td>
                            </tr>
                            <tr>
                                <td class="title">Diameter (d)</td>
                                <td><input type="number" name="horizontal_cylinder_diameter_value" placeholder="Value of Diameter" min="0" required title="Value of Diameter"/></td>
                            </tr>
                            <tr>
                                <td class="title">Filled Depth (f)</td>
                                <td><input type="number" name="horizontal_cylinder_filled_depth_value" placeholder="Filled Depth (Optional)" min="0" title="Value of Filled Depth" value="0" readonly/></td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td class="no-border"><input type="reset" name="btn_clear" value="Clear" title="Reset"/></td>
                                <td class="no-border"><input type="submit" name="horizontal_cylinder_btn_calculate" value="Calculate" title="Calculate Volume"/></td>
                            </tr>
                        </table>
                    ';
                    }
                    elseif($_POST['tank_type']=='Vertical Cylinder'){
                        echo '
                            <tr>
                                <td class="title">Tank Type</td>
                                <td colspan="2">'.$_POST['tank_type'].'</td>
                            </tr>
                            <tr>
                                <td class="title">Height (h)</td>
                                <td><input type="number" name="vertical_cylinder_height_value" placeholder="Value of Height" min="0" required title="Value of Height"/></td>
                                <td rowspan="4">
                                    NOTE : Enter All Values in \'mm\' Unit
                                </td>
                            </tr>
                            <tr>
                                <td class="title">Diameter (d)</td>
                                <td><input type="number" name="vertical_cylinder_diameter_value" placeholder="Value of Diameter" min="0" required title="Value of Diameter"/></td>
                            </tr>
                            <tr>
                                <td class="title">Filled Depth (f)</td>
                                <td><input type="number" name="vertical_cylinder_filled_depth_value" placeholder="Filled Depth (Optional)" min="0" title="Value of Filled Depth"/></td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td class="no-border"><input type="reset" name="btn_clear" value="Clear" title="Reset"/></td>
                                <td class="no-border"><input type="submit" name="vertical_cylinder_btn_calculate" value="Calculate" title="Calculate Volume"/></td>
                            </tr>
                        </table>
                    ';
                    }
                    elseif($_POST['tank_type']=='Rectangle'){
                        echo '
                            <tr>
                                <td class="title">Tank Type</td>
                                <td colspan="2">'.$_POST['tank_type'].'</td>
                            </tr>
                            <tr>
                                <td class="title">Height (h)</td>
                                <td><input type="number" name="rectangle_height_value" placeholder="Value of Height" min="0" required title="Value of Height"/></td>
                                <td rowspan="4">
                                    NOTE : Enter All Values in \'mm\' Unit
                                </td>
                            </tr>
                            <tr>
                                <td class="title">Width (w)</td>
                                <td><input type="number" name="rectangle_width_value" placeholder="Value of Width" min="0" required title="Value of Width"/></td>
                            </tr>
                            <tr>
                                <td class="title">Length (l)</td>
                                <td><input type="number" name="rectangle_length_value" placeholder="Value of Length" min="0" required title="Value of Length"/></td>
                            </tr>
                            <tr>
                                <td class="title">Filled Depth (f)</td>
                                <td><input type="number" name="rectangle_filled_depth_value" placeholder="Filled Depth (Optional)" min="0" title="Value of Filled Depth"/></td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td class="no-border"><input type="reset" name="btn_clear" value="Clear" title="Reset"/></td>
                                <td class="no-border"><input type="submit" name="rectangle_btn_calculate" value="Calculate" title="Calculate Volume"/></td>
                            </tr>
                        </table>
                    ';
                    }
                    elseif($_POST['tank_type']=='Horizontal Oval'){
                        echo '
                            <tr>
                                <td class="title">Tank Type</td>
                                <td colspan="2">'.$_POST['tank_type'].'</td>
                            </tr>
                            <tr>
                                <td class="title">Height (h)</td>
                                <td><input type="number" name="horizontal_oval_height_value" placeholder="Value of Height" min="0" required title="Value of Height"/></td>
                                <td rowspan="4">
                                    NOTE : Enter All Values in \'mm\' Unit
                                </td>
                            </tr>
                            <tr>
                                <td class="title">Width (w)</td>
                                <td><input type="number" name="horizontal_oval_width_value" placeholder="Value of Width" min="0" required title="Value of Width"/></td>
                            </tr>
                            <tr>
                                <td class="title">Length (l)</td>
                                <td><input type="number" name="horizontal_oval_length_value" placeholder="Value of Length" min="0" required title="Value of Length"/></td>
                            </tr>
                            <tr>
                                <td class="title">Filled Depth (f)</td>
                                <td><input type="number" name="horizontal_oval_filled_depth_value" placeholder="Filled Depth (Optional)" min="0" title="Value of Filled Depth" value="0" readonly/></td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td class="no-border"><input type="reset" name="btn_clear" value="Clear" title="Reset"/></td>
                                <td class="no-border"><input type="submit" name="horizontal_oval_btn_calculate" value="Calculate" title="Calculate Volume"/></td>
                            </tr>
                        </table>
                    ';
                    }
                    elseif($_POST['tank_type']=='Vertical Oval'){
                        echo '
                            <tr>
                                <td class="title">Tank Type</td>
                                <td colspan="2">'.$_POST['tank_type'].'</td>
                            </tr>
                            <tr>
                                <td class="title">Height (h)</td>
                                <td><input type="number" name="vertical_oval_height_value" placeholder="Value of Height" min="0" required title="Value of Height"/></td>
                                <td rowspan="4">
                                    NOTE : Enter All Values in \'mm\' Unit
                                </td>
                            </tr>
                            <tr>
                                <td class="title">Width (w)</td>
                                <td><input type="number" name="vertical_oval_width_value" placeholder="Value of Width" min="0" required title="Value of Width"/></td>
                            </tr>
                            <tr>
                                <td class="title">Length (l)</td>
                                <td><input type="number" name="vertical_oval_length_value" placeholder="Value of Length" min="0" required title="Value of Length"/></td>
                            </tr>
                            <tr>
                                <td class="title">Filled Depth (f)</td>
                                <td><input type="number" name="vertical_oval_filled_depth_value" placeholder="Filled Depth (Optional)" min="0" title="Value of Filled Depth" value="0" readonly/></td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td class="no-border"><input type="reset" name="btn_clear" value="Clear" title="Reset"/></td>
                                <td class="no-border"><input type="submit" name="vertical_oval_btn_calculate" value="Calculate" title="Calculate Volume"/></td>
                            </tr>
                        </table>
                    ';
                    }
                    elseif($_POST['tank_type']=='Horizontal Capsule'){
                        echo '
                            <tr>
                                <td class="title">Tank Type</td>
                                <td colspan="2">'.$_POST['tank_type'].'</td>
                            </tr>
                            <tr>
                                <td class="title">Side Length (a)</td>
                                <td><input type="number" name="horizontal_capsule_side_length_value" placeholder="Value of Side Length" min="0" required title="Value of Side Length"/></td>
                                <td rowspan="3">
                                    NOTE : Enter All Values in \'mm\' Unit
                                </td>
                            </tr>
                            <tr>
                                <td class="title">Diameter (d)</td>
                                <td><input type="number" name="horizontal_capsule_diameter_value" placeholder="Value of Diameter" min="0" required title="Value of Diameter"/></td>
                            </tr>
                            <tr>
                                <td class="title">Filled Depth (f)</td>
                                <td><input type="number" name="horizontal_capsule_filled_depth_value" placeholder="Filled Depth (Optional)" min="0" title="Value of Filled Depth" value="0" readonly/></td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td class="no-border"><input type="reset" name="btn_clear" value="Clear" title="Reset"/></td>
                                <td class="no-border"><input type="submit" name="horizontal_capsule_btn_calculate" value="Calculate" title="Calculate Volume"/></td>
                            </tr>
                        </table>
                    ';
                    }
                    elseif($_POST['tank_type']=='Vertical Capsule'){
                        echo '
                            <tr>
                                <td class="title">Tank Type</td>
                                <td colspan="2">'.$_POST['tank_type'].'</td>
                            </tr>
                            <tr>
                                <td class="title">Side Length (a)</td>
                                <td><input type="number" name="vertical_capsule_side_length_value" placeholder="Value of Side Length" min="0" required title="Value of Side Length"/></td>
                                <td rowspan="3">
                                    NOTE : Enter All Values in \'mm\' Unit
                                </td>
                            </tr>
                            <tr>
                                <td class="title">Diameter (d)</td>
                                <td><input type="number" name="vertical_capsule_diameter_value" placeholder="Value of Diameter" min="0" required title="Value of Diameter"/></td>
                            </tr>
                            <tr>
                                <td class="title">Filled Depth (f)</td>
                                <td><input type="number" name="vertical_capsule_filled_depth_value" placeholder="Filled Depth (Optional)" min="0" title="Value of Filled Depth" value="0" readonly/></td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td class="no-border"><input type="reset" name="btn_clear" value="Clear" title="Reset"/></td>
                                <td class="no-border"><input type="submit" name="vertical_capsule_btn_calculate" value="Calculate" title="Calculate Volume"/></td>
                            </tr>
                        </table>
                    ';
                    }
                }
            ?>
        </form>
    <!-- </div> -->
    <!-- <a onclick="history.back()" title="Go Back">&larr; Back</a> -->
    <a onclick="history.back()" title="Go Back"><img src="back.jpg">Back</a>
</body>
</html>