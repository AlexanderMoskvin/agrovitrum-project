let productsListMobile = document.querySelector("#product-list-mobile")

let closeButton = document.querySelector(".close-menu")

let close = document.querySelector(".close-menu img")

let listButton = document.querySelector(".icon-menu")

let list = document.querySelector(".icon-menu img")

let block = document.querySelector(".d-block-3")

let blockList = document.querySelector(".d-block-3 ul")

let headerTopBlock = document.querySelector(".header-top-block")

let searchForm = document.querySelector(".search-form")

list.onclick = () => {
    productsListMobile.style.display = 'block'
    closeButton.style.display = 'block'
    close.style.display = 'block'
    listButton.style.display = 'none';
    headerTopBlock.style.display = 'none';
    searchForm.style.marginTop = '45px';
}

close.onclick = () => {
    productsListMobile.style.display = 'none'
    closeButton.style.display = 'none'
    list.style.display = 'block'
    listButton.style.display = 'block';
    headerTopBlock.style.display = 'block';
    searchForm.style.marginTop = '0';
}

block.onmouseover = () => {
    blockList.style.display = 'block'
}

block.onmouseout = () => {
    blockList.style.display = 'none'
}

let buttonMail = document.querySelector(".feedBack")

let form = document.querySelector("#hideBlock")

buttonMail.onclick = () => {
    form.style.display = 'block'
}

let hiddenClose = document.querySelector(".hiddenClose img")

hiddenClose.onclick = () => {
    form.style.display = 'none'
}

let first = document.querySelector('.first')

let second = document.querySelector('.second')

let third = document.querySelector('.third')

let descriptionFirst = document.querySelector('.description-first')

let descriptionSecond = document.querySelector('.description-second')

let descriptionThird = document.querySelector('.description-third')

first.onclick = () => {
    descriptionFirst.style.display = 'block'
    descriptionSecond.style.display = 'none'
    descriptionThird.style.display = 'none'
    first.style.background = '#85a81e'
    second.style.background = 'white'
    third.style.background = 'white'
}

second.onclick = () => {
    descriptionFirst.style.display = 'none'
    descriptionSecond.style.display = 'block'
    descriptionThird.style.display = 'none'
    first.style.background = 'white'
    second.style.background = '#85a81e'
    third.style.background = 'white'
}

third.onclick = () => {
    descriptionFirst.style.display = 'none'
    descriptionSecond.style.display = 'none'
    descriptionThird.style.display = 'block'
    first.style.background = 'white'
    second.style.background = 'white'
    third.style.background = '#85a81e'
}
















