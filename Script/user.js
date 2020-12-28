let header = document.querySelector('.grid-header')

header.addEventListener('click', function(){
    let file = document.querySelector('#file')
    let btn = document.querySelector('#btnSubmit')

    file.click()
    file.addEventListener('change', function(){
        btn.click()
    })
})