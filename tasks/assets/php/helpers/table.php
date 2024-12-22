<table>
    <tr>
        <th>Task</th>
        <th>Description</th>
        <th>Deadline</th>
        <th>Priority</th>
        <th>Finished</th>
    </tr>
    <?php foreach ($task_list as $task) : ?>
        <tr>
            <td><?php echo $task['name'];?></td>
            <td><?php echo $task['description'];?></td>
            <td><?php echo trans_date_to_show($task['deadline']);?></td>
            <td><?php echo trans_priority($task['priority']);?></td>
            <td><?php echo trans_finished($task['finished']);?></td>
        </tr>
    <?php endforeach;?>
</table>