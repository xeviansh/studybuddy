<?php 
$getExamtime = $this->db->query('select * from manage_testdetails where cstatus=1')->result_array();
$examDetails = array();
foreach($getExamtime as $value){
        $data = array(
                "title" => $value['test_name'],
                "start" => $value['start_date'],
                "end" => $value['end_date']
            );
    $examDetails[] =  $data;           
}
$event_details =  json_encode($examDetails); 

?>
<div class="row">
    <div class="col-sm-12 col-xs-12">
        <div class="flex mb-2 mb-sm-0">
            <h1 class="h2">Dashboard</h1>
        </div>
    </div>
    <div class="col-sm-3 col-xs-6">
        <div class="tile-stats tile-red">
            <div class="icon">
                <i class="entypo-users"></i>
            </div>
            <div class="num" data-start="0" data-end="83" data-postfix="" data-duration="1500" data-delay="0">
                <?php echo $student['totalStudent']; ?></div>
            <h3>Registered Student</h3>
            <p>&nbsp;</p>
        </div>
    </div>
    <div class="col-sm-3 col-xs-6">
        <div class="tile-stats tile-green">
            <div class="icon">
                <i class="entypo-chart-bar"></i>
            </div>
            <div class="num" data-start="0" data-end="135" data-postfix="" data-duration="1500" data-delay="600">
                <?php echo $course['totalCourse']; ?>
            </div>
            <h3>Total Course</h3>
            <p>&nbsp;</p>
        </div>
    </div>
    <div class="col-sm-3 col-xs-6">
        <div class="tile-stats tile-aqua">
            <div class="icon">
                <i class="entypo-mail"></i>
            </div>
            <div class="num" data-start="0" data-end="23" data-postfix="" data-duration="1500" data-delay="1200">
                <?php echo $instructor['totalinstructor']; ?>
            </div>
            <h3>Total Instructor</h3>
            <p>&nbsp;</p>
        </div>
    </div>
    <div class="col-sm-3 col-xs-6">
        <div class="tile-stats tile-blue">
            <div class="icon">
                <i class="entypo-rss"></i>
            </div>
            <div class="num" data-start="0" data-end="52" data-postfix="" data-duration="1500" data-delay="1800">
                <?php echo $testDetails['totaltest']; ?>
            </div>
            <h3>Total Test</h3>
            <p>&nbsp;</p>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-content mt-2" style="padding: 20px;">
                <div id="basic-calendar"></div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div id="chartjs-line-chart" class="card">
            <div class="card-content mt-2" style="padding: 20px;">
                <h4 class="card-title">Line Chart</h4>                
                <div class="row">
                    <div class="col s12">                       
                        <div class="sample-chart-wrapper">
                            <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                    <div class=""></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                    <div class=""></div>
                                </div>
                            </div><canvas id="line-chart" height="400" width="1543"
                                style="display: block; width: 1543px; height: 400px;"
                                class="chartjs-render-monitor"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
    $total=array();
	for ($month = 1; $month <= 12; $month ++){

        $npte =  $this->db->query('select count(*) as totalCount from manage_my_course where course_id=3 and month(created_at)="'.$month.'"')->result_array();  
        $total[]= $npte[0]['totalCount'];

        $pce_clinical =  $this->db->query('select count(*) as totalpcCount from manage_my_course where course_id=2 and month(created_at)="'.$month.'"')->result_array();  
        $total2[]= $pce_clinical[0]['totalpcCount'];

        $PCE =  $this->db->query('select count(*) as totalpceCount from manage_my_course where course_id=1 and month(created_at)="'.$month.'"')->result_array();  
        $total3[]= $PCE[0]['totalpceCount'];
     }
   
	$tjan = $total[0];
	$tfeb = $total[1];
	$tmar = $total[2];
	$tapr = $total[3];
	$tmay = $total[4];
	$tjun = $total[5];
	$tjul = $total[6];
	$taug = $total[7];
	$tsep = $total[8];
	$toct = $total[9];
	$tnov = $total[10];
	$tdec = $total[11];

	$tjan2 = $total2[0];
	$tfeb2 = $total2[1];
	$tmar2 = $total2[2];
	$tapr2 = $total2[3];
	$tmay2 = $total2[4];
	$tjun2 = $total2[5];
	$tjul2 = $total2[6];
	$taug2 = $total2[7];
	$tsep2 = $total2[8];
	$toct2 = $total2[9];
	$tnov2 = $total2[10];
	$tdec2 = $total2[11];

	$tjan3  = $total3[0];
	$tfeb3  = $total3[1];
	$tmar3  = $total3[2];
	$tapr3  = $total3[3];
	$tmay3  = $total3[4];
	$tjun3 = $total3[5];
	$tjul3  = $total3[6];
	$taug3  = $total3[7];
	$tsep3  = $total3[8];
	$toct3  = $total3[9];
	$tnov3  = $total3[10];
	$tdec3  = $total3[11];
?>
<script>
$(document).ready(function() {
    var o = document.getElementById("basic-calendar");
    let currentDate = new Date();
    let cDay = currentDate.getDate();
    let cMonth = currentDate.getMonth() + 1;
    let cYear = currentDate.getFullYear();
    let cdate = cYear + "-" + cMonth + "-" + cDay;

    new FullCalendar.Calendar(o, {
        defaultDate: cdate,
        editable: !0,
        plugins: ["dayGrid"],
        eventLimit: !0,
        events: <?php echo $event_details; ?>

    }).render()


    var a = $("#line-chart"),
        e = {
            type: "line",
            options: {
                responsive: !0,
                maintainAspectRatio: !1,
                legend: { position: "bottom" },
                hover: { mode: "label" },
                scales: {
                    xAxes: [{
                        display: !0,
                        gridLines: { color: "#f3f3f3", drawTicks: !1 },
                        scaleLabel: { display: !0, labelString: "Month" }
                    }],
                    yAxes: [{
                        display: !0,
                        gridLines: { color: "#f3f3f3", drawTicks: !1 },
                        scaleLabel: { display: !0, labelString: "Value" }
                    }]
                },
                title: { display: !0, text: "Line Chart - Legend" }
            },
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                datasets: [{
                        label: "NPTE",
                        data: [  "<?php echo $tjan; ?>",
                                  "<?php echo $tfeb; ?>",
                                  "<?php echo $tmar; ?>",
                                  "<?php echo $tapr; ?>",
                                  "<?php echo $tmay; ?>",
                                  "<?php echo $tjun; ?>",
                                  "<?php echo $tjul; ?>",
                                  "<?php echo $taug; ?>",
                                  "<?php echo $tsep; ?>",
                                  "<?php echo $toct; ?>",
                                  "<?php echo $tnov; ?>",
                                  "<?php echo $tdec; ?>" 
                                ],
                        fill: !1,
                        borderColor: "#e91e63",
                        pointBorderColor: "#e91e63",
                        pointBackgroundColor: "#FFF",
                        pointBorderWidth: 2,
                        pointHoverBorderWidth: 2,
                        pointRadius: 4
                    },
                    {
                        label: "PCE Clinical",
                        data: [  "<?php echo $tjan2; ?>",
                                  "<?php echo $tfeb2; ?>",
                                  "<?php echo $tmar2; ?>",
                                  "<?php echo $tapr2; ?>",
                                  "<?php echo $tmay2; ?>",
                                  "<?php echo $tjun2; ?>",
                                  "<?php echo $tjul2; ?>",
                                  "<?php echo $taug2; ?>",
                                  "<?php echo $tsep2; ?>",
                                  "<?php echo $toct2; ?>",
                                  "<?php echo $tnov2; ?>",
                                  "<?php echo $tdec2; ?>" 
                                ],
                        fill: !1,
                        borderColor: "#03a9f4",
                        pointBorderColor: "#03a9f4",
                        pointBackgroundColor: "#FFF",
                        pointBorderWidth: 2,
                        pointHoverBorderWidth: 2,
                        pointRadius: 4
                    },
                    {
                        label: "PCE",
                        data: [  "<?php  echo $tjan3; ?>",
                                  "<?php echo $tfeb3; ?>",
                                  "<?php echo $tmar3; ?>",
                                  "<?php echo $tapr3; ?>",
                                  "<?php echo $tmay3; ?>",
                                  "<?php echo $tjun3; ?>",
                                  "<?php echo $tjul3; ?>",
                                  "<?php echo $taug3; ?>",
                                  "<?php echo $tsep3; ?>",
                                  "<?php echo $toct3; ?>",
                                  "<?php echo $tnov3; ?>",
                                  "<?php echo $tdec3; ?>" 
                                ],
                        fill: !1,
                        borderColor: "#ffc107",
                        pointBorderColor: "#ffc107",
                        pointBackgroundColor: "#FFF",
                        pointBorderWidth: 2,
                        pointHoverBorderWidth: 2,
                        pointRadius: 4
                    }
                ]
            }
        };
    new Chart(a, e)
});
</script>