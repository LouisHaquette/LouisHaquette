var seconds = document.getElementById('seconds');
var minutes = document.getElementById('minutes');
var hours = document.getElementById('hours');

var nbr_seconds = parseInt(seconds.innerHTML);
var nbr_minutes = parseInt(minutes.innerHTML);
var nbr_hours = parseInt(hours.innerHTML);

function clock() 
{
	if (nbr_seconds >= 60) {
		nbr_minutes++;
		nbr_seconds = 0;
	
		if (nbr_minutes >= 60) {
			nbr_hours++;
			nbr_minutes = 0;
		}
		
		if (nbr_minutes < 10) {
			minutes.innerHTML = '0' + nbr_minutes; 
		}
		else {
			minutes.innerHTML = nbr_minutes;
		}
	}
	
	if (nbr_seconds < 10) {
		seconds.innerHTML = '0' + nbr_seconds; 
	}
	else {
		seconds.innerHTML = nbr_seconds;
	}
	
	if (nbr_hours >= 24) {
		nbr_seconds = 0;
		nbr_minutes = 0;
		nbr_hours = 0;
	}

	if (nbr_hours < 10) {
		hours.innerHTML = '0' + nbr_hours;
	}
	else {
		hours.innerHTML = nbr_hours;
	}
	
	nbr_seconds++;
	
	time = setTimeout('clock()', 1000);
}

clock();
