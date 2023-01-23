let search_input=document.querySelector("#search_input");
 function search(){

    console.log(search_input.value);
    var produit = document.querySelectorAll(".produit");
    produit.forEach(element => {
        var item = element.querySelector(".produit_name").innerText;
        console.log(item);
        if(item.includes(search_input.value)){
            element.classList.remove("hide");
            console.log("true")
        }
        else
        {
            element.classList.add("hide");
            
        }
    });
}