function dateTimeStamp(){
	var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

	var d = new Date();

	var namedMonth = months[d.getMonth()];
	
	var days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

	var namedDay = days[d.getDay()];
	
	updatedDate = ('0'+ d.getDate()).slice(-2);
	updatedHours = ('0'+ d.getHours()).slice(-2);
	updatedMinutes = ('0'+ d.getMinutes()).slice(-2);
	updatedSeconds = ('0'+ d.getSeconds()).slice(-2);
	
	alert(namedMonth + " " + updatedDate + " " + d.getFullYear() + " " + updatedHours + ":" + updatedMinutes + ":" + updatedSeconds);
	
	console.log(namedMonth + " " + d.getDate() + " " + d.getFullYear() + " " + d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds());
}