<div class="row">
    <div class="columns large-centered large-8 text-center">
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Notes</th>
                    <th>Bunting</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($holidays as $holiday):?>
                <tr>
                    <td><?= $holiday->get('title');?></td>
                    <td><?= $holiday->get('date');?></td>
                    <td><?= $holiday->get('notes');?></td>
                    <td><?php
                        if ($holiday->get('bunting')) {
                            echo "&#10004;";
                        } else {
                            echo "&#10008;";
                        }
                    ?></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>
