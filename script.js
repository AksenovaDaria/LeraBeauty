let tel = document.querySelector('.tel');
let name = document.querySelector('.name');
let usl = document.querySelector('.usl');


let button = document.querySelector('.butto_form');
button.addEventListener("click", goFetch);

function goFetch (e) {
    e.preventDefault();
    let tel = document.querySelector('.tel').value;
    let name = document.querySelector('.name').value;
    let usl = document.querySelector('.usl').value;
    

    if (tel !== "" && name !== "" && usl !== "") {
        fetch ('send.php', {
            method: 'POST',
            headers:{
                'content-type': 'application/x-www-form-urlencoded',
            },
            body: `usl=${usl}&name=${name}&tel=${tel}`
        })
        .then(data => {
            return data.text();
        })
        .then(data => {
            if (data == 1) {
                alert('Данные успешно отправлены');
            } else {
                alert('Возникла ошибка. Попробуйте снова.')
            }
        })
        
    } else {
        document.querySelector('.empty').innerHTML = ('Не все поля заполнены');
    }
 }
