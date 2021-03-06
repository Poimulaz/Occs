<div class="row">
    <div class="col s12 m6 l6">
        <div class="card-panel" style="height:125px;">
            <div>
                <span>CPU Load average</span>
            </div>

            <div class="row valign-wrapper rowCustom">
                <div class="col m4 s4 l4 center-align">
                    <span class=badgeStatusUp>
                        <strong><?php echo $nb1[0] ?></strong>
                    </span>
                </div>
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
            </div>
        </div>
    </div>
    <div class="col s12 m6 l6">
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
                            2 users
                        </strong>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col m6 s12  l6">
        <div class="card-panel">
            <canvas id="bar-chart"></canvas>
        </div>
    </div>

    <div class="col m6 s12 xs12 l6">
        <div class="card-panel">
        
        <table>
        <thead>
          <tr>
              <th>Name</th>
          </tr>
        </thead>

        <tbody>
          <?php
            foreach($arrayUser as $user){
                echo "<tr>";
                echo "<td>$user</td>";
                echo "</tr>";
            }
        ?>
        </tbody>
      </table>

        </div>
    </div>
</div>