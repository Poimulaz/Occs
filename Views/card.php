<div class="row">
    <div class="col s12 m3 l3">
        <div class="card-panel" style="height:  120px;">
            <div>
                <span>CPU Load average</span>
            </div>

            <div class="row valign-wrapper rowCustom">
                <div class="col m4 s4 l4 center-align">
                    <span class=badgeStatusUp>
                        <strong><?php echo $nb1[1] ?></strong>
                    </span>
                </div>
                <div class="col m4 s4 l4 center-align">
                    <span class=badgeStatusUp>
                        <strong><?php echo $nb1[2] ?></strong>
                    </span>
                </div>
                <div class="col m4 s4 l4 center-align">
                    <span class=badgeStatusUp>
                        <strong><?php echo $nb1[3] ?></strong>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m3 l3">
        <div class="card-panel">
            <div>
                <span>Alertes</span>
            </div>

            <div class="row valign-wrapper rowCustom">
                <div class="col m6 s6 l6 center-align">
                    <i class="small material-icons iconError">
                        error_outline
                    </i>
                </div>
                <div class="col m6 s6 l6 center-align">
                    <span class="badgeAlertes ">
                        <strong>3</strong>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m3 l3">
        <div class="card-panel">
            <div>
                <span>Warnings</span>
            </div>

            <div class="row valign-wrapper rowCustom">
                <div class="col m6 s6 l6 center-align">
                    <i class="small material-icons iconWarning">
                        warning
                    </i>
                </div>
                <div class="col m6 s6 l6 center-align">
                    <span class="badgeWarnings">
                        <strong>0</strong>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m3 l3">
        <div class="card-panel">
            <div>
                <span>User</span>
            </div>

            <div class="row valign-wrapper rowCustom">
                <div class="col m6 s6 l6 center-align">
                    <i class="small material-icons iconUser">group</i>
                </div>
                <div class="col m6 s6 l6 center-align">
                    <span class="badgeUsers">
                        <strong>
                            <?php echo $nbUsers[1]  ?>
                        </strong>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col m5 s12 xs12 l5">
        <div class="card-panel">
            <canvas id="bar-chart"></canvas>
        </div>
    </div>

    <div class="col m5 s12 xs12 l5">
        <div class="card-panel">

        </div>
    </div>
</div>