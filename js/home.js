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
