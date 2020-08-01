const fibonacci = [];

for(let i = 0; i <=6; i++){
    if(i <= 1){
        fibonacci.push(i);
    }else{
        let num = fibonacci[i - 2]; 
        let num2 = fibonacci[i - 1]; 
        let sum = num + num2;
        fibonacci.push(sum);
    }
}
