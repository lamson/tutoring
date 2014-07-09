<?php
include "templates/header.php"
?>

    <fieldset class="row">
        <legend>Academic Year 2014</legend>

        <div class="row">
            <div class="large-4 columns">
                <input id="sem_fall" type="checkbox"><label for="sem_fall">Fall</label>
                <input id="sem_spring" type="checkbox"><label for="sem_spring">Spring</label>
                <input id="sem_summer" type="checkbox"><label for="sem_summer">Summer</label>
            </div>

            <a href="#" id="btn_show_summary1" class="button small radius">Show Summary</a>
        </div>
    </fieldset>

    <div class="row">
        <table>
            <thead>
            <tr>
                <th width="100">Course</th>
                <th width="100">Semester</th>
                <th width="100">Number of Students</th>
                <th width="100">Number of Tutors</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>CS 4400</td>
                <td>Fall</td>
                <td>3</td>
                <td>5</td>
            </tr>
            <tr>
                <td></td>
                <td>Spring</td>
                <td>2</td>
                <td>6</td>
            </tr>
            </tbody>
        </table>
    </div>


<?php
include "templates/footer.php"
?>