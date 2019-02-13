@extends('layouts.app-element')
@section('content')
<!-- MAIN -->
<div class="main" ng-controller="ManageStockController" ng-cloak>
			<!-- MAIN CONTENT -->
			<div class="main-content">
                <div class="container-fluid">
                <div class="row">
                        <div class="col-md-6">
                        <h3 class="page-title2">จัดการสต๊อก</h3>
                        </div>
                        <div class="col-md-6">
                        <div class="input-group">
                        <input class="form-control" type="text">
                                <span class="input-group-btn">
                                    <button ng-click="SearchStock()" class="edit-button" > <i><img src="{{asset('storage/img/i-1.png')}}"></i></button>
                                </span>
                        </div>
                        </div>
                    </div>
                    <div class="panel">
								<div class="panel-body">
									<table class="table">
										<thead>
											<tr>
												<th style="width: 10%; text-align: center;">ลำดับ</th>
												<th style="width: 15%; text-align: center; ">ชื่อผู้ใช้</th>
												<th style="width: 15%; text-align: center;">ชื่อสินค้า</th>
                                                <th style="width: 10%; text-align: center;">ราคาสินค้า</th>
                                                <th style="width: 10%; text-align: center;">จำนวน</th>
                                                <th style="width: 10%; text-align: center;">คะแนน</th>
                                                <th style="width: 20%; text-align: center;">วัน/เวลาที่ฝาก</th>
                                                <th style="width: 5%; text-align: center;">แก้ไข</th>
                                                <th style="width: 5%; text-align: center;">ลบ</th>
											</tr>
										</thead>
										<tbody dir-paginate="itemsPerPage:10">
                                            <tr>
                                                <td><center>1</center></td>
                                                <td><center>ธนภพ บุญยิ่ง</center></td>
                                                <td><center>Kito Fiber Berry</center></td>
                                                <td><center>3,000</center></td>
                                                <td><center>10</center></td>
                                                <td><center>3,780</center></td>
                                                <td><center>2018-02-01 10:43:59</center></td>
                                                <td> 
                                                    <center><button ng-click="EditStock()" class="edit-button">
                                                        <i><img src="{{asset('storage/img/i-3.png')}}"></i>
                                                    </button></center></td>
                                                <td>
                                                    <center><button ng-click="DeleteStock()" class="delete-button">
                                                        <i><img src="{{asset('storage/img/i-2.png')}}"></i>
                                                    </button></center></td></td>
                                            </tr>
										</tbody>
                                    </table>
                                </div>
                            </div>
                                <nav aria-label="...">
                                    <ul class="pagination pagination-sm" style="float:right;">
                                        <dir-pagination-controls max-size="5" direction-links="true" boundary-links="true" >
                                        </dir-pagination-controls>
                                    </ul>
                                </nav>
                </div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
        <!-- END MAIN -->
        @include('manage-stock.Modal.manage-stock-Add')
        @include('manage-stock.Modal.manage-stock-Edit')
        @include('modal-center.confirm-Delete')
        <script src="{{asset('js/manage/manga-stock/form.js')}}"></script>
@endsection
