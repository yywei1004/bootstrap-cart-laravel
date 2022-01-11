let orderItem = document.querySelectorAll('.order-list')
let addBtn = document.querySelectorAll('.add')
let reduceBtn = document.querySelectorAll('.reduce')
let itemNumInput = document.querySelectorAll('.order-input')
let itemSubtotal = document.querySelectorAll('.order-item-subtotal span')
let itemPrice = document.querySelectorAll('.order-item-price')
let orderQty = document.querySelector('.qty')
let orderSubtotal = document.querySelector('.subtotal')
let orderFee = document.querySelector('.fee')
let orderTotal = document.querySelector('.total')
// 若有小數點則可改Number()為parseInt()
function calculateOrderItemSubtotal(index){
    itemSubtotal[index].innerHTML = Number(itemNumInput[index].value) * Number(itemPrice[index].textContent);
    caculateOrderPrice();
}
function handleButton(index,num){
    itemNumInput[index].value = Number(itemNumInput[index].value) + num;
    calculateOrderItemSubtotal(index)
}
function caculateOrderPrice() {
    let qty = 0;
    let subtotal = 0;
    let fee = 60;
    for(let i = 0; i < orderItem.length; i++){
        qty = qty + Number(itemNumInput[i].value);
        subtotal = subtotal + Number(itemSubtotal[i].textContent);
    }
    if(subtotal >= 490 || subtotal == 0) fee = 0;
    orderQty.innerHTML = qty;
    orderSubtotal.innerHTML = '$ ' + subtotal;
    orderFee.innerHTML = '$ ' + fee;
    orderTotal.innerHTML = '$ ' + Number(subtotal + fee);
}

window.onload = function () {
    for(let i = 0; i < orderItem.length; i++){
        calculateOrderItemSubtotal(i);
    }
}

addBtn.forEach(function (btn, index) {
    btn.addEventListener('click',function () {
        handleButton(index,1)
    })
})
reduceBtn.forEach(function (btn,index) {
    btn.addEventListener('click',function () {
        if (itemNumInput[index].value <= 1) {
            let yes = confirm('是否確定要刪除該商品')
            if (yes) {
                orderItem[index].remove();
            }else{
                return
            }
        }
        handleButton(index,-1)
    })
})
itemNumInput.forEach(function (input, index) {
    input.addEventListener("change", function () {
        if (input.value < 1) {
            let yes = confirm('是否確定要刪除該商品')
            if (yes) {
                orderItem[index].remove();
            }else{
                input.value = 1;
                calculateOrderItemSubtotal(index);
                return
            }
        }
        calculateOrderItemSubtotal(index);
    });
});