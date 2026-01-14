// import './bootstrap';

let tagbox = document.querySelector(".tagbox");
let input = document.querySelector("#skillinput");
let hiddenData = document.getElementById('hiddenData');
let tagsArr = [];

// Disable enter key on form
document.querySelector('#skillinput')
  .addEventListener('keydown', (e) => {
    if (e.key === 'Enter') {
      e.preventDefault();
    }
  });

function createTag()
{
    tagbox.querySelectorAll("li").forEach(li => li.remove());
    tagsArr.slice().reverse().forEach(tag => {
        let tagli = `<li class="flex p-2 m-2 items-center h-fit bg-black rounded-xl">
            ${tag}
            <i onclick="remove(this, '${tag}')" class="remove"> 
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16"><path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/></svg>
            </i> 
        </li>`;
        tagbox.insertAdjacentHTML("afterbegin", tagli);
    })
}

function addTag(e)
{
    if (e.key == "Enter"){
        e.preventDefault();
        let tag = e.target.value.replace(/\s+/g, ' ');                  // remove unwanted spaces from tags
        
        if(tag.length > 1 && !tagsArr.includes(tag)){                   // if tag length greates than 1 and the tag isn't exist
            tag.split(',').forEach(tag =>{                              // splitting each tag from comma
                tagsArr.push(tag);                                      // Append into array
                createTag();
            });
        }
        hiddenData.value = JSON.stringify(tagsArr);                     // insert array to hiddendata
        console.log(hiddenData.value);      
        e.target.value = "";
    }
}

function remove(element, tag)
{
    let index = tagsArr.indexOf(tag);                                   // getting tag's index we wanted to delete
    tagsArr = [...tagsArr.slice(0, index), ...tagsArr.slice(index + 1)]; //remove tag from array
    element.parentElement.remove();                                     // remove li from tag-box
    hiddenData.value = JSON.stringify(tagsArr);                         // insert array to hiddendata
    console.log(hiddenData.value);
}

input.addEventListener("keyup", addTag);