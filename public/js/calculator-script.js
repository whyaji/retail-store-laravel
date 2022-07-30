const display = document.querySelector('#display');
const subDisplay = document.querySelector('#sub-display');
const buttons = document.querySelectorAll('button');
let lastOp = '';
let tempResult = '';

buttons.forEach((item) => {
    item.onclick = () => {
        if (item.id == 'clear') {
            subDisplay.innerText = '';
            display.innerText = '';
            tempResult = '';
            lastOp = '';
        } else if (item.id == 'backspace') {
            let str = display.innerText.toString();
            display.innerText = str.slice(0, -1);
        } else if (item.className == 'btn-operator') {
            let string = display.innerText.toString();
            let string2 = subDisplay.innerText.toString();
            if (string == '' && string2 == '') {} else if (isNaN(string2.slice(-1)) && string2.slice(-1) != '=' && tempResult == '') {
                subDisplay.innerText = string2.slice(0, -1) + item.id;
            } else if (string2.slice(-1) != '=') {
                let result = string2 + string;
                subDisplay.innerText = eval(result) + item.id;
            } else {
                subDisplay.innerText = string + item.id;
            }
            tempResult = '';
        } else if (item.id == 'equal') {
            let string = display.innerText.toString();
            if (string == '') {} else if (subDisplay.innerText.toString().slice(-1) != '=') {
                let result = subDisplay.innerText.toString() + display.innerText.toString();
                let string2 = subDisplay.innerText.toString();
                if (isNaN(result) || string2 =='') {
                    if (string2 != '') {
                        lastOp = subDisplay.innerText.toString().slice(-1) + display.innerText.toString();
                    }
                    subDisplay.innerText = result + '=';
                    display.innerText = eval(result);
                }
            } else if (lastOp != ''){
                let result = display.innerText.toString() + lastOp;
                subDisplay.innerText = result + '=';
                display.innerText = eval(result);
            }
            if (string != '') {
                tempResult = '';
            }
        } else {
            tempResult += item.id;
            display.innerText = tempResult;
        }
    };
});

const calculator = document.querySelector('.cal');