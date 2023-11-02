function display(){
   var element = document.getElementById('ccp');
   if(element.classList.contains('hidden')){
    element.classList.remove('hidden');
    } else {
    element.classList.add('hidden');
    }
}
