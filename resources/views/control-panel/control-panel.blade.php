@extends('layouts.app-element')
@section('content')
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">ภาพรวมรายสัปดาห์</h3>
							<p class="panel-subtitle">ระยะเวลา: 21 มกราคม 2562 - 27 มกราคม 2562</p>
						</div>
						<div class="panel-bodyc">
							<div class="row">
								<div class="col-md-3">
									<div class="metric">
										<img src="{{asset('storage/img/d-1.png')}}" class="iconpd">
										<p class="pd">
											<span class="number">2,000</span>
											<span class="title">ยอดขาย</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<img src="{{asset('storage/img/d-2.png')}}" class="iconpd">
										<p  class="pd">
											<span class="number">5,000</span>
											<span class="title">ผู้เข้าชม</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<img src="{{asset('storage/img/d-3.png')}}" class="iconpd">
										<p  class="pd">
											<span class="number">500</span>
											<span class="title">ผู้ใช้งาน</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<img src="{{asset('storage/img/d-4.png')}}" class="iconpd">
										<p  class="pd">
											<span class="number">50%</span>
											<span class="title">เป้าหมาย</span>
										</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-10">
									<div id="headline-chart" class="ct-chart"></div>
								</div>
								<div class="col-md-2">
									<div class="weekly-summary text-right">
										<span class="number">2,315</span> <span class="percentage"><i class="fa fa-caret-up text-success"></i> 15%</span>
										<span class="info-label">ยอดขายทั้งหมด</span>
									</div>
									<div class="weekly-summary text-right">
										<span class="number">5,758</span> <span class="percentage"><i class="fa fa-caret-up text-success"></i> 36%</span>
										<span class="info-label">รายได้ต่อเดือน</span>
									</div>
									<div class="weekly-summary text-right">
										<span class="number">65,938</span> <span class="percentage"><i class="fa fa-caret-down text-danger"></i> 5%</span>
										<span class="info-label">รายได้ทั้งหมด</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END OVERVIEW -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<script src="{{asset('vendor/chartist/js/chartist.min.js')}}"></script>
		<!--<script src="{{asset('js/manage/manage-controlpanel/form.js')}}"></script>-->
		<script>
			var data, options;

			data = {
				labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
				series: [
					[23, 29, 24, 40, 25, 24, 35],
					[14, 25, 18, 34, 29, 38, 44],
				]
			};

			options = {
				height: 300,
				showArea: true,
				showLine: false,
				showPoint: false,
				fullWidth: true,
				axisX: {
					showGrid: false
				},
				lineSmooth: false,
			};

			new Chartist.Line('#headline-chart', data, options);


		</script>
	
@endsection
