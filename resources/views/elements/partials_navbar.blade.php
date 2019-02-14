	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li> <a href="{{route('ControlPanel')}}" class="{{ Request::path() == 'ControlPanel' ? 'active' : '' }}"><i><img src="{{asset('storage/img/icon/1.png')}}" class="iconpartials"></i> <span>หน้าหลัก</span></a></li>
						<li> <a href="{{route('ManageUsers')}}" class="{{ Request::path() == 'ManageUsers' ? 'active' : '' }}"><i><img src="{{asset('storage/img/icon/2.png')}}" class="iconpartials"></i> <span>จัดการผู้ใช้งาน</span></a></li>
						<li> <a href="{{route('ManageAnnounce')}}" class="{{ Request::path() == 'ManageAnnounce' ? 'active' : '' }}"><i><img src="{{asset('storage/img/icon/3.png')}}" class="iconpartials"></i> <span>จัดการข่าวสาร</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="{{ Request::path() == 'ManageTrip'||Request::path() == 'ManageGift' ? 'active' : '' }}"><i><img src="{{asset('storage/img/icon/4.png')}}" class="iconpartials"></i> <span>จัดการโปรโมชั่น</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse">
								<ul class="nav">
									<li> <a href="{{route('ManageTrip')}}" class="{{ Request::path() == 'ManageTrip' ? 'active' : '' }}">ทริป</a></li>
									<li > <a href="{{route('ManageGift')}} "class="{{ Request::path() == 'ManageGift' ? 'active' : '' }}">รางวัล</a></li>
								</ul>
							</div>
						</li>
						<li> <a href="{{route('ManageProduct')}}" class="{{ Request::path() == 'ManageProduct' ? 'active' : '' }}"><i><img src="{{asset('storage/img/icon/5.png')}}" class="iconpartials"></i> <span>จัดการสินค้า</span></a></li>
						<!--<li class="{{ Request::path() == 'dashboard' ? 'active' : '' }}"><a href="{{route('ManageStock')}}" ><i><img src="{{asset('storage/img/icon/6.png')}}" class="iconpartials"></i> <span>จัดการสต๊อก</span></a></li>-->
						<li>
							<a href="#subPages2" data-toggle="collapse"><i><img src="{{asset('storage/img/icon/6.png')}}" class="iconpartials"></i> <span>จัดการสต๊อก</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages2" class="collapse ">
								<ul class="nav">
									<li> <a href="{{route('ManageStockUser')}}"class="{{ Request::path() == 'ManageStockUser' ? 'active' : '' }}">สต๊อกผู้ใช้งาน</a></li>
									<li> <a href="{{route('ManageStock')}}" class="{{ Request::path() == 'ManageStock' ? 'active' : '' }}">สต๊อกบริษัท</a></li>
								</ul>
							</div>
						</li>
						<li> <a href="{{route('ManageCommotion')}}" class="{{ Request::path() == 'ManageCom' ? 'active' : '' }}"><i><img src="{{asset('storage/img/icon/7.png')}}" class="iconpartials"></i> <span>จัดการค่าคอมมิชชั่น</span></a></li>
					</ul>
				</nav>
            </div>
</div>