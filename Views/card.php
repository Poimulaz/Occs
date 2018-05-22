<div class="row row1">

    <div class="col  test s12 m4">
        <div class="card-panel cardCustom">
            <div class="center">
                <h6 class="card-title">
                    <strong class="strongTitle">STATUS</strong>
                </h6>
            </div>
            <hr />
            <div class="valign-wrapper">
                <div class="valign-wrapper row rowStatus">
                    <div class="col s6">
                        <div class="center">
                            <?php

                            if($ip == false){
                                echo '<i  class="medium material-icons iconStatusDown">pause_circle_outline</i>';
                            } else {
                                echo '<i class="medium material-icons iconStatusUp">play_circle_outline</i>';
                            }
                        ?>

                        </div>
                    </div>
                    <div class="col s6">
                        <div class="center">
                            <?php
                            if($ip == false){
                                echo '<span *ngIf="status == true" class=badgeStatusDown>
                                    <strong>DOWN</strong>
                                </span>';
                            } else {
                                echo '<span *ngIf="status == false" class=badgeStatusUp>
                                    <strong>UP</strong>
                                </span>';
                            }
                        ?>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="col s12 m4">
        <div class="card-panel cardCustom">
            <div class="center">
                <h6 class="card-title">
                    <strong class="strongTitle">STORAGE</strong>
                </h6>
            </div>
            <hr />

            <canvas id="bar-chart"></canvas>
        </div>
    </div>


    <div class="col s12 m4">
        <div class="card-panel cardCustom">
            <div class="center">
                <h6 class="card-title">
                    <strong class="strongTitle">ALERTES</strong>
                </h6>
            </div>
            <hr />

            <div class="row valign-wrapper">
                <div class="col s4 center">
                    <i class="medium material-icons iconError">
                        error_outline
                    </i>
                </div>
                <div class="col s4 center danger">DANGER</div>
                <div class="col s4 center danger">1</div>
            </div>

            <div class="row valign-wrapper">
                <div class="col s4 center">
                    <i class="medium material-icons iconWarning">
                        warning
                    </i>
                </div>
                <div class="col s4 center warning">WARNING</div>
                <div class="col s4 center warning">2</div>
            </div>

        </div>
    </div>


</div>


<div class="row">
    <div class="col m8 s12">
        <div class="card-panel ">
            <table class="centered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Item Name</th>
                        <th>Item Price</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Alvin</td>
                        <td>Eclair</td>
                        <td>$0.87</td>
                    </tr>
                    <tr>
                        <td>Alan</td>
                        <td>Jellybean</td>
                        <td>$3.76</td>
                    </tr>
                    <tr>
                        <td>Jonathan</td>
                        <td>Lollipop</td>
                        <td>$7.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="col m4 s12">
        <div class="card-panel ">
            <div class="center">
                <h6 class="card-title">
                    <strong class="strongTitle">TECHNIQUE</strong>
                </h6>
            </div>
            <hr />

        </div>

    </div>
</div>


<div class="row">
    <div class="col m12 s12">
        <div class="card-panel ">
            <table class="centered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Item Name</th>
                        <th>Item Price</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Alvin</td>
                        <td>Eclair</td>
                        <td>$0.87</td>
                    </tr>
                    <tr>
                        <td>Alan</td>
                        <td>Jellybean</td>
                        <td>$3.76</td>
                    </tr>
                    <tr>
                        <td>Jonathan</td>
                        <td>Lollipop</td>
                        <td>$7.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>