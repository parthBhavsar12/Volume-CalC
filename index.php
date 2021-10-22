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
            background-color: white;
            /* background-color: #f7f0d2; */
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
            /* background-color: #ced2ee; */
            color: #010a20;
            font-weight: bold;
        }
        th.title{
            /* background-color: #010a20; */
            background-color: #253252;
            color: white;
            font-weight: normal;
        }
        input,select{
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
            background-color: white;
            /* background-color: #a1a9d8; */
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
        /* img[src="logo.jpg"]{
            float: left;
        } */
        img[src="logo1.jpg"]{
            float: right;
        }
        header{
            text-align: center;
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
        input[value="SET"]{
            /* background-color: green;
            width: 10rem;
            padding: 0px; */
            /* background-color: white; */
            background-color: #ade0ad;
            width: 20rem;
            /* width: 300px; */
            /* height: 50px; */
            font-size: 30px;
            font-weight: bold;
            color: #042f04;
        }
        input[value="SET"]:hover{
            border: 2px solid green;
        }
        td[rowspan="2"]{
            background-color: white;
            /* background-color: #ade0ad; */
        }
        /* @media screen and (max-width: 400px) { */
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
        /* @media screen and (max-width: 1500px){
            img[src="logo1.jpg"]{
                clear: right;
                text-align: center;
                display: block;
            }
        } */
    </style>
</head>
<body>
    
        <!-- function set_horizon(){
            echo "<table><tr><td>Hello World</td></tr></table>";
        } -->
    <header>
        <img src="logo.jpg">
        <span>TANK VOLUME & FILL CALCULATOR</span>
        <img src="logo1.jpg">
    </header>
    <!-- <div class="container"> -->
        <!-- <form method="post"> -->
        <form method="post" action="tank_volume.php">
            <table>
                <tr>
                    <td class="title">Tank Type</td>
                    <td class="title" rowspan="2">
                        <input type="submit" name="set_tank_type" value="SET" title="Set Tank Type"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="tank_type" title="Select Tank Type">
                            <option value="Horizontal Cylinder">Horizontal Cylinder</option>
                            <option value="Vertical Cylinder">Vertical Cylinder</option>
                            <option value="Rectangle" selected>Rectangle</option>
                            <option value="Horizontal Oval">Horizontal Oval</option>
                            <option value="Vertical Oval">Vertical Oval</option>
                            <option value="Horizontal Capsule">Horizontal Capsule</option>
                            <option value="Vertical Capsule">Vertical Capsule</option>
                        </select>
                    </td>
                </tr>
            </table>
        </form>
            <!-- 
                if(isset($_POST['set_tank_type'])){
                    if($_POST['tank_type']=='Horizontal Cylinder'){
                        echo '
                            <tr>
                                <td class="title">Tank Type</td>
                                <td colspan="2">'.$_POST['tank_type'].'</td>
                            </tr>
                            <tr>
                                <td class="title">Length (l)</td>
                                <td><input type="number" name="length_value" placeholder="Value of Length" min="0" required title="Value of Length"/></td>
                                <td>
                                    <select name="length_options" title="Select Length Unit">
                                        <option value="in">in</option>
                                        <option value="ft">ft</option>
                                        <option value="mm" selected>mm</option>
                                        <option value="cm">cm</option>
                                        <option value="m">m</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="title">Diameter (d)</td>
                                <td><input type="number" name="diameter_value" placeholder="Value of Diameter" min="0" required title="Value of Diameter"/></td>
                                <td>
                                    <select name="diameter_options" title="Select Diameter Unit">
                                        <option value="in">in</option>
                                        <option value="ft">ft</option>
                                        <option value="mm" selected>mm</option>
                                        <option value="cm">cm</option>
                                        <option value="m">m</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="title">Filled Depth (f)</td>
                                <td><input type="number" name="filled_depth_value" placeholder="Filled Depth (Optional)" min="0" title="Value of Filled Depth"/></td>
                                <td>
                                    <select name="filled_depth_options" title="Select Filled Depth Unit">
                                        <option value="in">in</option>
                                        <option value="ft">ft</option>
                                        <option value="mm" selected>mm</option>
                                        <option value="cm">cm</option>
                                        <option value="m">m</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td class="no-border"><input type="reset" name="btn_clear" value="Clear" title="Reset"/></td>
                                <td class="no-border"><input type="submit" name="btn_calculate" value="Calculate" title="Calculate Volume"/></td>
                            </tr>
                        </table>
                    ';
                    }
                    elseif($_POST['tank_type']=='Vertical Cylinder'){

                    }
                    elseif($_POST['tank_type']=='Rectangle'){
                        echo '
                            <tr>
                                <td class="title">Tank Type</td>
                                <td colspan="2">'.$_POST['tank_type'].'</td>
                            </tr>
                            <tr>
                                <td class="title">Height (h)</td>
                                <td><input type="number" name="height_value" placeholder="Value of Height" min="0" required title="Value of Height"/></td>
                                <td>
                                    <select name="height_options" title="Select Height Unit">
                                        <option value="in">in</option>
                                        <option value="ft">ft</option>
                                        <option value="mm" selected>mm</option>
                                        <option value="cm">cm</option>
                                        <option value="m">m</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="title">Width (w)</td>
                                <td><input type="number" name="width_value" placeholder="Value of Width" min="0" required title="Value of Width"/></td>
                                <td>
                                    <select name="diameter_options" title="Select Width Unit">
                                        <option value="in">in</option>
                                        <option value="ft">ft</option>
                                        <option value="mm" selected>mm</option>
                                        <option value="cm">cm</option>
                                        <option value="m">m</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="title">Length (l)</td>
                                <td><input type="number" name="length_value" placeholder="Value of Length" min="0" required title="Value of Length"/></td>
                                <td>
                                    <select name="length_options" title="Select Length Unit">
                                        <option value="in">in</option>
                                        <option value="ft">ft</option>
                                        <option value="mm" selected>mm</option>
                                        <option value="cm">cm</option>
                                        <option value="m">m</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="title">Filled Depth (f)</td>
                                <td><input type="number" name="filled_depth_value" placeholder="Filled Depth (Optional)" min="0" title="Value of Filled Depth"/></td>
                                <td>
                                    <select name="filled_depth_options" title="Select Filled Depth Unit">
                                        <option value="in">in</option>
                                        <option value="ft">ft</option>
                                        <option value="mm" selected>mm</option>
                                        <option value="cm">cm</option>
                                        <option value="m">m</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td class="no-border"><input type="reset" name="btn_clear" value="Clear" title="Reset"/></td>
                                <td class="no-border"><input type="submit" name="btn_calculate" value="Calculate" title="Calculate Volume"/></td>
                            </tr>
                        </table>
                    ';
                    }
                    elseif($_POST['tank_type']=='Horizontal Oval'){

                    }
                    elseif($_POST['tank_type']=='Vertical Oval'){

                    }
                    elseif($_POST['tank_type']=='Horizontal Capsule'){

                    }
                    elseif($_POST['tank_type']=='Vertical Capsule'){

                    }
                    elseif($_POST['tank_type']=='Horizontal 2:1 Elliptical'){

                    }
                    elseif($_POST['tank_type']=='Horizontal Dish Ends'){

                    }
                    elseif($_POST['tank_type']=='Horizontal Ellipse'){

                    }
                }
            ?>
        </form> -->
    <!-- </div> -->
</body>
</html>