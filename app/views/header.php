<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/style.css"/>
    <title> Radio 1 Top 100</title>

    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="js/small_dynamic.js"></script>
    <script src="js/fontSize_Chaner.js"></script>
</head>
<body>
<script>

</script>
<div id="container">
    <header>

        <ul class="nav">
            <li><a href="/">nieuwsbrief</a></li>
            <li><a href="/about/">mobiel</a></li>
            <li><a href="/work/">contact</a></li>
            <li><a href="/clients/">meld een fout</a></li>
            <li><a href="/contact/">frequenties</a></li>
            <li><a href="/contact/">help</a></li>
            <li><a href="/contact/">rss</a></li>
        </ul>

        <img id="logo" src="img/logo.png" alt=""/>

        <div id="menuContainer">
            <h1>TOUR TOP 100</h1>

            <div id="menu">
                <div id="radioBtn"></div>
                <div id="top100Btn"></div>
                <div id="search">
                    <input type="text" placeholder="zoek binnen Radio 1" id="inputSearch"/>
                    <input type="submit" value="" id="submitSearch"/>
                </div>
            </div>
        </div>
        <div id="rightContent" style="margin-top: 20px">
            <div id="fontChanger">
                <span id="reallySmall">A</span>
                <span id="Medium">A</span>
                <span id="Big">A</span>
            </div>
            <img src="img/buttons/luister_live.png"/>
        </div>
    </header>
    <div id="date">
        <div id="month"></div>
        <?php
        $date_array = get_days();
        foreach($date_array as $value){
            echo $value;
        }
        ?>
        <div id="rightEnd" style="float: right"></div>
    </div>
    <div class="titlePageHeader">
        <p>Vandaag in de Radio 1 Tour Top 100</p>

        <div class="horizontal_dotted_line"></div>
    </div>