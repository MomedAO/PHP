<table>
    <tr>
        <th>nome</th>
        <th>categoria</th>
        <th>preco</th>
    </tr>
    <?php foreach ($product_list as $product): ?>
        <tr>
            <td><?php echo $product['product_name'];?></td>
            <td><?php echo $product['product_category'];?></td>
            <td><?php echo $product['product_price'];?></td>
        </tr>
    <?php endforeach;?>
</table>