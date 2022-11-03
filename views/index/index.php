
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Stock</h1>
</div>
<div class="container-fluid" id="app">
	<div class="row" v-if='load'>
		<template v-for='list in all_list'>
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-primary shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-primary text-uppercase mb-1" > ITEM {{list.id}}</div>
								<div class="h5 mb-0 font-weight-bold text-gray-800">UNIT {{list.count}}</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</template>
	</div>
	<div href="#" class="btn btn-primary btn-circle">
		<i @click="resetAll()" title="RESET" class="fas fa-backward "></i>
	</div>
	<div href="#" class="btn btn-success btn-circle">
		<i @click="stockIn()" title="Stock In" class="fas fa-plus"></i>
	</div>
	<div href="#" class="btn btn-warning btn-circle">
		<i @click="stockOut()" title="Stock Out" class="fas fa-minus"></i>
	</div>
</div>


