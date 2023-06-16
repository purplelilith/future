
/* vh 구하기 - 최초 1회 */
const setVh = () => {
    document.documentElement.style.setProperty('--vh', `${window.innerHeight}px`)
  };
setVh();



/* calendar 작성 스크립트 */
window.onload = function () { buildCalendar(); }    // 웹 페이지가 로드되면 buildCalendar 실행

let nowMonth = new Date(2023,9,22);  // 월은 -1 해서 입력해야 함
let today = new Date();
nowMonth.setHours(0,0,0,0);    // 비교 편의를 위해 today의 시간을 초기화

// 달력 생성 : 해당 달에 맞춰 테이블을 만들고, 날짜를 채워 넣는다.
function buildCalendar() {
    

    let firstDate = new Date(nowMonth.getFullYear(), nowMonth.getMonth(), 1);     // 이번달 1일
    let lastDate = new Date(nowMonth.getFullYear(), nowMonth.getMonth()+1, 0);  // 이번달 마지막날
    

    let tbody_Calendar = document.querySelector(".my-calendar > tbody");
    document.getElementById("calMonth").innerText = nowMonth.getMonth() +1;  // 월 숫자 갱신

    while (tbody_Calendar.rows.length > 0) {                        // 이전 출력결과가 남아있는 경우 초기화
        tbody_Calendar.deleteRow(tbody_Calendar.rows.length - 1);
    }

    let nowRow = tbody_Calendar.insertRow();        // 첫번째 행 추가           

    for (let j = 0; j < firstDate.getDay(); j++) {  // 이번달 1일의 요일만큼
        let nowColumn = nowRow.insertCell();        // 열 추가
    }

    for (let nowDay = firstDate; nowDay <= lastDate; nowDay.setDate(nowDay.getDate() + 1)) {   // day는 날짜를 저장하는 변수, 이번달 마지막날까지 증가시키며 반복  

        let nowColumn = nowRow.insertCell();        // 새 열을 추가하고
        nowColumn.innerText = nowDay.getDate();      // 추가한 열에 날짜 입력
        
    
        if (nowDay.getDay() == 0) {                 // 일요일인 경우 글자색 빨강으로
            nowColumn.style.color = "#926E6F";
        }
        if (nowDay.getDay() == 6) {                 // 토요일인 경우 글자색 파랑으로 하고
            nowColumn.style.color = "#CA8A8B";
            nowRow = tbody_Calendar.insertRow();    // 새로운 행 추가
        }
        if (nowDay.getDate() == nowMonth.getDate()) {
            nowColumn.classList.add('dday')
        }
    }

    //남은 날짜 카운트
    const diff = nowMonth - today;
    const diffDay = Math.ceil(diff / (1000*60*60*24));
    if(diffDay > 0) {
        $('#count').html(`민현과 주연의 결혼식이<br> <span>${diffDay}일</span> 남았습니다`);
    } else if(diffDay == 0) {
        $('#count').html(`민현과 주연의 결혼식<br>  <span>당일</span> 입니다`);
    } else if(diffDay < 0) {
        $('#count').html(`민현과 주연의 결혼식이 지났습니다.<br>  감사합니다.`);
    }

}














