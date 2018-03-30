<div class="row" id="character_info_container">
    <div class="col-2"></div>

    <div class="col-8">
        <ul class="list-group" id="character">
            <li class="list-group-item info_heading"><h3>CECHY</h3></li>

            <?php

            /*      number of rows and colums       */
            $num_rows = (4*2)+1;
            $num_cols = 9;

            /*      cells' values    */
            $cols = array
            (
                0 => array("Cechy główne:", "WW", "US", "K", "ODP", "ZR", "INT", "SW", "OGD"),
                1 => array_merge( array("Początkowa:"), array_values($cechy_glowne) ),
                2 => array_merge( array("Schemat rozwoju:"), array_fill(0, 9, "&nbsp") ),
                3 => array_merge( array("Aktualna:"), array_fill(0, 9, "&nbsp") ),

                4 => array_fill(0, 9, "&nbsp"),

                5 => array("Cechy drugorzędne:", "A", "ŻYW", "S", "WT", "SZ", "MAG", "PO", "PP"),
                6 => array_merge( array("Początkowa:"), array_values($cechy_glowne) ),
                7 => array_merge( array("Schemat rozwoju:"), array_fill(0, 9, "&nbsp") ),
                8 => array_merge( array("Aktualna:"), array_fill(0, 9, "&nbsp") )
            );

            /*      grid for rows       */
            $row_grid = array(4, 1, 1, 1, 1, 1, 1, 1, 1);

            /*      grid for whole table       */
            $table_grid = array
            (
                0 => $row_grid,
                1 => $row_grid,
                2 => $row_grid,
                3 => $row_grid,
                4 => $row_grid,
                5 => $row_grid,
                6 => $row_grid,
                7 => $row_grid,
                8 => $row_grid
            );

            for($i = 0; $i < $num_rows; $i++)
            {
                ?>

                <li class="list-group-item">
                    <div class="row">

                <?php

                for($j = 0; $j < $num_cols; $j++)
                {
                    if($i == 0 || $i == 4 || $i == 5)
                    /*      1st and 4th row(no border)      */
                        echo "<div class='col-".$table_grid[$i][$j]."'>";
                    else {
                        if ($i < 5) {
                            echo "<div class='click col-".$table_grid[$i][$j]."' id='cell' key='".$cols[0][$j]."'>";
                        } else {
                            echo "<div class='click col-".$table_grid[$i][$j]."' id='cell' key='".$cols[5][$j]."'>";
                        }
                    }

                    echo $cols[$i][$j]."</div>";
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
                1 => array_values($bron),
                2 => array_fill(0, 8, "&nbsp"),
                3 => array_fill(0, 8, "&nbsp"),
                4 => array_fill(0, 8, "&nbsp"),
                5 => array_fill(0, 8, "&nbsp"),
            );

            /*      grid for rows       */
            $row_grid = array(4, 1, 1, 1, 1, 1, 3);

            /*      grid for whole table       */
            $table_grid = array
            (
                0 => $row_grid,
                1 => $row_grid,
                2 => $row_grid,
                3 => $row_grid,
                4 => $row_grid,
                5 => $row_grid
            );

            for($i = 0; $i < $num_rows; $i++)
            {
                ?>
                <li class="list-group-item">
                    <div class="row">
                <?php
                for($j = 0; $j < $num_cols; $j++)
                {
                    if($i == 0)
                    /*       first row(no border)       */
                        echo "<div class='col-".$table_grid[$i][$j]."'>";
                    else
                        echo "<div class='click col-".$table_grid[$i][$j]."' id='cell'>";

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

            <?php

            $num_rows = 6;
            $num_cols = 4;

            /*      cells' values    */
            $cols = array
            (
                0 => array("Typ pancerza", "OBC.", "Lokacja ciała", "PZ"),
                1 => array_values($pancerz),
                2 => array_fill(0, 4, "&nbsp"),
                3 => array_fill(0, 4, "&nbsp"),
                4 => array_fill(0, 4, "&nbsp"),
                5 => array_fill(0, 4, "&nbsp"),
            );

            /*      grid for rows       */
            $row_grid = array(4, 1, 6, 1);

            /*      grid for whole table       */
            $table_grid = array
            (
                0 => $row_grid,
                1 => $row_grid,
                2 => $row_grid,
                3 => $row_grid,
                4 => $row_grid,
                5 => $row_grid
            );

            for($i = 0; $i < $num_rows; $i++)
            {
                ?>
                <li class="list-group-item">
                    <div class="row">
                <?php
                for($j = 0; $j < $num_cols; $j++)
                {
                    if($i == 0)
                    /*       first row(no border)       */
                        echo "<div class='col-".$table_grid[$i][$j]."'>";
                    else
                        echo "<div class='click col-".$table_grid[$i][$j]."' id='cell'>";

                    echo $cols[$i][$j]."</div>";
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

<script>
    $('[class^="click"]').click(function () {
        console.log($(this).text(),$(this).attr('key'));
        var key = $(this).attr('key');
        var val = $(this).text();
        var pair = [key, Number(val)];
        $.ajax({
            type: 'POST',
            url: 'update',
            data: {'pair': pair},
            success:function (data) {
                console.log(typeof data)
            }
        });
    })
</script>