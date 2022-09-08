<div class="container-fluid" id="app">
	<div class="row" v-if='load'>
		<div class="col-lg-12" >
			<template v-for='list in all_list'>
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary">
							<input class="form-control form-control-user"  aria-describedby="emailHelp" placeholder="Title" v-model='list.title'>
						</h6>
					</div>
					<div class="card-body">
						<p></p>
						<!-- Circle Buttons (Default) -->
						<div class="mb-2">
							<code><textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  v-model='list.text'></textarea></code>
						</div>
						<div href="#" class="btn btn-success btn-circle">
							<i @click="update_data(list)" title="Save" class="fas fa-check"></i>
						</div>
						<div class="btn btn-danger btn-circle">
							<i @click="delete_data(list.id)" title="Delete" class="fas fa-trash"></i>
						</div>
					</div>
				</div>
			</template>
			<div class="card" v-if='load'>
			<div href="#" class="btn btn-primary btn-circle">
				<i @click="add_row()" title="Delete" class="fas fa-plus"></i>
			</div>
			</div>
		</div>
	</div>
	
</div>
