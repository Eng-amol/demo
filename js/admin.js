// user list
let list_button = document.querySelector("#list_icon")
let list_div = document.querySelector(".window_div")
list_button.addEventListener('click',() => {
    if(list_div.getAttribute('state') === "close"){
        list_div.setAttribute('state','open')
    }else{
        list_div.setAttribute('state','close')
    }
})

// admin search book 
let search_box = document.querySelector('#search')
let books_name = document.querySelectorAll('.book-name')
let book_tr = document.querySelectorAll('.books-table tr')
search_box.addEventListener('change',() => {
    for(let j = 1;j < book_tr.length;j++){
        book_tr[j].style.display = ""
    }
    for(let i = 0;i < books_name.length; i++){
        if(search_box.value == books_name[i].innerText || String(search_box.value).toLowerCase() == String(books_name[i].innerText).toLowerCase()){
            console.log(book_tr[i+1])
            for(let j = 1;j < book_tr.length;j++){
                if(j == i+1){
                    continue
                }
                else{
                    book_tr[j].style.display = "none"
                }
            }
        }
    }
    if(search_box.value === ''){
        console.log(0)
        for(let j = 1;j < book_tr.length;j++){
            book_tr[j].style.display = ""
        }
    }
})

// add new book button
let add_button = document.querySelector('.add-new-book')
let add_book_window = document.querySelector('#add-book-section')
add_button.addEventListener('click',() => {
    add_book_window.style.display = 'flex'
    // add_book_window.addEventListener('click',() => {
    //     add_book_window.style.display = 'none'
    // })
})
