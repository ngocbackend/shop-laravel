$(document).ready(function() {
	$('#btn').click(function() {
		var name = $("#name").val();
		var parent = $("#parent").val();
		var status = $("#status").val();
		var token = $("#token").val();
		$.ajax({
			url: "{{url('category-add')}}",
			type: 'post',
			data: "name=" + name +"&parent=" + parent + "&status=" + status + "&token=" + token,
			success:function(data){
				console.log(data);
			}
		})
		
	});
});