<h2>Danh sách các giáo viên</h2>
<div class="users-list">
    <table class="table table-bordered table-striped">
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td>
                        <?php
                        echo $this->Html->link(
                                $user['User']['username'], array(
                            'controller' => 'blogs',
                            'action' => 'view',
                            'id' => $user['User']['id'],
                            'slug' => $user['User']['username']
                                )
                        )
                        ?>
                    </td>
                    <td>
                        <?php echo $user['User']['email'] ?>
                    </td>
                    <td>

                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>



</div>