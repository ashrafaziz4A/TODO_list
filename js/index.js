new Vue({
	el: "#app",
	data: {
		all_list: '',
		load : false
	},
	mounted: function() {
		this.getData();
	},
	methods: {
		getData() {
			var vm = this;
			var url = base_url+'api';
			axios.get(url)
			.then(function(response) {
				vm.all_list = response.data.data_set;
				console.log(response.data);
			})
			.catch(function(error) {
				alert(error);
			});
			vm.load = true;
		},
		update_data(list) {
			var vm = this;
			vm.load = false;
			var url = base_url+'api/update';
			const options = {
				method: 'POST',
				headers: { 'content-type': 'application/form-data' },
				data: {'list' : list},
				url: url,
			};
			axios(options)
			.then(function(response) {
				console.log(response.data);
				vm.getData();
			})
			.catch(function(error) {
				alert(error);
			});
		},
		delete_data(id) {
			var vm = this;
			vm.load = false;
			if (id != ''){
				var url = base_url+'api/delete';
				console.log(url);
				const options = {
					method: 'POST',
					headers: { 'content-type': 'application/form-data' },
					data: {'id' : id},
					url: url,
				};
				axios(options)
				.then(function(response) {
					console.log(response.data);
					vm.getData();
				})
				.catch(function(error) {
					alert(error);
				});
			}else{
				vm.getData();
			}
		},
		add_row() {
			var vm = this;
			var arr = {'id' : '' ,'text' : '','title' : ''};
			vm.all_list.push(arr);
			console.log(vm.all_list);

		}
	  }
});