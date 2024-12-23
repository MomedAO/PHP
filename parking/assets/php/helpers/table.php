<Table>
    <tr>
        <th>Face Plate</th>
        <th>Brand</th>
        <th>Model</th>
        <th>Check-in</th>
        <th>Check-out</th>
    </tr>
    <?php foreach ($car_list as $car) : ?>
        <tr>
            <td><?php $car['face_plate'];?></td>
            <td><?php $car['brand'];?></td>
            <td><?php $car['model'];?></td>
            <td><?php dateTime_to_show($car['check_in']);?></td>
            <td><?php dateTime_to_show($car['check_out']);?></td>
        </tr>
    <?php endforeach;?>
</Table>