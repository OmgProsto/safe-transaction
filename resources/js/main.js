
submitFooterForm = (url) => {
    let inputName = document.getElementById("input__name")
    let inputPhone = document.getElementById("input__phone")
    let csrf = document.querySelector('meta[name="csrf-token"]').content
    console.log(csrf);
    let data = {
        "name": inputName.value,
        "phone": inputPhone.value
    };

    data = JSON.stringify(data)
    console.log(data)
    console.log(url)
    fetch( url, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': csrf,
            'Accept': 'application/json',
            'Content-type': 'application/json',
        },
        body: data
    }).then(function(response){
        if (response.status == 422) {
            let labelName = document.getElementById("labelName").style.display = 'block';
            let labelPhone = document.getElementById("labelPhone").style.display = 'block';
            
            return;
        }

        if (response.status != 200) {
            let error = new Error(response.statusText);
            error.response = response;
            throw error
        }
        alert("Заявка успешно отправлена. Вскоре с вами свяжется специалист")
        console.log(response)

        inputName.value = ''
        inputPhone.value = ''
    }).catch(function(error){
        alert("Ошибка отправки письма. Обратитесь пожалуйста в тех. поддержку mail: safedeal2022@yandex.ru")
        console.log(error);
    });
    return false;
}

const anchors = [].slice.call(document.querySelectorAll('a[href*="#"]')),
      animationTime = 300,
      framesCount = 20;

anchors.forEach(function(item) {
  // каждому якорю присваиваем обработчик события
  item.addEventListener('click', function(e) {
    // убираем стандартное поведение
    e.preventDefault();
    
    // для каждого якоря берем соответствующий ему элемент и определяем его координату Y
    let coordY = document.querySelector(item.getAttribute('href')).getBoundingClientRect().top + window.pageYOffset;
    
    // запускаем интервал, в котором
    let scroller = setInterval(function() {
      // считаем на сколько скроллить за 1 такт
      let scrollBy = coordY / framesCount;
      
      // если к-во пикселей для скролла за 1 такт больше расстояния до элемента
      // и дно страницы не достигнуто
      if(scrollBy > window.pageYOffset - coordY && window.innerHeight + window.pageYOffset < document.body.offsetHeight) {
        // то скроллим на к-во пикселей, которое соответствует одному такту
        window.scrollBy(0, scrollBy);
      } else {
        // иначе добираемся до элемента и выходим из интервала
        window.scrollTo(0, coordY);
        clearInterval(scroller);
      }
    // время интервала равняется частному от времени анимации и к-ва кадров
    }, animationTime / framesCount);
  });
});