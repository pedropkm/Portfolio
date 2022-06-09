const daysEl = document.getElementById("days")
const hourseL = document.getElementById("hours")
const minEl = document.getElementById("min")
 const secondsEl = document.getElementById("seconds")



const Nextchapter= "1 jan 2023"

function countdown(){
    const newDate = new Date(Nextchapter)
    const currentDate = new Date()
    const seconds = new Date(newDate - currentDate) /1000
    const days =Math.floor( seconds / 3600 / 24 )
    const hours = Math.floor(seconds / 3600)% 24
    const minutes = Math.floor(seconds / 60) % 60
    const Second = Math.floor(seconds)% 60

    daysEl.innerHTML= days
    hourseL.innerHTML = hours
    minEl.innerHTML = minutes
    secondsEl.innerHTML = Second

}

function FormatTime(){
    return time < 10? (`0${time}`): time
}
countdown()
setInterval(countdown,1000)