<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>UI Dashboard Monitoring</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?php echo base_url('assets/img/bcs_faicon_sm.png') ?>" type="image/x-icon"/>
	
	<!-- Fonts and icons -->
	<script src="<?php echo base_url('assets/js/plugin/webfont/webfont.min.js') ?>"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ["<?php echo base_url('assets/css/fonts.min.css') ?>"]},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/atlantis.min.css') ?>">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/demo.css') ?>">
</head>
<body data-background-color="dark">
	<div class="wrapper overlay-sidebar">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="dark2">
				
				<a href="#" class="logo">
					<img src="<?php echo base_url('assets/img/logo.svg') ?>" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle sidenav-overlay-toggler">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>

			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="dark">
				
			</nav>
			<!-- End Navbar -->
		</div>
		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2" data-background-color="dark2">
			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<ul class="nav nav-primary">
						<li class="nav-item">
							<div data-toggle="collapse" class="collapsed" aria-expanded="false">
							<p>Filter</p>
							</div>
							<div class="form-group">
								<div class="input-group">
									<input type="text" placeholder="Search WBS..." class="form-control" icon="search-icon">
									<div class="input-group-append">
										<span class="input-group-text">
											<i class="fa fa-search"></i>
										</span>
									</div>
								</div>
								<label>Period From</label>
								<div class="input-group">
									<input type="date" class="form-control" id="datetime" name="datetime">
									<div class="input-group-append">
										<span class="input-group-text">
											<i class="fa fa-calendar"></i>
										</span>
									</div>
								</div>
								<label>Period To</label>
								<div class="input-group">
									<input type="date" class="form-control" id="datetime" name="datetime" >
									<div class="input-group-append">
										<span class="input-group-text">
											<i class="fa fa-calendar"></i>
										</span>
									</div>
								</div>

								<label class="form-label">Period</label>
								<div class="form-group form-group-default">
									<label>Year</label>
									<select class="form-control" id="formGroupDefaultSelect" value="2019">
										<option>2018</option>
										<option>2019</option>
										<option>2020</option>
									</select>
								</div>
								<div class="selectgroup selectgroup-pills">
									<label class="selectgroup-item">
										<input type="checkbox" name="value" value="HTML" class="selectgroup-input" checked="">
										<span class="selectgroup-button">Jan</span>
									</label>
									<label class="selectgroup-item">
										<input type="checkbox" name="value" value="CSS" class="selectgroup-input">
										<span class="selectgroup-button">Feb</span>
									</label>
									<label class="selectgroup-item">
										<input type="checkbox" name="value" value="PHP" class="selectgroup-input">
										<span class="selectgroup-button">Mart</span>
									</label>
									<label class="selectgroup-item">
										<input type="checkbox" name="value" value="JavaScript" class="selectgroup-input">
										<span class="selectgroup-button">Apr</span>
									</label>
									<label class="selectgroup-item">
										<input type="checkbox" name="value" value="Ruby" class="selectgroup-input">
										<span class="selectgroup-button">Mei</span>
									</label>
									<label class="selectgroup-item">
										<input type="checkbox" name="value" value="Ruby" class="selectgroup-input">
										<span class="selectgroup-button">Jun</span>
									</label>
									<label class="selectgroup-item">
										<input type="checkbox" name="value" value="C++" class="selectgroup-input">
										<span class="selectgroup-button">Jul</span>
									</label>
									<label class="selectgroup-item">
										<input type="checkbox" name="value" value="C++" class="selectgroup-input">
										<span class="selectgroup-button">Agst</span>
									</label>
									<label class="selectgroup-item">
										<input type="checkbox" name="value" value="C++" class="selectgroup-input">
										<span class="selectgroup-button">Sept</span>
									</label>
									<label class="selectgroup-item">
										<input type="checkbox" name="value" value="C++" class="selectgroup-input">
										<span class="selectgroup-button">Okt</span>
									</label>
									<label class="selectgroup-item">
										<input type="checkbox" name="value" value="C++" class="selectgroup-input">
										<span class="selectgroup-button">Nov</span>
									</label>
									<label class="selectgroup-item">
										<input type="checkbox" name="value" value="C++" class="selectgroup-input">
										<span class="selectgroup-button">Des</span>
									</label>
								</div>
								<div class="form-group form-group-default">
									<label>Company</label>
									<select class="form-control" id="formGroupDefaultSelect">
										<option>2000 Semen Gresik</option>
										<option>3000 Semen Padang</option>
										<option>4000 Semen Gresik</option>
										<option>5000 Semen Tuban</option>
										<option>7000 Semen Gresik</option>
									</select>
								</div>
								<div class="form-group form-group-default">
									<label>Type Investment</label>
									<select class="form-control" id="formGroupDefaultSelect1">
										<option>New Investment</option>
										<option>Capex Tambahan</option>
										<option>Carry over Cash</option>
									</select>
								</div>
								<div class="form-group form-group-default">
									<label>Komite Investasi</label>
									<select class="form-control" id="formGroupDefaultSelect1">
										<option>Initial Decision</option>
										<option>Dibatalkan</option>
										<option>Final Decision</option>
									</select>
								</div>
								<div class="form-group form-group-default">
									<label>Type Capex</label>
									<select class="form-control" id="formGroupDefaultSelect1">
										<option>PKO - Penunjang Kelangsungan Operasional </option>
										<option>M - Mandatory</option>
										<option>KO - Kelangsungan Operasional</option>
										<option>PO - Pelangsungan Operasioanl</option>
										<option>S - Strategic</option>
									</select>
								</div>
								<button type="submit" class="btn btn-primary btn-round">Find</button>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Capex <br>  Planning vs Real</div>
								</div>
								<div class="card-body">
									<div class="chart-container">
										<canvas id="barChart"></canvas>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Detail Info <br>Total</div>
								</div>
								<div class="card-body">
									<div class="chart-container">
										<canvas id="barChart1"></canvas>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Actual Month to date vs Planning all Year</div>
								</div>
								<div class="card-body">
									<div class="chart-container">
										<canvas id="doughnutChart"></canvas>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Up to Month real & Up to Month Plan</div>
								</div>
								<div class="card-body">
									<div class="chart-container">
										<canvas id="barChart2"></canvas>
									</div>
								</div>
							</div>
						</div>
						

					</div>
				</div>
			</div>
			<footer class="footer">
				<div class="container-fluid">
					<div class="copyright ml-auto">
						2019, BCS Team
					</div>				
				</div>
			</footer>
		</div>
		
		<!-- Custom template | don't include it in your project! -->
		<div class="custom-template">
			<div class="title">Settings</div>
			<div class="custom-content">
				<div class="switcher">
					
					<div class="switch-block">
						<h4>Mode</h4>
						<div class="btnSwitch">
							<button type="button" class="changeBackgroundColor " data-color="bg2"></button>
							<button type="button" class="changeBackgroundColor selected" data-color="dark"></button>
						</div>
					</div>
				</div>
			</div>
			<div class="custom-toggle">
				<i class="flaticon-settings"></i>
			</div>
		</div>
		<!-- End Custom template -->
	</div>
	<!--   Core JS Files   -->
	<script src="<?php echo base_url('assets/js/core/jquery.3.2.1.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/core/popper.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/core/bootstrap.min.js')?>"></script>
	<!-- jQuery UI -->
	<script src="<?php echo base_url('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') ?>"></script>
	<!-- Chart JS -->
	<!-- <script src="<?php echo base_url('assets/js/plugin/chart.js/chart.min.js') ?>"></script> -->
	<script src="<?php echo base_url('assets/js/plugin/chart.js/chart.min.js') ?>"></script>
	
	<!-- jQuery Scrollbar -->
	<script src="<?php echo base_url('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') ?>"></script>
	<!-- Atlantis JS -->
	<script src="<?php echo base_url('assets/js/atlantis.min.js') ?>"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="<?php echo base_url('assets/js/setting-demo2.js') ?>"></script>
	<script>
		var amyBarChart = new Chart(barChart, {
			type: 'bar',
			data: {
				labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
				datasets : [{
					label: "",
					type : 'line',
					borderColor: "rgba(85, 239, 196,1.0)",
					pointBorderColor: "#FFF",
					pointBackgroundColor: "rgba(85, 239, 196,1.0)",
					pointBorderWidth: 2,
					pointHoverRadius: 4,
					pointHoverBorderWidth: 1,
					pointRadius: 4,
					backgroundColor: 'transparent',
					fill: true,
					borderWidth: 2,
					data: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 7, 4],
				},{
					label: "Real",
					backgroundColor: "rgba(85, 239, 196,0.5)",
					borderColor: 'rgb(85, 239, 196)',
					data: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 7, 4],
				},{
					type : 'line',
					label: "",
					borderColor: "rgba(255, 118, 117,1.0)",
					pointBorderColor: "#FFF",
					pointBackgroundColor: "rgba(255, 118, 117,1.0)",
					pointBorderWidth: 2,
					pointHoverRadius: 4,
					pointHoverBorderWidth: 1,
					pointRadius: 4,
					backgroundColor: 'transparent',
					fill: true,
					borderWidth: 2,
					yAxes: -25,
                    
					data: [3, 2, 9, 5, 4, 6, 4, 6, 7, 8, 7, 4],
				},{
					label: "Planning",
					backgroundColor: 'rgba(255, 118, 117,0.5)',
					borderColor: 'rgba(255, 118, 117,1.0)',
					data: [3, 2, 9, 5, 4, 6, 4, 6, 7, 8, 7, 4],
				}],
			},
			options: {
				responsive: true, 
				scaleGridLineColor: "rgba(0,0,0,.05)",
				maintainAspectRatio: false,
				legend: {
					position : 'bottom'
				},
				tooltips: {
					mode: 'index',
					intersect: true
				},
				responsive: true,
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				},
			}
		});

		var myBarChart1 = new Chart(barChart1, {
			type: 'bar',
			data: {
				labels: ["PR", "PO", "GR", "INVOICE"],
				datasets : [{
					label: "",
					backgroundColor: 'rgba(34, 167, 240,0.6)',
					borderColor: 'rgb(34, 167, 240)',
					data: [3, 2, 9, 5],
				}],
			},
			options: {
				responsive: true, 
				maintainAspectRatio: false,
				legend: {
					display	: false
					// position : 'bottom'
				},
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				},
			}
		});

		var myBarChart2 = new Chart(barChart2, {
			type: 'bar',
			data: {
				labels: ["Real", "Planning"],
				datasets : [{
					label: "",
					backgroundColor: 'rgba(34, 167, 240,0.6)',
					borderColor: 'rgb(34, 167, 240)',
					data: [3, 2],
				}],
			},
			options: {
				responsive: true, 
				maintainAspectRatio: false,
				legend: {
					display	: false
					// position : 'bottom'
				},
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				},
			}
		});

		var myDoughnutChart = new Chart(doughnutChart, {
			type: 'doughnut',
			data: {
				datasets: [{
					data: [10, 20, 30],
					backgroundColor: ['rgba(214, 48, 49,0.5)','rgba(254, 202, 87,0.5)','rgba(46, 134, 222,0.5)']
				}],

				labels: [
				'Red',
				'Yellow',
				'Blue'
				]
			},
			options: {
				rotation: 1 * Math.PI,
   				circumference: 1 * Math.PI,
				responsive: true, 
				maintainAspectRatio: false,
				legend : {
					position: 'bottom'
				},
				layout: {
					padding: {
						left: 20,
						right: 20,
						top: 5,
						bottom: 20
					}
				},
				pieceLabel: {
					render: 'percentage',
					fontColor: 'white',
					fontSize: 14,
				},
			}
		});

		
		$('#datetime').datetimepicker({
				format: 'MM/DD/YYYY H:mm',
		});

		Chart.Chart.pluginService.register({
		    beforeDraw: function(chart) {
		        if (chart.config.centerText.display !== null &&
		            typeof chart.config.centerText.display !== 'undefined' &&
		            chart.config.centerText.display) {
		            drawTotals(chart);
		        }
		    },
		});
		 
		function drawTotals(chart) {
		 
		    var width = chart.chart.width,
		    height = chart.chart.height,
		    ctx = chart.chart.ctx;
		 
		    ctx.restore();
		    var fontSize = (height / 114).toFixed(2);
		    ctx.font = fontSize + "em sans-serif";
		    ctx.textBaseline = "middle";
		 
		    var text = chart.config.centerText.text,
		    textX = Math.round((width - ctx.measureText(text).width) / 2),
		    textY = height / 2;
		 
		    ctx.fillText(text, textX, textY);
		    ctx.save();
		}
		 
		window.onload = function() {
		    var ctx = document.getElementById("chart-area").getContext("2d");
		    window.myDoughnut = new Chart(ctx, config);
		};
	</script>


</body>
</html>