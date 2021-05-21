<?php
require_once 'public/header.php';
?>
<div class="containerPromos text-center contenedorBody">
    <h2 style="padding-top: 1em;">Eventos y promociones especiales</h2>
<br>
<div class="content">
    <div class="calendar-container">
        <div class="calendar">
            <div class="year-header">
                <span class="left-button" id="prev"> &lang; </span>
                <span class="year" id="label"></span>
                <span class="right-button" id="next"> &rang; </span>
            </div>
            <table class="months-table">
                <tbody>
                <tr class="months-row">
                    <td class="month">Ene</td>
                    <td class="month">Feb</td>
                    <td class="month">Mar</td>
                    <td class="month">Abr</td>
                    <td class="month">May</td>
                    <td class="month">Jun</td>
                    <td class="month">Jul</td>
                    <td class="month">Ago</td>
                    <td class="month">Sep</td>
                    <td class="month">Oct</td>
                    <td class="month">Nov</td>
                    <td class="month">Dic</td>
                </tr>
                </tbody>
            </table>

            <table class="days-table">
                <td class="day">Dom</td>
                <td class="day">Lun</td>
                <td class="day">Mar</td>
                <td class="day">Mié</td>
                <td class="day">Jue</td>
                <td class="day">Vie</td>
                <td class="day">Sáb</td>
            </table>
            <div class="frame">
                <table class="dates-table">
                    <tbody class="tbody">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="events-container">
    </div>
</div>
</div>
<?php
require_once 'public/footer.php';
?>

