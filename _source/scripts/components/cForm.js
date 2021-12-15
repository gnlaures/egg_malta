 {
    // select 2
    $('.js-select2__multiple').select2({
        placeholder: "Selecione",
    });
    $('.js-select2__oneOption').select2({
        placeholder: "Selecione",
    });
    $('.c-form__field.--select2 label').on('click', function () {
        var idSelect2 = $(this).closest('li').find('select').attr('id');
        idSelect2 = '#' + idSelect2;
        $(idSelect2).select2('open');
    });
     $('.c-form__field *').on('click', function(e) {
         $('.c-form__field').removeClass('is-active');
         $(this).closest('li').addClass('is-active');
     });

    // select
    const cForm__selects = document.querySelectorAll('.c-form select');
    cForm__selects.forEach((select) => {
        select.addEventListener('click', function () {
            select.parentElement.parentElement.classList.add('is-active');
        })
        select.addEventListener('change', function (e) {
            let selectedValue = select.children[select.selectedIndex].text;
            select.closest('.c-form__field').querySelectorAll('.inputBox')[0].children[0].value = selectedValue
            select.parentElement.parentElement.classList.remove('is-active');
        })
        select.addEventListener('focusout', function () {
            select.parentElement.parentElement.classList.remove('is-active');
        })
    });

    // input attach
    const cForm__attach = document.querySelectorAll('.c-form .inputAttach');
    cForm__attach.forEach((input) => {
        input.addEventListener('change', function () {
            let t = input.value.split('fakepath')[1];
            input.closest('.--file').querySelectorAll('.inputText')[0].value = t
        })
    })

    // range slider
    const cForm__rangeSlider = document.querySelectorAll('.c-form .rangeSlider')
    const cForm__rangeSliderBar = '.rangeSlider__range'
    const cForm__rangeSliderValue = '.rangeSlider__value'
    cForm__rangeSlider.forEach((range) => {
        range.querySelectorAll(cForm__rangeSliderValue).forEach((valueCaption) => {
            let thisValue = valueCaption.previousElementSibling.getAttribute('value')
            valueCaption.innerHTML = thisValue;
        })
        range.querySelectorAll(cForm__rangeSliderBar).forEach((bar) => {
            bar.addEventListener('input', function () {
                bar.nextElementSibling.innerHTML = this.value;
            });
        })
    })

    // range inputs
    const cForm__rangeInputs = document.querySelectorAll('.c-form .--range');
    cForm__rangeInputs.forEach((element) => {
        const minElement = element.querySelectorAll('.min input');
        const maxElement = element.querySelectorAll('.max input');

        // setar valor maximo para o campo range minimo
        // setar valor minimo para o campo range maximo
        const minValue = +minElement[0].getAttribute('min');
        const maxValue = +maxElement[0].getAttribute('max');
        maxElement[0].setAttribute('min', minValue)
        minElement[0].setAttribute('max', maxValue)

        // validação simples
        minElement.forEach((input) => {
            input.addEventListener('focusout', () => {
                let thisValue = input.value;
                if ((thisValue < minValue) || (thisValue > maxValue)) {
                    input.value = minValue
                }
            })
            input.addEventListener('keyup', () => {
                let thisValue = input.value;
                maxElement[0].setAttribute('min', thisValue);
            });
        })
        maxElement.forEach((input) => {
            input.addEventListener('focusout', () => {
                let thisValue = input.value;
                if ((thisValue < minElement[0].value) || (thisValue > maxValue)) {
                    input.value = maxValue
                }
            })
        })
    });

 }
