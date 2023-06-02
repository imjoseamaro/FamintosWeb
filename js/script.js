function test(){
    botao=document.querySelector('input[name="slide"]:checked').value
    document.getElementById(`s1`).style.display='none'
    document.getElementById(`s2`).style.display='none'
    document.getElementById(`s3`).style.display='none'
    document.getElementById(`s${botao}`).style.display='flex'
    if(botao==1){
        setTimeout(function(){
            document.getElementById(`b1`).checked=false
            document.getElementById(`b2`).checked=true
            test()
        },6000)
    }else if(botao==2){
        setTimeout(function(){
            document.getElementById(`b2`).checked=false
            document.getElementById(`b3`).checked=true
            test()
        },6000)
    }else if(botao==3){
        setTimeout(function(){
            document.getElementById(`b3`).checked=false
            document.getElementById(`b1`).checked=true
            test()
        },6000)
    }else{
        console.log('erro')
    }
}
