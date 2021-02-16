<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Travel Asia</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<!-- <link rel="icon" href="img/icon.ico" type="image/x-icon"/> -->

	<!-- Fonts and icons -->
	<script src="{{ asset('js/plugin/webfont/webfont.min.js') }}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/atlantis.min.css') }}">
</head>
<body>
	<div class="wrapper">
    @section('header')
    <div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				<a href="/admin" class="logo">
					<img src="{{ asset('img/logo.png') }}" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				
				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Search ..." class="form-control">
							</div>
						</form>
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="{{ asset('img/profile.jpg') }}" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="{{ asset('img/profile.jpg') }}" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>Hizrian</h4>
												<p class="text-muted">hello@example.com</p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">Хэрэглэгчийн булан</a>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Гарах</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
        </div>
        @show
        @section('sidebar')
        <div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="{{ asset('img/profile.jpg') }}" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Hizrian
									<span class="user-level">Админ</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">Хэрэглэгчийн булан</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Бүртгэлийн мэдээлэл засах</span>
										</a>
									</li>
								
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
					
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fas fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Үйлдлүүд</h4>
						</li><li class="nav-item">
						<a data-toggle="collapse" href="#category">
								<i class="fas fa-pen-square"></i>
								<p>Ажилчид</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="category">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{route('worker.create')}}">
											<span class="sub-item">Нэмэх</span>
										</a>
									</li>
									<li>
										<a href="{{route('worker.index')}}">
											<span class="sub-item">Харах</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<li class="nav-item">
						<a data-toggle="collapse" href="#category">
								<i class="fas fa-pen-square"></i>
								<p>Категори</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="category">
								<ul class="nav nav-collapse">
									<li>
										<a href="/admin/category/create">
											<span class="sub-item">Нэмэх</span>
										</a>
									</li>
									<li>
										<a href="/admin/category/show">
											<span class="sub-item">Харах</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<li class="nav-item">
						<a data-toggle="collapse" href="#location">
								<i class="fas fa-pen-square"></i>
								<p>Байршил</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="location">
								<ul class="nav nav-collapse">
									<li>
										<a href="/admin/location/create">
											<span class="sub-item">Нэмэх</span>
										</a>
									</li>
									<li>
										<a href="/admin/location/show">
											<span class="sub-item">Харах</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
				
						<li class="nav-item">
						<a data-toggle="collapse" href="#travel">
								<i class="fas fa-pen-square"></i>
								<p>Аялал</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="travel">
								<ul class="nav nav-collapse">
									<li>
										<a href="/admin/travel/create">
											<span class="sub-item">Нэмэх</span>
										</a>
									</li>
									<li>
										<a href="/admin/travel/show">
											<span class="sub-item">Харах</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
						<a data-toggle="collapse" href="#order">
								<i class="fas fa-pen-square"></i>
								<p>Захиалга</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="order">
								<ul class="nav nav-collapse">
									<li>
										<a href="/admin/order/create">
											<span class="sub-item">Нэмэх</span>
										</a>
									</li>
									<li>
										<a href="/admin/order/show">
											<span class="sub-item">Харах</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#forms">
								<i class="fas fa-pen-square"></i>
								<p>Тайлан</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="forms">
								<ul class="nav nav-collapse">
									<li>
										<a href="report.html">
											<span class="sub-item">7 хоног</span>
										</a>
									</li>
									<li>
										<a href="forms/forms.html">
											<span class="sub-item">Сар</span>
										</a>
									</li>
									<li>
										<a href="forms/forms.html">
											<span class="sub-item">Улирал</span>
										</a>
									</li>
									<li>
										<a href="forms/forms.html">
											<span class="sub-item">Жил</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
					
					</ul>
				</div>
			</div>
        </div>
        @show
        <div class="main-panel">
			<div class="content">
				<div class="page-inner">
        @yield('content')
				
                </div>
            </div>
        </div>
        @section('footer')
        <footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link" href="https://www.themekita.com">
									ThemeKita
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									Help
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									Licenses
								</a>
							</li>
						</ul>
					</nav>
					<div class="copyright ml-auto">
						2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.themekita.com">ThemeKita</a>
					</div>				
				</div>
            </footer>
    </div>
        @show

    <script src="{{ asset('js/core/jquery.3.2.1.min.js') }}"></script>
	<script src="{{ asset('js/core/popper.min.js') }}"></script>
	<script src="{{ asset('js/core/bootstrap.min.js') }}"></script>

	<!-- jQuery UI -->
	<script src="{{ asset('js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

	<!-- jQuery Scrollbar -->
	<script src="{{ asset('js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>


	<!-- Chart JS -->
	<script src="{{ asset('js/plugin/chart.js/chart.min.js') }}"></script>

	<!-- jQuery Sparkline -->
	<script src="{{ asset('js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

	<!-- Chart Circle -->
	<script src="{{ asset('js/plugin/chart-circle/circles.min.js') }}"></script>

	<!-- Datatables -->
	<script src="{{ asset('js/plugin/datatables/datatables.min.js') }}"></script>

	<!-- Bootstrap Notify -->
	<script src="{{ asset('js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

	<!-- jQuery Vector Maps -->
	<script src="{{ asset('js/plugin/jqvmap/jquery.vmap.min.js') }}"></script>
	<script src="{{ asset('js/plugin/jqvmap/maps/jquery.vmap.world.js') }}"></script>

	<!-- Sweet Alert -->
	<script src="{{ asset('js/plugin/sweetalert/sweetalert.min.js') }}"></script>

	<!-- Atlantis JS -->
    <script src="{{ asset('js/atlantis.min.js') }}"></script>
    <script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>
    </body>
    </html>

        