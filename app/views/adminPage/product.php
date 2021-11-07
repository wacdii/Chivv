
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Giá</th>
                <th>Mô tả</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($products as $product): ?>
                <tr>
                    <td><?=$product['product_id']?></td>
                    <td><?=$product['product_name']?></td>
                    <td><?=$product['product_price']?></td>
                    <td><?=$product['product_describe']?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
