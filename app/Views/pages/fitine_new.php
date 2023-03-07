<?= $this->extend('templates/hometemplate') ?>
<?= $this->section('content') ?>
    <h1 class="PageHeader">New FitTine</h1>
        <form class = "FitTinesStart">
        <!--Create the name, and public or private, add timestamp and user-->
            <label for="fiTineName">Routine Name</label>
            <input type="text" id = "fiTineName" name = "fiTineName"><br>
            <input type="radio" id="private" name="viewStatus" value="true">
            <label for="private">Private</label><br>
            <input type="radio" id="public" name="viewStatus" value="false">
            <label for="public">Public</label><br>
            <input type="submit" value="Create">
        </form>
        <!--On the submit button, display the Lift table and an emptyform Button on lift table to add to table in a form-->
        <form class="FitTineAddLifts">
            <!--Add lifts-->
                
                

        </form> 
<?= $this->endSection() ?>