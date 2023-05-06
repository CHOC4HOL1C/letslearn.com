const search =() =>{
    const searchbox = document.getElementById("search-items").ariaValueMax.toUpperCase();
    const storeitems = document.getElementById("col-list")
    const course = document.querySelectorAll(".col")
    const coursename = document.getElementById("h5")

    for(var i =0;i<coursename.length;i++){
        let match = course[i].getElementsByTagName('h5')[0];

        if(match){
            let textvalue = match.textContent || match.innerHTML

            if(textvalue.toUpperCase().indexOf(searchbox)> -1){
                course[i].style.display = "";
            }
            else{
                course[i].style.display="none";
            }
        }
    }
}