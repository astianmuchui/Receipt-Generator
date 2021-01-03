var receipt = document.querySelector('.container');
var link = document.getElementById('print');
var title = document.getElementById('title');
var body = document.getElementById('body');
receipt.onclick = ()=>{
    title.innerHTML = 'this is a receipt';
    link.style.display = 'none';
    print();   
}
