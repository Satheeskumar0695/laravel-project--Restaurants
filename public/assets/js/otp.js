var countDownDate = new Date().getTime() + 5 * 60 * 1000;

        var x = setInterval(function() {
            var now = new Date().getTime();
            var distance = countDownDate - now;

            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            var remainingTime = minutes + "m " + seconds + "s ";
            document.getElementById("timer").innerHTML = "Remaining Time: " + remainingTime;

            if (distance < 0) {
                clearInterval(x);
                window.location.href = '/email';
            }
        }, 1000);
