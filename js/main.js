let time = document.getElementById('time');

function timeDisplay(){
    let current = new Date();

    let h, m, s, day, date, mount, year;

    h = current.getHours();
    m = current.getMinutes();
    s = current.getSeconds();

    if(h < 10){h = '0' + h}
    if(m < 10){m = '0' + m}
    if(s < 10){s = '0' + s}

    time.innerHTML = h + ':' + m + ':' + s;

    setTimeout('timeDisplay()', 1000);
}



timeDisplay();