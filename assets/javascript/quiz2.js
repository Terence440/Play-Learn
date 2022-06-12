document.getElementById('start_btn').addEventListener('click',function(){
    document.querySelector('.modal-bg').style.display ='none';
    document.querySelector('#quiz').style.display ='flex';
    document.querySelector('#quiz').style.display ='flex';
    document.querySelector('#wrapper_Header').style.display ='flex';
    document.querySelector('#footer').style.display ='flex';
    document.querySelector('.time-bg').style.display ='flex';
})

const startingMinutes = 1;
let time = startingMinutes*60;

const countdownEL = document.getElementById('countdown');

setInterval(updateCountdown,1000);

function updateCountdown(){
    if(time != 0){
        const minutes = Math.floor(time/60);
        let second = time%60;
        countdownEL.innerHTML=`${minutes}:${second}`;
        time--;
    }else{
        const minutes = Math.floor(time/60);
        let second = time%60;
        countdownEL.innerHTML=`${minutes}:${second}`;
        location.replace("score.php","_self"); 
        return;
    }
}
