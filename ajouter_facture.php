<link rel="stylesheet" href="assets/css/bootstrap.min.css?v=<?php echo time();?>">
			
			<!-- Fontawesome CSS -->
			<link rel="stylesheet" href="assets/css/font-awesome.min.css?v=<?php echo time();?>">
			
			<!-- Lineawesome CSS -->
			<link rel="stylesheet" href="assets/css/line-awesome.min.css?v=<?php echo time();?>">
			
			<!-- Select2 CSS -->
			<link rel="stylesheet" href="assets/css/select2.min.css?v=<?php echo time();?>">
			
			<!-- Main CSS -->
			<link rel="stylesheet" href="assets/css/style.css?v=<?php echo time();?>">

<?php 
	require_once('db_conn.php');
	$query = "select * from facture";
	$result = mysqli_query($conn,$query);
?>
<?php
$pageName = "Facture";
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
  <?php require "dashboard.php";?>
  
<!-- Main Wrapper -->
<div class="home-content">
		<div class="page-wrapper">
		
			<!-- Page Content -->
			<div class="content container-fluid">
			
				<!-- Page Header -->
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<h3 class="page-title">Facture</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="home.php">Dashboard</a></li>
								<li class="breadcrumb-item"><a href="facture.php">Facture</a></li>
                                <li class="breadcrumb-item active">Ajouter une facture</li>
							</ul>
						</div>
					</div>
                </div>


					<div class="row">
						<div class="col-sm-12">
							<form  action = "ajouter_fact.php" method ="POST">
								<div class="row">
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>ID Client <span class="text-danger">*</span></label>
											<input class="form-control" name ="idclient" type="text">
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Client <span class="text-danger">*</span></label>
											<input class="form-control" name ="client" type="text">
										</div>
									</div>
									
									<div class="col-sm-6 col-md-3">
                         <div class="form-group">
											<label>Matricule fiscale <span class="text-danger">*</span> </label>
											<input class="form-control" name="matriculefiscale" type="text">
										</div>
									</div>
                                    <div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label> Date <span class="text-danger">*</span></label>
											
												<input class="form-control" type="date" name="date">

										</div>
									</div>
									

								</div>
								<div class="row">
									<div class="col-md-12 col-sm-12">
										<div class="table-responsive">
											<table class="table table-hover table-white" id="dynamic_field">
												<thead>
													<tr>
														<th style="width: 20px"></th>
														<th class="col-sm-2">RÉF</th>
														<th class="col-md-6">DÉSIGNATION</th>
														<th style="width:100px;">QTÉ</th>
														<th style="width:80px;">PU HT</th>
														<th>MONTANT HT</th>
														<th> </th>
													</tr>
												</thead>
												<tbody>
												<tr>
													<td>1</td>
													<td>
														<input class="form-control" name ="reference" type="text">
													</td>
													<td>
													<input class="form-control" name ="designation" type="text">
													</td>
													<td>
													<input class="form-control" name ="quantite" type="number">
													</td>
													<td>
													<input class="form-control" name ="puht" type="number">
													</td>
													<td>
													<input class="form-control" name ="montantht" type="number">
													</td>
													<td><a class="text-success font-18" name="Add" id="add"><i class="fa fa-plus"></i></a></td>
												</tr>

												</tbody>
											</table>
										</div>
										<div class="table-responsive">
											<table class="table table-hover table-white">
												<tbody>
													<tr>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td class="text-right">Total HT</td>
														<td style="text-align: right; padding-right: 30px;width: 230px">0</td>
													</tr>
													<tr>
														<td colspan="5" class="text-right">Taxe</td>
														<td style="text-align: right; padding-right: 30px;width: 230px">
															<input class="form-control" name ="taxe" type="number">
														</td>
													</tr>
													<tr>
														<td colspan="5" class="text-right">
															TVA %
														</td>
														<td style="text-align: right; padding-right: 30px;width: 230px">
															<input class="form-control text-right" name="tva"type="number">
														</td>

														<tr>
														<td colspan="5" class="text-right">
															Timber fiscale 
														</td>
														<td style="text-align: right; padding-right: 30px;width: 230px">
															<input class="form-control text-right" name="timberfiscale"type="number">
														</td>
													</tr>
													<tr>
														<td colspan="5" style="text-align: right; font-weight: bold">
															Total Taxe
														</td>
														<td style="text-align: right; padding-right: 30px; font-weight: bold; font-size: 16px;width: 230px">
														<input class="form-control text-right" name="totaletaxe"type="number">

														</td>
													</tr>
													<tr>
														<td colspan="5" style="text-align: right; font-weight: bold">
															Total TTC
														</td>
														<td style="text-align: right; padding-right: 30px; font-weight: bold; font-size: 16px;width: 230px">
														<input class="form-control" name ="montanttt" type="number">
														</td>
													</tr>
												</tbody>
											</table>                               
										</div>

									</div>
								</div>
								<div class="submit-section">
									<button class="btn btn-primary submit-btn" name ="submit">Enregistrer</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- /Page Content -->
				
			</div>
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->
	<!-- jQuery -->
	<script src="assets/js/jquery-3.5.1.min.js?v=<?php echo time();?>""></script>
	<script src="assets/js/popper.min.js?v=<?php echo time();?>""></script>
	<script src="assets/js/bootstrap.min.js?v=<?php echo time();?>"></script>
	<script src="assets/js/jquery.slimscroll.min.js?v=<?php echo time();?>"></script>
	<script src="assets/js/jquery.dataTables.min.js?v=<?php echo time();?>"></script>
	<script src="assets/js/dataTables.bootstrap4.min.js?v=<?php echo time();?>"></script>
	<script src="assets/js/select2.min.js?v=<?php echo time();?>"></script>
	<script src="assets/js/app.js?v=<?php echo time();?>"></script>	
	<script src="script.js?v=<?php echo time();?>"></script>
</section>


</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?> >