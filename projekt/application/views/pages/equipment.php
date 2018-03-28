<div class="row" id="character_info_container">
    <div class="col-2"></div>

    <div class="col-8">
        <ul class="list-group" id="character">
            <li class="list-group-item info_heading"><h3>CECHY</h3></li>

            <?php

            /*      number of rows and colums       */
            $num_rows = 4*2;
            $num_cols = 8;

            /*      rows' names      */
            $rows = array(
                "Cechy główne", "Początkowa", "Schemat rozwoju", "Aktualna",
                "Cechy drugorzędne", "Początkowa", "Schemat rozwoju", "Aktualna"
            );

            /*      cells' values    */
            $cols = array
            (
                0 => array("WW", "US", "K", "ODP", "ZR", "INT", "SW", "OGD"),
                1 => array_fill(0, 8, ""),
                2 => array_fill(0, 8, ""),
                3 => array_fill(0, 8, ""),

                4 => array("A", "ŻYW", "S", "WT", "SZ", "MAG", "PO", "PP"),
                5 => array_fill(0, 8, ""),
                6 => array_fill(0, 8, ""),
                7 => array_fill(0, 8, "")
            );

            for($i = 0; $i < $num_rows; $i++)
            {
                if($i == 4)
                    echo "<li class='list-group-item'></li>";
                ?>

                <li class="list-group-item">
                    <div class="row">
                        <div class="col-4"><?=$rows[$i].":";?></div>

                <?php

                for($j = 0; $j < $num_cols; $j++)
                {
                    if($i == 0)
                    /*      1st row(no border)      */
                        echo "<div class='col-1 text-center'>".$cols[$i][$j]."</div>";
                    else
                        echo "<div class='col-1 text-center' id='cell'>".$cols[$i][$j]."</div>";
                }

                ?>
                    </div>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
    <div class="col-2"></div>
</div>

<div class="row" id="character_info_container"> 
    <div class="col-2"></div>
    <div class="col-8">
        <ul class="list-group" id="character">
            <li class="list-group-item info_heading"><h3>BROŃ</h3></li>
            <?php

            /*      number of rows and colums       */
            $num_rows = 6;
            $num_cols = 7;

            /*      cells' values    */
            $cols = array
            (
                0 => array("Nazwa", "OBC.", "KAT.", "SIŁA", "ZASIĘG", "PRZEŁAD", "CECHY ORĘŻA"),
                1 => array_fill(0, 8, "&nbsp"),
                2 => array_fill(0, 8, "&nbsp"),
                3 => array_fill(0, 8, "&nbsp"),
                4 => array_fill(0, 8, "&nbsp"),
                5 => array_fill(0, 8, "&nbsp"),
            );

            for($i = 0; $i < $num_rows; $i++)
            {
                ?>
                <li class="list-group-item">
                    <div class="row">
                <?php
                for($j = 0; $j < $num_cols; $j++)
                {
                    /*       first row(header)       */
                    if($i == 0)
                    {
                        if($j == 0)
                            echo "<div class='col-4'>";
                        else if($j == 6)
                            echo "<div class='col-3 text-center'>";
                        else
                            echo "<div class='col-1 text-center'>";
                    }
                    else
                    {
                        if($j == 0)
                            echo "<div class='col-4' id='cell'>";
                        else if($j == 6)
                            echo "<div class='col-3' id='cell'>";
                        else
                            echo "<div class='col-1 text-center' id='cell'>";
                    }

                    echo $cols[$i][$j]."</div>";
                }
            }
            ?>
        </ul>
    </div>
    <div class="col-2"></div>
</div>

<div class="row" id="character_info_container"> 
    <div class="col-2"></div>
    <div class="col-8">
        <ul class="list-group" id="character">
            <li class="list-group-item info_heading"><h3>PANCERZ</h3></li>

            <li class="list-group-item">
                <div class="row">
                    <div class="col-12">Opancerzenie proste: </div>
                </div>
            </li>

            <li class="list-group-item">
                <div class="row">
                    <div class="col-6" id="cell">Typ pancerza: </div>
                    <div class="col-6" id="cell">Punkty zbroi: </div>
                </div>
            </li>

            <li class="list-group-item"><div class="row"></div></li>

            <li class="list-group-item">
                <div class="row">
                    <div class="col-12">Opancerzenie złożone: </div>
                </div>
            </li>

            <li class="list-group-item">
                <div class="row">
                    <div class="col-4">Typ pancerza: </div>
                    <div class="col-1 text-center">OBC.</div>
                    <div class="col-6">Lokacja ciała</div>
                    <div class="col-1 text-center">PZ</div>
                </div>
            </li> 

<?php
    for($i=0; $i<=4; $i++)
    {
?>
            <li class="list-group-item">
                <div class="row">
                    <div class="col-4" id="cell">&nbsp</div>
                    <div class="col-1" id="cell"></div>
                    <div class="col-6" id="cell"></div>
                    <div class="col-1" id="cell"></div>
                </div>
            </li>
<?php 
    };
?>
        </ul>
    </div>
    <div class="col-2"></div>
</div>