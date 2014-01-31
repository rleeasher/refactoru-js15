$(function(){
	//use date index to find current date through nicedate
	var dates = [];
	var loadDate = (new Date()).getTime();
	var fullMonth = ['January','February','March','April','May','June','July','August','September','October','November','December'];
	var weekday=['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
	// var loadappoints = ["","","","","","","","","",""];

	//create apptDay object
	var apptDay = function(date,dayofweek,appointments){
		this.date=date,
		this.dayofweek = dayofweek,
		this.appointments = appointments
	};

	//makes a nice looking date
	var niceDate = function (mill) {
		var d = new Date(mill);
		var dayName = weekday[d.getDay()];
		var monthName = fullMonth[d.getMonth()];
		var dayNum = d.getDate();
		var yearNum = d.getFullYear();
		var dayofWeek = d.getDay();
		var newStr = [monthName + " " + dayNum + ", " + yearNum, dayofWeek];
		return newStr;
	};


	//renders the dates on the screen
	var render = function () {
		$('.calendar-item').remove();
		$('.mini').hide();
		for (var i = 0; i < dates.length; i++) {
			var newDay = $('#prototype').clone(true);

			newDay.attr('id', 'guid'+ i);			
			newDay.find('.date').text(dates[i].date);
			newDay.attr('class','calendar-item');
			newDay.attr('data-day',dates[i].dayofweek);

				for (var j = 0; j < dates[i].appointments.length; j++) {
					newDay.find('[data-time='+(j+8)+']').find('.appointment-text').text(dates[i].appointments[j]);
					if (newDay.find('[data-time='+(j+8)+']').find('.appointment-text').text().length>1) {
						newDay.find('[data-mini='+(j+8)+']').show();
					};
				};
			newDay.find('.appt-creator').hide();
			newDay.appendTo($('#left-container'));
		};
	};

	//generate days on load
	var generateinitialDays = function () {
		var initialNum = 20;
		for (var i = 0; i < initialNum; i++) {
			var newDay = niceDate(loadDate+(i*86400000));	
			var addDay = new apptDay(newDay[0],newDay[1],["","","","","","","","","",""]);
			dates.push(addDay);
		};
		render();
	};


	//add additional days
	var addDays = function () {
		var additionalDays = 20;
		var currentday = dates.length;
		for (var i = 0; i < additionalDays; i++) {
			var newDay = niceDate(loadDate+((i+currentday)*86400000));
			var addDay = new apptDay(newDay[0],newDay[1],["","","","","","","","","",""]);
			dates.push(addDay);
		};
		render();
	};

	//shows date appt detail as well as submitting new ones
	var showDate = function () {
		$(this).closest('.calendar-item').find('.appt-container').toggle();
		$(this).closest('.calendar-item').find('.appt-creator').toggle();
	};

	var dateFinder = function (date) {
		var index = 0
		for (var i = 0; i < dates.length; i++) {
			if(date === dates[i].date) 
				index = i;
		};
		console.log(index);
		return index;
	};

	var submitData = function (e) {
		e.preventDefault();
		console.log(dates);		
		console.log($(this));
		var time = $(this).find('select').val();
		var text = $(this).find('input').val();

		var day = $(this).closest('.calendar-item').find('.date').text();
		console.log(day+time+text);

		dates[dateFinder(day)].appointments[time-8] = text;
		console.log(dates);
		render();
	};



	//get submit data
	$(document).on('submit','.appt-creator',submitData);

	//showstuff
	$(document).on('click','.date',showDate);

	//infinite scroll
	$(document).on('scroll',function(){
		var docHeight = $(document).height();
		var topDist = $(document).scrollTop();
		var winHeight = $(window).height();

		if ((docHeight-winHeight-topDist)<10) {
			addDays();
		};

		$('.calendar-item').each(function(){
			if ( Math.abs(topDist - $(this).position().top) < 30) {
				dayofweek = parseInt($(this).attr('data-day'));
				$('.dayofweek').text('');
				$('.dayofweek').eq(dayofweek).text('x');
			};
		});
	});

	generateinitialDays();
});