function getTimeRemaining(endtime) {
    var weddate=$("#dates").html();
    var datefields=weddate.split(/[/]/);
    var month=datefields[0]-1;
    var date=datefields[1];
    var year=datefields[2];
    //alert(weddate);
    var enddateis=Date.parse(new Date(year,month,date));   //(yy,mm,d)
    var currentdate=Date.now();
    var t = enddateis - currentdate;
  
    if(t<=0)
    {
        $("#countdown-ex1").remove();
        //$("#checkWedding").html("Wedding Finished");
    }
    else
    {
        var seconds = Math.floor((t / 1000) % 60);
        var minutes = Math.floor((t / 1000 / 60) % 60);
        var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
        var days = Math.floor(t / (1000 * 60 * 60 * 24));
  
        return {
            'total': t,
            'days': days,
            'hours': hours,
            'minutes': minutes,
            'seconds': seconds
        };
    }
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('#days');
  var hoursSpan = clock.querySelector('#hours');
  var minutesSpan = clock.querySelector('#minutes');
  var secondsSpan = clock.querySelector('#seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
     clearInterval(timeinterval);
    
     
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
  
}

var deadline = new Date(Date.parse(new Date()) + 1 * 1 * 1 * 10 * 1000);
//initializeClock('countdown-ex1', deadline);

                            