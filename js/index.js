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
		stockIn() {
			var vm = this;
			vm.load = false;
			var url = base_url+'api/stockIn';
			const options = {
				method: 'POST',
				headers: { 'content-type': 'application/form-data' },
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
		stockOut() {
			var vm = this;
			vm.load = false;
			var url = base_url+'api/stockOut';
			const options = {
				method: 'POST',
				headers: { 'content-type': 'application/form-data' },
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
		resetAll() {
			var vm = this;
			var url = base_url+'api/resetAll';
			axios.get(url)
			.then(function(response) {
				vm.getData();
			})
			.catch(function(error) {
				alert(error);
			});
			vm.load = true;

		}
	  }
});