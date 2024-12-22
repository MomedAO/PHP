<table>
    <tr>
        <th>Fast name</th>
        <th>Last name</th>
        <th>Description</th>
        <th>Telephone</th>
        <th>Email</th>
        <th>Birthday</th>
    </tr>

    <?php foreach ($contact_list as $contact) : ?>
        <tr>
            <td><?php echo $contact['f_name'];?></td>
            <td><?php echo $contact['l_name'];?></td>
            <td><?php echo $contact['dption'];?></td>
            <td><?php echo $contact['cel'];?></td>
            <td><?php echo $contact['email'];?></td>
            <td><?php echo convert_date_show($contact['birthday']);?></td>
        </tr>
    <?php endforeach; ?>
</table>