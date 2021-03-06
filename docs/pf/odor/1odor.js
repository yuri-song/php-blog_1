console.clear;

const markers = false;

gsap.registerPlugin(ScrollTrigger);

let t1 = gsap.timeline({
  scrollTrigger:{
    trigger:".page4",
    start:"=-300 10%",
    end:"bottom 85%",
    scrub:0.1
  }
});

t1.from('.page4 > img:nth-of-type(2)', {
  x: -100,
  opacity:0,
  duration: 0.1
});


t1.from('.page4 > img:last-child', {
  x: -100,
  opacity:0,
  duration: 0.1
});

let t2 = gsap.timeline({
  scrollTrigger:{
    trigger:".page10",
    start:"=-300 10%",
    end:"bottom 85%",
    scrub:0.1
  }
});

t2.from('.page10 > img:nth-of-type(2)', {
  x: 100,
  opacity:0,
  duration: 0.1
});



let t3 = gsap.timeline({
  scrollTrigger:{
    trigger:".page12",
    start:"=-300 10%",
    end:"bottom 85%",
    scrub:0.1
  }
});

t3.from('.page12 > img:nth-of-type(2)', {
  x: 100,
  opacity:0,
  duration: 0.1
});



let t4 = gsap.timeline({
  scrollTrigger:{
    trigger:".page14",
    start:"=-300 10%",
    end:"bottom 85%",
    scrub:0.1
  }
});

t4.from('.page14 > img:nth-of-type(2)', {
  x: 100,
  opacity:0,
  duration: 0.1
});


/* 타이핑 효과 */
var typingBool = false; 
var typingIdx=0; 
var liIndex = 0;
var liLength = $(".typing-txt>ul>li").length;

// 타이핑될 텍스트를 가져온다 
var typingTxt = $(".typing-txt>ul>li").eq(liIndex).text(); 
typingTxt=typingTxt.split(""); // 한글자씩 자른다. 
if(typingBool==false){ // 타이핑이 진행되지 않았다면 
  typingBool=true; 
  var tyInt = setInterval(typing,100); // 반복동작 
} 

function typing(){ 
  if(typingIdx<typingTxt.length){ // 타이핑될 텍스트 길이만큼 반복 
    $(".typing").append(typingTxt[typingIdx]); // 한글자씩 이어준다. 
    typingIdx++; 
  } else{ //한문장이끝나면
    //다음문장으로.. 마지막문장이면 다시 첫번째 문장으로 
    if(liIndex>=liLength-1){
      liIndex=0;
    }else{
      liIndex++; 
    }

    //다음문장을 타이핑하기위한 셋팅
    typingIdx=0;
    typingBool = false; 
    typingTxt = $(".typing-txt").eq(liIndex).text(); 

    //다음문장 타이핑전 1초 쉰다
    clearInterval(tyInt);
    setTimeout(function(){
      $(".typing").html('');
      tyInt = setInterval(typing,100);
    },1000);
  } 
}  
