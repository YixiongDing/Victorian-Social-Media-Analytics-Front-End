jQuery(document).ready(
		function($) {

			// console.log(window.maxicharts_reports);

			window.maxicharts_reports = window.maxicharts_reports || {};
			window.maxicharts_reports_init = window.maxicharts_reports_init || {};
			var size = Object.keys(window.maxicharts_reports).length;
			var initSize = Object.keys(window.maxicharts_reports_init).length;
			// console.log("number of charts : "+size);
			$.each(window.maxicharts_reports, function(index, value) {

				console.log(index + ' => ' + value);
				// console.log(document.getElementById(index));
				var ctx = document.getElementById(index).getContext("2d");
				console.log(value.type);

				var chartjsType = '';// value.type.toLowerCase();
				var chartData = value.data;
				// console.log(chartData);
				var chartOptions = value.options;
				// console.log(chartOptions);
				switch (value.type) {
					case 'doughnut' :
						chartjsType = 'doughnut'
						break;
					case 'PolarArea' :
						chartjsType = 'polarArea';
						break;
					case 'horizontalBar' :
						chartjsType = 'horizontalBar';
						break;
					case 'bar' :
						chartjsType = 'bar';
						break;
					case 'line' :
						chartjsType = 'line';
						break;
					case 'radar' :
						chartjsType = 'radar';
						break;
					default :
						chartjsType = 'pie';

				}

				if (ctx && ctx != null && chartjsType && chartData && chartOptions && chartjsType != null && chartData != null && chartOptions != null && typeof chartjsType !== 'undefined' && typeof chartData !== 'undefined'
						&& typeof chartOptions !== 'undefined') {
					// console.log(index);
					// console.log(window.maxicharts_reports_init);
					try {
						var newChart = new Chart(ctx, {
							type : chartjsType,
							data : chartData,
							options : chartOptions,
						});

						/*
						 * console.log(chartjsType); console.log(chartData);
						 * console.log(chartOptions); console.log(newChart);
						 */
						window.maxicharts_reports_init[index] = newChart;
					} catch (err) {
						console.error("Error processing " + index);
					}

				}
			});
		});