<form action="">
    <fieldset>
        <legend>New task</legend>
        <label for="">
            Task:
            <input type="text" name="name" id="">
            Description:
            <textarea name="description" id=""></textarea>
            Deadline:
            <input type="date" name="deadline" id="">
        </label>
        <fieldset>
            <legend>Priority</legend>
            <label for="" class="dispblock">
                <input type="radio" name="priority" value="1" checked>
                <input type="radio" name="priority" value="2">
                <input type="radio" name="priority" value="3">
            </label>
        </fieldset>
        <label for="" class="dispblock">
            Finished:
            <input type="checkbox" name="finished" value="1">
        </label>
        <input type="submit" value="Save task">
    </fieldset>    
</form>