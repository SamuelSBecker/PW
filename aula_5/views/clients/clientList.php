<table class="table">
    <tr>
        <th>
            Cliente:
        </th>
        <th>
            E-mail:
        </th>
        <th>
            Fone:
        </th>
        <th>
            Endereço:
        </th>
    </tr>
    <?php foreach ($result as $data):?>
        <tr>
            <td><?= $data["name"] ?></td>
            <td><?= $data["email"] ?></td>
            <td><?= $data["phone"] ?></td>
            <td><?= $data["address"] ?></td>
        </tr>
    <?php endforeach;?>
    </table>