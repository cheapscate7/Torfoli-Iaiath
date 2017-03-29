var main = function() 
{
 $('input[name="word"]').val(localStorage['clickedWord']);
 localStorage.removeItem('clickedWord');
}
window.addEventListener("load", main);