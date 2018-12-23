$(function(){
	$(".up").on("click",function(){
		var oldVal = $(".quantity").val();
		var newVal = parseInt(oldVal)+1;
		$(".quantity").val(newVal);
	});
	$(".down").on("click",function(){
		var oldVal = $(".quantity").val();
		if (oldVal!=1){
			var newVal = parseInt(oldVal)-1;
		} else{
			newVal = 1;
		}
		$(".quantity").val(newVal);
	});
	
});