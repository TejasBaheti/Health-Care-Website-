var selectedIdea = [];
function submittRes(){
    for (let index = 1; index < 8; index++) {       
        var selectedIdeas = document.querySelectorAll(`input[name="q${index}"]`);
        var cnt=1;    
        for (const button of selectedIdeas) {
            if (button.checked) {
                console.log("hai")
                selectedIdea[index] = cnt;
                break;
            }
            cnt++;
        }
        console.log(selectedIdea[index])
    }
    sendData()
}
function sendData(){
    $.post("partials/api/sendData.php",
    {
        data: selectedIdea
    })
}