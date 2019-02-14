	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a  href="{{route('ControlPanel')}}" class=""><i><img src="{{asset('storage/img/icon/1.png')}}" class="iconpartials"></i> <span>หน้าหลัก</span></a></li>
						<li><a href="{{route('ManageUsers')}}" class=""><i><img src="{{asset('storage/img/icon/2.png')}}" class="iconpartials"></i> <span>จัดการผู้ใช้งาน</span></a></li>
						<li><a href="{{route('ManageAnnounce')}}" class=""><i><img src="{{asset('storage/img/icon/3.png')}}" class="iconpartials"></i> <span>จัดการข่าวสาร</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i><img src="{{asset('storage/img/icon/4.png')}}" class="iconpartials"></i> <span>จัดการโปรโมชั่น</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="{{route('ManageTrip')}}" class="">ทริป</a></li>
									<li><a href="{{route('ManageGift')}}" class="">รางวัล</a></li>
								</ul>
							</div>
						</li>
						<li><a href="{{route('ManageProduct')}}" class=""><i><img src="{{asset('storage/img/icon/5.png')}}" class="iconpartials"></i> <span>จัดการสินค้า</span></a></li>
						<!--<li><a href="{{route('ManageStock')}}" class=""><i><img src="{{asset('storage/img/icon/6.png')}}" class="iconpartials"></i> <span>จัดการสต๊อก</span></a></li>-->
						<li>
							<a href="#subPages2" data-toggle="collapse" class="collapsed"><i><img src="{{asset('storage/img/icon/6.png')}}" class="iconpartials"></i> <span>จัดการสต๊อก</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages2" class="collapse ">
								<ul class="nav">
									<li><a href="{{route('ManageStockUser')}}" class="">สต๊อกผู้ใช้งาน</a></li>
									<li><a href="{{route('ManageStock')}}" class="">สต๊อกบริษัท</a></li>
								</ul>
							</div>
						</li>
						<li><a href="{{route('ManageCommotion')}}" class=""><i><img src="{{asset('storage/img/icon/7.png')}}" class="iconpartials"></i> <span>จัดการค่าคอมมิชชั่น</span></a></li>
					</ul>
				</nav>
            </div>
</div>