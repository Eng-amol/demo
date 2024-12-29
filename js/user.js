let headerList = document.querySelectorAll('.list')
for(let i=0;i<headerList.length;i++){
    headerList[i].addEventListener('click',() => {
        if(headerList[i].getAttribute('state') === 'open'){
            headerList[i].setAttribute('state','close')
        }else{
            headerList[i].setAttribute('state','open')
        }
        for(let j=0;j<headerList.length;j++){
            if(j !== i){
                headerList[j].setAttribute('state','close')
            }
        }
    })
}


// user cart
let cart_button = document.querySelector(".cart")
let cart_div = document.querySelector(".cart_div")
cart_button.addEventListener('click',() => {
    if(cart_div.getAttribute('state') === "close"){
        cart_div.setAttribute('state','open')
    }else{
        cart_div.setAttribute('state','close')
    }
})

// book setting list
let book_list_button = document.querySelectorAll(".book-list")
let book_list = document.querySelectorAll(".book-setting-list")
for(let i = 0 ; i < book_list_button.length;i++){
    book_list_button[i].addEventListener('click',() => {
        if(book_list[i].style.display == "none"){
            book_list[i].style.display = 'block'
        }else{
            book_list[i].style.display = 'none'
        }
    })
}


// search box
let search_box = document.querySelector('#search')
let books_name = document.querySelectorAll('.book-name')
let book_div = document.querySelectorAll('.book')
search_box.addEventListener('change',() => {
    for(let j = 1;j < book_div.length;j++){
        book_div[j].style.display = ""
    }
    for(let i = 0;i < books_name.length; i++){
        if(search_box.value == books_name[i].innerText || String(search_box.value).toLowerCase() == String(books_name[i].innerText).toLowerCase()){
            console.log(book_div[i+1])
            for(let j = 1;j < book_div.length;j++){
                if(j == i+1){
                    continue
                }
                else{
                    book_div[j].style.display = "none"
                }
            }
        }
    }
    if(search_box.value === ''){
        console.log(0)
        for(let j = 1;j < book_div.length;j++){
            book_div[j].style.display = ""
        }
    }
})

