<h5>Siguenos en: <?php echo $twitter; ?> </h5>

<table>
    <tbody>
        <?php 
            foreach ($model as $rs) {
                echo "
                    <tr> 
                        <td>$rs->username<td> 
                    </tr>
                ";
            } 
        ?> 
    </tbody>
</table>