

    <div class="container">
        <h2><?=$title?></h2>

        <div class="container">
            <table class="table table-bordered">

                <tr>
                    <th>Номер приказа</th>
                    <th>Дата приказа</th>
                    <th>Приказ</th>
                </tr>
                     <?php foreach ($db->query($sql) as $row) :?>
                 <tr>

                     <td> <?php echo $row['ordersnum']?></td>
                     <td> <?php echo $row['ordersdate']?></td>
                     <td><a href="<?php echo $row['orderpath'];?>" target="_blank">ссылка</a></td>
                     <?php endforeach;?>
                 </tr>

            </table>
        </div>
    </div>