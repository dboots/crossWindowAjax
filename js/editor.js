$('document').ready(function() {
	_init();
});

const PROCESS_URL = 'js/ajax/process.php';

function _init() {
	$.ajax({
		method: 'POST',
		url: PROCESS_URL,
		data: {
			action: 'test'
		},
		success: function(data, txtStatus, jqXHR) {
		}
	});
}

function set(attribute, value, callback) {
	$.ajax({
		method: 'POST',
		url: PROCESS_URL,
		data: {
			action: 'set',
			attribute: attribute,
			value: value
		},
		sucess: callback
	});
}

function poll(interval, attribute, callback) {
	var intervalId = setInterval(function() {
		$.ajax({
			method: 'POST',
			url: PROCESS_URL,
			data: {
				action: 'get',
				attribute: attribute
			},
			success: callback
		})
	}, interval)
}